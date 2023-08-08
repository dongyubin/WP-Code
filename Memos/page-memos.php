<?php
/*
Template Name: Memos全屏页面
*/
get_header();?>
<link href="<?php echo get_stylesheet_directory_uri(); ?>/static/css/memos.css" rel="stylesheet" type="text/css">
<link href="https://gcore.jsdelivr.net/gh/eallion/memos.top/assets/css/APlayer.min.css" rel="stylesheet" type="text/css">
<div class="site-content container">
	<div class="row">
		<div class="col-lg-12">
			<div class="content-area">
				<main class="site-main">
				<article class="type-post post">
				<header class="entry-header page">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>
				<div class="entry-wrapper">
					<div class="entry-content u-clearfix">
					    <div class="search-menu col-12">
                                        <input class="search-input input-text flex-fill mr-3 px-2 py-1" type="text"
                                            value="" maxlength="120" placeholder="搜索备忘录">
                                        <div class="primary submit-search-btn outline action-btn" onclick="searchContent()"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="w-4 h-auto opacity-30 dark:text-gray-200">
                                                <circle cx="11" cy="11" r="8"></circle>
                                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                            </svg></div>
                                    </div>
					    <div id="editor"></div>
					    	<div class="total">总共嘀咕了 <span id="total">0</span> 条 🎉</div>
					    	<div id="memos" class="memos"></div>
					</div>
				</div>
				</article>
				</main>
			</div>
		</div>
	</div>
</div>
   <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/static/js/memos/lozad.min.js"></script>
   <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/static/js/memos/twikoo.all.min.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/static/js/memos/marked.min.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/static/js/memos/moment.min.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/static/js/memos/moment.twitter.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/static/js/memos/APlayer.min.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/static/js/memos/Meting.min.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/static/js/memos/OwO.min.js"></script>
    <script type="module" src="<?php echo get_stylesheet_directory_uri(); ?>/static/js/memos/bundle.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/static/js/memos/coco-message.min.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/static/js/memos/memos-editor.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/static/js/memos/main.js"></script>
<?php get_footer();?>