// ChatGPT
require_once __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Exception\GuzzleException;
use HaoZiTeam\ChatGPT\V2 as ChatGPTV2;

/**
 * 创建 ChatGPT 客户端
 * @return ChatGPTV2|null
 */
function xin_generate_chatgpt_client(): ?ChatGPTV2 {
    $apikey  = wpjam_theme_get_setting( "ai_key" );
    $baseurl = wpjam_theme_get_setting("ai_url" );
    if (empty($apikey) || !isset($baseurl)) {
        return null;
    }
    return new ChatGPTV2( $apikey, $baseurl);
}

/**
 * 生成文章摘要
 * @param int $post_id
 * @param WP_Post $post
 * @return string
 * @throws Exception|GuzzleException
 */
function xin_generate_article_summary( int $post_id, WP_Post $post ): string {
    $client = xin_generate_chatgpt_client();
    if (!$client) {
        // 处理 ChatGPT 客户端未创建的情况
        return '';
    }

    $client->addMessage(
        "You are an article summary generator, ".
        "please generate the summary of the given article ".
        "with provided title and content, ".
        "the language of the summary must equals to the article's mainly used language, ".
        "do not write summary in third person.".
        "system"
    );

    $client->addMessage( "The title of the article：" . $post->post_title );

    $content = $post->post_content;
    $content = wp_strip_all_tags(apply_filters('the_content', $content));
    $max_content_length = wpjam_theme_get_setting( "ai_max_content_length" );
    if ($max_content_length > 0){
        $content = substr($content, 0, $max_content_length);
    }

    $client->addMessage( "The content of the article：" . $content );

    $previous_summary = get_post_meta( $post_id, "ai_summary", true );
    if ( $previous_summary != "" ) {
        $client->addMessage( "The previous summary of the article, please generate the summary similar with the previous one: " . $previous_summary);
    }

    $result = "";
    foreach ( $client->ask( "Now please generate the summary of the article given before" ) as $item ) {
        $result .= $item['answer'];
    }

    return $result;
}

/**
 * 保存文章时触发的动作
 * @param int $post_id
 * @param WP_Post $post
 * @param string $old_status
 */
function argon_on_save_post( int $post_id, WP_Post $post, string $old_status ): void {
    // 如果是自动保存或草稿状态的文章，则不进行处理
    if ( false !== wp_is_post_autosave( $post_id ) || 'auto-draft' == $post->post_status ) {
        return;
    }

    // 如果是修订版本，则获取真实的文章 ID
    $revision_id = wp_is_post_revision( $post_id );
    if ( false !== $revision_id ) {
        $post_id = $revision_id;
    }

    // 检查 AI 模式设置是否为启用状态
    if ( wpjam_theme_get_setting( 'ai_mode' ) == '1' ) {
        return;
    }

    // 检查是否需要更新文章摘要
    $update                                 = $old_status === $post->post_status;
    $post_argon_ai_no_update_post_summary   = 'true';
    $global_argon_ai_no_update_post_summary = 'true';
    if ( $update && $post_argon_ai_no_update_post_summary != 'false' &&
        ( $post_argon_ai_no_update_post_summary == 'true' || $global_argon_ai_no_update_post_summary == 'true' ) ) {
        return;
    }

    // 根据设置确定是异步更新还是同步更新文章摘要
    if ( wpjam_theme_get_setting('ai_async') != '1' ) {
        wp_schedule_single_event( time() + 1, 'argon_update_ai_post_meta', array( $post_id ) );
    } else {
        argon_update_ai_post_meta( $post_id );
    }
}

/**
 * 更新文章摘要的实际操作
 * @param $post_id
 * @throws Exception|GuzzleException
 */
function argon_update_ai_post_meta( $post_id ): void {
    try {
        $summary = xin_generate_article_summary( $post_id, get_post( $post_id ) );
        update_post_meta( $post_id, "ai_summary", $summary );
    } catch ( Exception|GuzzleException $e ) {
        error_log( $e );
    }
}

// 注册定时事件和保存文章触发的动作
add_action( "argon_update_ai_post_meta", "argon_update_ai_post_meta" );
add_action( "publish_post", "argon_on_save_post", 20, 3 );


add_action('wp_ajax_get_article_summary', 'get_article_summary_callback');
add_action('wp_ajax_nopriv_get_article_summary', 'get_article_summary_callback');

/**
 * AJAX 回调函数，用于获取文章摘要
 */
 function get_article_summary_callback() {
    $post_id = intval($_POST['post_id']);
    $post = get_post($post_id);

    // 添加限制条件
    $category_string = wpjam_theme_get_setting("ai_no_category"); // 指定的分类ID，多个分类用英文逗号分隔
    $target_string = wpjam_theme_get_setting("ai_no_meta"); // 指定的字符，多个字符用英文逗号分隔

    // 检查分类限制条件
    $categories = explode(',', $category_string);
    $post_categories = wp_get_post_categories($post_id);
    $category_match = false;
    foreach ($categories as $category) {
        if (in_array($category, $post_categories)) {
            $category_match = true;
            break;
        }
    }

    // 检查字符限制条件
    $content = $post->post_content;
    $keywords = explode(',', $target_string);
    $keyword_match = false;
    foreach ($keywords as $keyword) {
        if (strpos($content, $keyword) !== false) {
            $keyword_match = true;
            break;
        }
    }

    // 获取 ai_summary 自定义字段的值
    $ai_summary = get_post_meta($post_id, 'ai_summary', true);

    // 检查自定义字段是否存在
    if ($ai_summary) {
        // 自定义字段存在，直接返回其值
        echo $ai_summary;
    } else {
        if ($category_match || $keyword_match) {
            echo '此文章不需要生成 AI 摘要'; // 返回空摘要
        } else {
            // 符合限制条件，生成文章摘要
            $summary = xin_generate_article_summary($post_id, $post);
            update_post_meta($post_id, 'ai_summary', $summary);
            echo $summary;
        }
    }

    wp_die(); // 结束请求处理
}