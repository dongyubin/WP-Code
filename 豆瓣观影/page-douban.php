<?php
/*
Template Name: 豆瓣观影
*/
get_header();?>
<meta name="referrer" content="no-referrer">
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
					    <div class="douban" id="douban">
    <div class="filter">
      <div class="genres">
        <a href="javascript:void 0;" class="search" data-search="genres" data-value="">全部</a>
        <a href="javascript:void 0;" class="search" data-search="genres" data-value="动作">动作</a>
        <a href="javascript:void 0;" class="search" data-search="genres" data-value="动画">动画</a>
        <a href="javascript:void 0;" class="search" data-search="genres" data-value="喜剧">喜剧</a>
        <a href="javascript:void 0;" class="search" data-search="genres" data-value="历史">历史</a>
        <a href="javascript:void 0;" class="search" data-search="genres" data-value="科幻">科幻</a>
        <a href="javascript:void 0;" class="search" data-search="genres" data-value="纪录片">纪录片</a>
        <a href="javascript:void 0;" class="search" data-search="genres" data-value="剧情">剧情</a>
        <a href="javascript:void 0;" class="search" data-search="genres" data-value="奇幻">奇幻</a>
        <a href="javascript:void 0;" class="search" data-search="genres" data-value="犯罪">犯罪</a>
        <a href="javascript:void 0;" class="search" data-search="genres" data-value="运动">运动</a>
        <a href="javascript:void 0;" class="search" data-search="genres" data-value="家庭">家庭</a>
        <a href="javascript:void 0;" class="search" data-search="genres" data-value="悬疑">悬疑</a>
        <a href="javascript:void 0;" class="search" data-search="genres" data-value="古装">古装</a>
        <a href="javascript:void 0;" class="search" data-search="genres" data-value="战争">战争</a>
        <a href="javascript:void 0;" class="search" data-search="genres" data-value="武侠">武侠</a>
        <a href="javascript:void 0;" class="search" data-search="genres" data-value="冒险">冒险</a>
        <a href="javascript:void 0;" class="search" data-search="genres" data-value="灾难">灾难</a>
        <a href="javascript:void 0;" class="search" data-search="genres" data-value="爱情">爱情</a>
        <a href="javascript:void 0;" class="search" data-search="genres" data-value="真人秀">真人秀</a>
        <a href="javascript:void 0;" class="search" data-search="genres" data-value="音乐">音乐</a>
        <a href="javascript:void 0;" class="search" data-search="genres" data-value="脱口秀">脱口秀</a>
        <a href="javascript:void 0;" class="search" data-search="genres" data-value="短片">短片</a>
        <a href="javascript:void 0;" class="search" data-search="genres" data-value="惊悚">惊悚</a>
        <a href="javascript:void 0;" class="search" data-search="genres" data-value="歌舞">歌舞</a>
        <a href="javascript:void 0;" class="search" data-search="genres" data-value="传记">传记</a>
        <a href="javascript:void 0;" class="search" data-search="genres" data-value="儿童">儿童</a>
        <a href="javascript:void 0;" class="search" data-search="genres" data-value="恐怖">恐怖</a>
        <a href="javascript:void 0;" class="search" data-search="genres" data-value="西部">西部</a>
      </div>
      <div class="years">
        <a href="javascript:void 0;" class="search" data-search="year" data-value="">全部</a>
        <a href="javascript:void 0;" class="search" data-search="year" data-value="2023">2023</a>
        <a href="javascript:void 0;" class="search" data-search="year" data-value="2022">2022</a>
        <a href="javascript:void 0;" class="search" data-search="year" data-value="2021">2021</a>
        <a href="javascript:void 0;" class="search" data-search="year" data-value="2020">2020</a>
        <a href="javascript:void 0;" class="search" data-search="year" data-value="2019">2019</a>
        <a href="javascript:void 0;" class="search" data-search="year" data-value="2018">2018</a>
        <a href="javascript:void 0;" class="search" data-search="year" data-value="2017">2017</a>
        <a href="javascript:void 0;" class="search" data-search="year" data-value="2016">2016</a>
        <a href="javascript:void 0;" class="search" data-search="year" data-value="2015">2015</a>
        <a href="javascript:void 0;" class="search" data-search="year" data-value="2014">2014</a>
        <a href="javascript:void 0;" class="search" data-search="year" data-value="2013">2013</a>
        <a href="javascript:void 0;" class="search" data-search="year" data-value="2012">2012</a>
        <a href="javascript:void 0;" class="search" data-search="year" data-value="2011">2011</a>
        <a href="javascript:void 0;" class="search" data-search="year" data-value="2010">2010</a>
        <a href="javascript:void 0;" class="search" data-search="year" data-value="2009">2009</a>
      </div>
      <div class="stars">
        <a href="javascript:void 0;" class="search" data-search="star" data-value="">全部</a>
        <a href="javascript:void 0;" class="search" data-search="star" data-value="5">五星</a>
        <a href="javascript:void 0;" class="search" data-search="star" data-value="4">四星</a>
        <a href="javascript:void 0;" class="search" data-search="star" data-value="3">三星</a>
        <a href="javascript:void 0;" class="search" data-search="star" data-value="2">二星</a>
        <a href="javascript:void 0;" class="search" data-search="star" data-value="1">一星</a>
      </div>
    </div>
    <div class="douban-content" id="content">

    </div>
  </div>
					</div>
				</div>
				</article>
				<?php comments_template( '', true ); ?>
				</main>
			</div>
		</div>
	</div>
</div>
<?php get_footer();?>
<style>
    a {
      text-decoration: none;
    }
    .douban{
      width: 100%;
      height: 100%;
    }
    .filter{
      margin-left: 20px;
    }
    .stars,.genres,.years {
      margin-top: 10px;
    }
    .douban-content {
      display: flex;
      /* 换行显示 */
      flex-wrap: wrap;
      justify-content: space-around;
      text-align: center;
    }
    .list {
      display: flex;
      /* 定义主轴放下：上下 */
      flex-direction: column;
      margin-left: 10px;
      margin-top: 10px;
      position: relative;
    }
    .d-canvas {
      width: 60px;
      height: 60px;
      background-color: #081c22;
      border-radius: 50%;
      position: absolute;
      right: 4px;
      top: 316px;
    }
    .douban img {
      width: 270px;
      height: 380px;
    }
    .active {
      color: #fff;
      background-color: #081c22;
      border-radius: 5px;
    }
</style>
<script>
  /**
   * 绘制评分圆环
  */
  function drawMain(drawing_elem, percent, forecolor, bgcolor) {
    /*
        借鉴地址：[canvas 绘制动态圆环进度条_canvas 环形进度条 背景色_前端小白的江湖路的博客-CSDN博客](https://blog.csdn.net/qq_21058391/article/details/76691047)
        https://github.com/klren0312/daliy_knowledge/issues/63
        @drawing_elem: 绘制对象
        @percent：绘制圆环百分比, 范围[0, 100]
        @forecolor: 绘制圆环的前景色，颜色代码
        @bgcolor: 绘制圆环的背景色，颜色代码
    */
    //  获取画布来渲染上下文
    var context = drawing_elem.getContext("2d");
    var center_x = drawing_elem.width / 2;
    var center_y = drawing_elem.height / 2;
    // Math.PI 表示一个圆的周长与直径的比例，约为 3.14159
    var rad = Math.PI*2/100;    
    // var speed = 0;
    var width = drawing_elem.width;
    var  height = drawing_elem.height;
    
    if (window.devicePixelRatio) { //移动端锯齿解决方案
      drawing_elem.style.width = width + "px";
      drawing_elem.style.height = height + "px";
      drawing_elem.height = height * window.devicePixelRatio;
      drawing_elem.width = width * window.devicePixelRatio;
      context.scale(window.devicePixelRatio, window.devicePixelRatio);
    }

    
    // 绘制背景圆圈
    function backgroundCircle(){
      // .save() 是 Canvas 2D API 通过将当前状态放入栈中，保存 canvas 全部状态的方法。
      context.save();
      // .beginPath() 是 Canvas 2D API 通过清空子路径列表开始一个新路径的方法。当你想创建一个新的路径时，调用此方法。
      context.beginPath();
      // .lineWidth 是 Canvas 2D API 设置线段厚度的属性（即线段的宽度）
      context.lineWidth = 8; //设置线宽
      var radius = center_x - context.lineWidth;
      context.lineCap = "round";
      // .strokeStyle 是 Canvas 2D API 描述画笔（绘制图形）颜色或者样式的属性。默认值是 #000 (black)。
      context.strokeStyle = bgcolor;
      // .arc() 是 Canvas 2D API 绘制圆弧路径的方法。圆弧路径的圆心在 (x, y) 位置，半径为 r，根据anticlockwise （默认为顺时针）指定的方向从 startAngle 开始绘制，到 endAngle 结束。
      context.arc(center_x, center_y, radius, 0, Math.PI*2, false);
      // .stroke() 是 Canvas 2D API 使用非零环绕规则，根据当前的画线样式，绘制当前或已经存在的路径的方法。
      context.stroke();
      // .closePath() 是 Canvas 2D API 将笔点返回到当前子路径起始点的方法。它尝试从当前点到起始点绘制一条直线。如果图形已经是封闭的或者只有一个点，那么此方法不会做任何操作。
      context.closePath();
      // .restore() 是 Canvas 2D API 通过在绘图状态栈中弹出顶端的状态，将 canvas 恢复到最近的保存状态的方法。如果没有保存状态，此方法不做任何改变。
      context.restore();
    }
        
    //绘制运动圆环
    function foregroundCircle(n){
      context.save();
      context.strokeStyle = forecolor;
      context.lineWidth = 8;
      context.lineCap = "round";
      var radius = center_x - context.lineWidth;
      context.beginPath();
      context.arc(center_x, center_y, radius , -Math.PI/2, -Math.PI/2 +n*rad, false); //用于绘制圆弧context.arc(x坐标，y坐标，半径，起始角度，终止角度，顺时针/逆时针)
      context.stroke();
      context.closePath();
      context.restore();
    }
        
    //绘制文字
    function text(n){
      context.save(); //save和restore可以保证样式属性只运用于该段canvas元素
      context.fillStyle = '#fff';
      var font_size = 12;
      // .font 是 Canvas 2D API 描述绘制文字时，当前字体样式的属性。使用和 CSS font 规范相同的字符串值。
      context.font = font_size + "px Helvetica";
      // 该对象包含有关测量文本的信息（例如其宽度）
      var text_width = context.measureText(n.toFixed(0)+"%").width;
      // .fillText() 是 Canvas 2D API 在 (x, y) 位置填充文本的方法。如果选项的第四个参数提供了最大宽度，文本会进行缩放以适应最大宽度。
      context.fillText(n.toFixed(0)+"%", center_x-text_width/2, center_y + font_size/2);
      context.restore();
    }
    
 //执行动画
//  (function drawFrame(){
    // window.requestAnimationFrame(drawFrame);
    // .clearRect() 是 Canvas 2D API 的方法，这个方法通过把像素设置为透明以达到擦除一个矩形区域的目的。
    context.clearRect(0, 0, drawing_elem.width, drawing_elem.height);
    backgroundCircle();
    text(percent);
    foregroundCircle(percent);
    // if(speed >= percent) return;
    // speed += 1;
//  }());
  }
  
  var jsonFile='https://ghproxy.com/https://raw.githubusercontent.com/dongyubin/douban/main/data/douban/movie.json';
  getData(jsonFile);

  /**
   * 通过点击事件高亮筛选条件
  */
  document.addEventListener('click',function(e){
    if(e.target.classList.contains('search')){
      event.preventDefault(); // 防止默认点击行为
      var search_type = e.target.dataset.search;
      document.querySelector(`.active[data-search="${search_type}"]`)?.classList.remove('active')
      var conditions = {};
      if(e.target.dataset.value){
        e.target.classList.add('active')
      }
    }
    getData(jsonFile);
  })

  // 使用$.ajax()方法获取本地JSON文件
  function getData(file){
    $.ajax({
    url: file,
    dataType: 'json',
    success: function(data) {
      var filteredData;
      // 用于存放筛选条件的字典
      var conditions = {}
      // 抓取存放电影内容的元素
      var content = $('#content');
      // 判断是否有筛选条件
      if($('.search.active').length!=0){
        for(let i=0; i<$('.search.active').length; i++){
          var active_type = $('.search.active')[i].dataset['search'];
          var active_value = $('.search.active')[i].dataset['value'];
          conditions[active_type] = active_value;
        }
        // console.log(conditions);
        // 判断筛选条件是否选择
        const year = conditions['year'];
        const star = conditions['star'];
        const genres = conditions['genres'];

        // 下面代码的简写方式
        filteredData = data.filter(
          item => 
            (typeof(year) === 'undefined' || item.subject.year == year) &&
            (typeof(star) === 'undefined' || Math.round(item.subject.rating.star_count) == star) &&
            (typeof(genres) === 'undefined' || item.subject.genres.indexOf(genres) > -1)
        );
        
        // if (typeof(conditions['year']) == "undefined" && typeof(conditions['genres']) == "undefined"){
        //   filteredData = data.filter(
        //     item => Math.round(item.subject.rating.star_count) == conditions['star']
        //   ) 
        // }else if (typeof(conditions['star']) == "undefined" && typeof(conditions['genres']) == "undefined"){
        //   filteredData = data.filter(
        //     item => item.subject.year == conditions['year']
        //   ) 
        // }else if (typeof(conditions['year']) == "undefined" && typeof(conditions['star']) == "undefined"){
        //   filteredData = data.filter(
        //     item => item.subject.genres.indexOf(conditions['genres']) > -1
        //   ) 
        // }else if(typeof(conditions['year']) == "undefined"){
        //   filteredData = data.filter(
        //     item => 
        //       Math.round(item.subject.rating.star_count) == conditions['star'] && 
        //       item.subject.genres.indexOf(conditions['genres']) > -1
        //   ) 
        // }else if (typeof(conditions['star']) == "undefined"){
        //   filteredData = data.filter(
        //     item => 
        //       item.subject.year == conditions['year'] && 
        //       item.subject.genres.indexOf(conditions['genres']) > -1
        //   ) 
        // }else if (typeof(conditions['genres']) == "undefined"){
        //   filteredData = data.filter(
        //     item => 
        //       item.subject.year == conditions['year'] && 
        //       Math.round(item.subject.rating.star_count) == conditions['star']
        //   ) 
        // }
        // else{
        //   filteredData = data.filter(
        //     item => 
        //       item.subject.year == conditions['year'] && 
        //       Math.round(item.subject.rating.star_count) == conditions['star'] && 
        //       item.subject.genres.indexOf(conditions['genres']) > -1
        //   ) 
        // }
      }else{
        filteredData = $.parseJSON(JSON.stringify(data));
      }
      // console.log(filteredData);
      // 清空页面
      content.html('');
      updatePage(content, filteredData);
    },
      error: function(xhr, status, error) {
        // 处理错误情况
        console.log('获取JSON数据失败：' + error);
      }
    });
  }

  /**
   * 填充页面数据
   * @param content 页面顶部div
   * @param Data 数据
   * 
  */
  function updatePage(content, Data){
    // 定义电影标题变量
    let title= '';
    let picNormal = '';
    for(let i=0; i<Data.length; i++){
      // 电影信息
      let subject = Data[i]['subject'];
      // 评分
      let rating = Data[i]['rating'];
      // 电影题目
      title = subject['title'];
      // 电影链接
      // sharing_url = subject['sharing_url'];
      // 电影照片
      // picNormal = subject['pic']['normal'];
      // 照片
      cover_url = subject['cover_url'];
      // 官方评分集合
      let ratings = subject['rating'];
      // 颜色集合
      let color_scheme = subject['color_scheme'];
      let url = subject['url'];
      // 官方评分集合 - 官方评分
      let ratings_value = ratings['value'];
      var primary_color_dark;
      var secondary_color;
      if(color_scheme === null){
        primary_color_dark = '85d824';
        // 颜色集合 - 次要颜色
        secondary_color = 'eef7e4';
      }else{
        // 颜色集合 -主要颜色
        // var primary_color_light = color_scheme['primary_color_light'];
        primary_color_dark = color_scheme['primary_color_dark'];
        // 颜色集合 - 次要颜色
        secondary_color = color_scheme['secondary_color'];
      }
      // 官方评分 - 官方评分星星数
      let ratings_star_count = ratings['star_count'];
      
      
      // 创建新的Div，来存放电影内容，方便布局
      var newDiv = $("<div></div>");
      var canvasDiv = $("<div></div>");
      newDiv.addClass('list');
      canvasDiv.addClass('d-canvas');
      var newLink = $("<a></a>").attr({
      "href": url,
      "target": '_blank',
      "alt": title
      });
      // 显示电影题目
      var span_title = $('<h2>').text(title);
      // 显示电影照片
      var newImg = $("<img />").attr({
      "src": cover_url,
      "alt": title
      });
      // 显示个人评分
      var span_star = $('<span>');
      
      if (rating != null){
        span_star.append('个人评分：');
        let star_count = rating['star_count'];
        // console.log(star_count);
        for(let j=0; j<star_count; j++){
          span_star = span_star.append('⭐');
        }
      }else{
        span_star.append('个人评分：未评分');
      }
      var ratings_star_span = $('<span>');
      ratings_star_span.append('豆瓣评分：')
      for(let k=0; k<ratings_star_count; k++){
        ratings_star_span = ratings_star_span.append('🌟');
      }
      // 创建Canvas元素，用于绘制评分圆环
      var ratings_star_canvas = $('<canvas>').attr({
        width: 60,
        height: 60
      });
      ratings_star_canvas.attr('id', 'canvas' + i);
      drawMain(ratings_star_canvas[0], ratings_value*10, '#'+primary_color_dark, '#'+secondary_color);
      ratings_star_span.append('&nbsp;&nbsp;&nbsp;'+ratings_value+'/10');
      newLink.append(newImg);
      canvasDiv.append(ratings_star_canvas);
      newDiv.append(canvasDiv);
      newDiv.append(newLink);
      newDiv.append(span_title);
      newDiv.append(span_star);
      newDiv.append(ratings_star_span);
      content.append(newDiv);
      
    }
  }
  

  
</script>
