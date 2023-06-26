<?php
/*
Template Name: 文章统计
*/
get_header();?>
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
				    <div id="archive-chart" style="width: 100%;height:400px;"></div>
					<div id="tag-chart" style="width: 100%;height:400px;"></div>
					<div id="category-chart" style="width: 100%;height:400px;"></div>
				</div>
				</div>
				</article>
				<?php //comments_template( '', true ); ?>
				</main>
			</div>
		</div>
	</div>
</div>
<?php get_footer();?>
<script src="https://cdn.bootcdn.net/ajax/libs/echarts/5.4.2/echarts.min.js"></script>
<script>
<?php
// 获取从2020年3月1日到现在，每个月发布的文章数量
    global $wpdb;
    $results = $wpdb->get_results("
      SELECT YEAR(post_date) AS `year`, MONTH(post_date) AS `month`, COUNT(ID) AS `count`
      FROM $wpdb->posts
      WHERE post_status = 'publish'
      AND post_type = 'post'
      AND post_date >= '2020-03-01'
      GROUP BY YEAR(post_date), MONTH(post_date)
      ORDER BY YEAR(post_date), MONTH(post_date)
    ");
    $archive_data = json_encode($results); 
    // 将数据转换为json格式，便于在js中使用

?>
// 获取文章标签数据
<?php
  $tags = get_tags(array(
    'orderby' => 'count',
    'order' => 'DESC',
    'number' => 10
  ));
  $tag_data = array();
  foreach ($tags as $tag) {
      $tag_data[] = array(
          'name' => $tag->name,
          'value' => $tag->count,
          'url' => get_tag_link($tag->term_id) // 获取标签链接
          );}
  $data = json_encode($tag_data); // 将数据转换为json格式，便于在js中使用
//   $counts = wp_list_pluck($tags, 'count');
//   $average = array_sum($counts) / count($counts);
?>
// 获取文章分类统计数据
<?php
    $categories = get_categories();
    $category_data = array();
    foreach ($categories as $category) {
      $count = $category->category_count;
      if ($count > 0) {
        $category_data[] = array(
          'name' => $category->name,
          'value' => $count
        );
      }
    }
  ?>

// 抓取ID，初始化echats
  var tagChart = echarts.init(document.getElementById('tag-chart'));
  var archiveChart = echarts.init(document.getElementById('archive-chart'));
  var categoryChart = echarts.init(document.getElementById('category-chart'));
//   标签echats设置
  var option = {
  title: {
    text: 'Top 10 标签统计图',
    // 顶部标题位置：水平居中
    x: 'center'
  },
  tooltip: {
    // 显示柱状图悬浮框
    axisPointer: {
      type: 'shadow'
    }
  },
  xAxis: {
    type: 'category',
    data: <?= $data ?>.map(item => item.name)
  },
  yAxis: {
    type: 'value'
  },
  series: [{
    // 悬浮框里的标题文字
    name: '文章总数',
    data: <?= $data ?>.map(item => item.value),
    type: 'bar',
    // 高亮样式。
    itemStyle: {
      color: {
        type: 'linear',
        x: 0,
        y: 0,
        x2: 0,
        y2: 1,
        colorStops: [{
              offset: 1, color: '#37A2DA'
            }, {
              offset: 0.5, color: '#32C5E9'
            }, {
                offset: 0, color: '#9FE6B8'
            }]
            }
        }
    }]
};

tagChart.setOption(option);
tagChart.on('click', function(params) {
  var data = <?= $data ?>.find(item => item.name === params.name);
  window.open(data.url);
});
// 归档统计echats设置
 var archiveOption = {
    title: {
      text: '自 2020-03-01 开始 文章发布统计',
      x: 'center'
    },
    tooltip: {
      trigger: 'axis',
      axisPointer: {
        type: 'cross',
        label: {
          backgroundColor: '#283b56'
        }
      }
    },
    grid: {
      top: '10%',
      left: '3%',
      right: '4%',
      bottom: '3%',
      containLabel: true
    },
    xAxis: {
      type: 'category',
      boundaryGap: false,
      data: <?= $archive_data ?>.map(item => (item.year+'-')+(item.month>=10?item.month:'0'+item.month)) // 使用php输出数据
    },
    yAxis: {
      type: 'value',
      axisLine: {
        show: false
      },
      axisTick: {
        show: false
      },
      splitLine: {
        lineStyle: {
          color: '#eee'
        }
      }
    },
    series: [
      {
        name: '文章数量',
        type: 'line',
        stack: '总量',
        smooth: true,
        areaStyle: {},
        // 渐变色生成器：echarts.graphic.LinearGradient(右/下/左/上)
        // 第5个参数则是一个数组, 用于配置颜色的渐变过程. 每一项为一个对象, 包含offset和color两个参数. offset的范围是0 ~ 1, 用于表示位置, color不用多说肯定是表示颜色了
        color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
          offset: 0,
          color: '#59C9FF'
        }, {
          offset: 1,
          color: '#FFFFFF'
        }]),
        data: <?= $archive_data ?>.map(item => item.count)
      }
    ]
  };

  archiveChart.setOption(archiveOption);
//   分类echats设置
  var categoryOption = {
    title: {
      text: '文章分类统计',
      x: 'center'
    },
    tooltip: {
      trigger: 'item',
      formatter: '{a} <br/>{b}: {c} ({d}%)'
    },
    // 底部标签显示
    legend: {
      top: 'bottom',
      data: <?php echo json_encode(array_column($category_data, 'name')); ?>
    },
    series: [{
      name: '文章数量',
    //   饼图
      type: 'pie',
      radius: [20, 110],
    //   是否展示成南丁格尔图，通过半径区分数据大小。可选择两种模式：
    // 'radius' 扇区圆心角展现数据的百分比，半径展现数据的大小。
      roseType: 'radius',
    //   显示线条信息
    // 字符串模板 模板变量有：
    // {a}：系列名。
    // {b}：数据名。
    // {c}：数据值。
    // {d}：百分比。
      label: {
        show: true,
        formatter: '{b}: {c} ({d}%)',
      },
      data: <?php echo json_encode($category_data); ?>
    }]
  };
  categoryChart.setOption(categoryOption)
</script>