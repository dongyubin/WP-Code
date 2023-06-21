<?php
/*
Template Name: 好物页面
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
					    <div class="goods"></div>
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

<script>
  document.addEventListener("DOMContentLoaded", () => {
    memoGoods()
  });
  function memoGoods(numb) {
    let limit = numb || 6;
    var memoUrl = "https://bw.wangdu.site:4730/"
    //var creatorId = 101
    //var goodsUrl = memoUrl+"api/memo?creatorId="+creatorId+"&rowStatus=NORMAL&limit="+limit+"&tag=相册"
    var goodsUrl = memoUrl + "api/memo/all?rowStatus=NORMAL&limit=" + limit + "&tag=好物"
    let nowNum = 1;
    const regex = /\n/;
    fetch(goodsUrl).then(res => res.json()).then(resdata => {
      var result = '', resultAll = "", data = resdata.data
      for (var i = 0; i < data.length; i++) {
        var goodsCont = data[i].content.replace("#好物 \n", '')
        var goodsConts = goodsCont.split(regex)
        //解析内置资源文件
        if (data[i].resourceList && data[i].resourceList.length > 0) {
          var resourceList = data[i].resourceList;
          for (var j = 0; j < resourceList.length; j++) {
            var restype = resourceList[j].type.slice(0, 5);
            var resexlink = resourceList[j].externalLink
            var resLink = '', fileId = ''
            if (resexlink) {
              resLink = resexlink
            } else {
              fileId = resourceList[j].publicId || resourceList[j].filename
              resLink = memoUrl + 'o/r/' + resourceList[j].id + '/' + fileId
            }
            if (restype == 'image' && nowNum <= limit) {
              var jiage = goodsConts[0];
              var time = goodsConts[1];
              var title = goodsConts[2];
              var note = goodsConts[3];
              result += '<div class="goods-bankuai img-hide"><div class="goods-duiqi"><img loading="lazy" decoding="async" src="' + resLink + '"/></div>' +
                '<div class="goods-info">' +
                '<div class="info-right">' +
                ' <div class="goods-jiage">' + jiage + '</div><div class="goods-jiage goods-time">' + time + '</div></div>'
                + '<div class="goods-title">' + title.replace(/\[(.*?)\]\((.*?)\)/g, ' <a href="$2" target="_blank">$1</a> ') + '</div></div>' +
                '<div class="goods-note">' + note + '</div></div>'
            }
          }
        }
      }
      var goodsDom = document.querySelector('.goods');
      var goodsBefore = ``
      var goodsAfter = ``
      resultAll = result
      goodsDom.innerHTML = resultAll
    });
  }
</script>

<style>
  :root {
    --code-bg: #fafafa
  }

  .dark {
    --code-bg: #3b3d42
  }

  .goods-bankuai {
    display: inline-block;
    vertical-align: top;
    width: calc(33.33% - 16px);
    height: 400px;
    margin: 0 8px 12px 0;
    list-style: none;
    border-radius: 8px;
    background: var(--code-bg);
    padding: 0 16px;
    overflow: hidden;
  }

  .goods-duiqi {
    min-height: 164px;
    display: flex;
    justify-content: center;
    align-items: center
  }

  .goods-duiqi img {
    width: 80%;
    margin: 0;
    transition: transform .2s ease-in-out;
    cursor: pointer
  }

  .goods-duiqi:hover img {
    transform: translateY(-4px)
  }

  .goods-info {
    display: flex;
    flex-direction: row-reverse;
    align-items: center;
  }

  .info-right {
    flex: 1;
  }

  .goods-title {
    font-size: 14px;
    margin: 0;
    transition: .5s;
    flex: 4;
    font-weight: bold;
  }

  .goods-title a {
    font-size: 14px;
    text-decoration: none
  }

  .goods-jiage {
    color: #999;
    font-size: 14px;
    line-height: 1.4rem
  }

  .goods-note {
    color: #999;
    font-size: 14px;
    line-height: 1.3rem
  }

  @media (max-width:700px) {
    .goods-bankuai {
      width: 100%;
      height: 100%;
      padding: 0 2% 5% 2%
    }

    .goods-title {
      font-size: 14px;
      margin: 0 10px !important;
      transition: .5s
    }

    .goods-jiage {
      margin: 0 10px 0 10px
    }

    .goods-duiqi img {
      width: 50%;
      margin: 0
    }

    .goods-note {
      line-height: 1.3rem;
      margin: 8px 10px 0 10px
    }

    .goods-title {
      font-size: 14px;
      margin: 0 auto;
      line-height: 1.5rem
    }

    .goods-title a {
      font-size: 14px;
      text-decoration: none;
      box-shadow: none
    }
  }

  @media screen and (min-width:700px) and (max-width:900px) {
    .goods-quanju {
      font-size: 0;
      width: 106%
    }

    .goods-bankuai {
      display: inline-block;
      vertical-align: top;
      width: 40%;
      margin-right: 15px;
      height: 420px;
    }

    .goods-title {
      font-size: 14px;
      margin: 0 auto;
      line-height: 1.5rem;
      transition: .5s
    }

    .goods-title a {
      font-size: 14px;
      text-decoration: none;
      box-shadow: none
    }
  }

  @media (min-width:900px) {
    .goods-quanju {
      font-size: 0;
      width: 106%
    }

    .goods-bankuai {
      display: inline-block;
      vertical-align: top;
      width: calc(33.33% - 16px);
      height: 400px;
      margin: 0 8px 12px 0
    }

    .goods-note {
      font-size: 14px;
      line-height: 1.3rem;
      margin-top: .5rem
    }

    .goods-duiqi img {
      width: 80%;
      margin: 0
    }

    .goods-bankuai.img-hide img {
      transition: transform .2s ease-in-out;
      cursor: pointer
    }

    .goods-bankuai.img-hide:hover img {
      transform: translateY(-4px)
    }

    .goods-title {
      font-size: 16px;
      margin: 0 auto;
      line-height: 1.6rem;
      transition: .5s
    }

    .goods-title a {
      font-size: 16px;
      text-decoration: none;
      box-shadow: none;
      transition: .5s
    }
  }
</style>