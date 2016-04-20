<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="/myblog/Public/index/css/index.css" rel="stylesheet">
<link rel="stylesheet" href="/myblog/Public/index/dist/css/swiper.min.css">
<!-- <script type="text/javascript" src="/myblog/public/js/jquery.min.js"></script>
<script type="text/javascript" src="/myblog/public/js/sliders.js"></script> -->
<title>雨爱的个人博客</title>
</head>
<body>
<header>
  <div id="logo"><a href="#"></a></div>
  <nav class="topnav" id="topnav">
      <a href="index.html"><span>首页</span><span class="en">Honme</span></a>
      <a href="about.html"><span>关于我</span><span class="en">About</span></a>
      </a><a href="saylist.html"><span>个人日记</span><span class="en">Diary</span></a>
      <a href="seolist.html"><span>个人心情</span><span class="en">Seo</span></a>
      <a href="weblist.html"><span>技术交流</span><span class="en">Web</span></a>
      <a href="gustbook.html"><span>留言版</span><span class="en">Gustbook</span></a>
  </nav>
</header>
<!--end header-->
<div class="banner">
  <!-- lbbegan -->
  <style>
  .swiper-container {
        width: 100%;
        height: 100%;
        
    }
    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
  </style>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="/myblog/Public/index/images/lb1.png" alt="lb1 1000*345"></div>
            <div class="swiper-slide"><img src="/myblog/Public/index/images/lb2.png" alt="lb2 1000*345"></div>
            <div class="swiper-slide"><img src="/myblog/Public/index/images/lb3.png" alt="lb2 1000*345"></div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>
<!--end banner-->
<article>
  <h2 class="title_tj">
    <p>博主<span>推荐</span></p>
  </h2>
  <div class="bloglist left">
   <!--wz-->
    <div class="wz">
    <h3>关于响应式布局</h3>
    <p class="dateview"><span>2013-11-04</span><span>作者：段亮</span><span>分类：[<a href="#">web前端</a>]</span></p>
    <figure><img src="/myblog/Public/index/images/001.jpg"></figure>
    <ul>
      <p>随着互联网的快速发展，以及html5+css3的迅速崛起。渐渐的响应式布局，也会慢慢的出现在我们的视野里，身为专业的web前端，还不学习新技术你就out啦！为什么这样说呢？因为响应式布局能同时兼容多个终端，比如（手机、平板、PC）...</p>
      <a title="阅读全文" href="#" target="_blank" class="readmore">阅读全文>></a>
    </ul>
    <div class="clear"></div>
    </div>
   <!--end-->
  </div>
  <!--right-->
  <aside class="right"> 
    <div class="my">
     <h2>关于<span>博主</span></h2>
     <img src="/myblog/Public/index/images/my.png" width="200" height="200" alt="博主">
       <ul>
        <li>博主：雨爱</li>
        <li>职业:学生，程序猿，骑行爱好者</li>
        <li>简介：喜欢代码，喜欢骑行.</li>
        <li></li>   
       </ul>
    </div>
    <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
    <div class="news">
    <h3 class="ph">
      <p>点击<span>排行</span></p>
    </h3>
    <ul class="paih">
      <li><a href="#" title="如何建立个人博客" target="_blank">如何建立个人博客</a></li>
      <li><a href="#" title="html5标签" target="_blank">html5标签</a></li>
      <li><a href="#" title="一个网站的开发流程" target="_blank">一个网站的开发流程</a></li>
      <li><a href="#" title="做网站到底需要什么?" target="_blank">做网站到底需要什么?</a></li>
      <li><a href="#" title="企业做网站具体流程步骤" target="_blank">企业做网站具体流程步骤</a></li>
    </ul>
    <h3>
      <p>用户<span>关注</span></p>
    </h3>
    <ul class="rank">
      <li><a href="#" title="如何建立个人博客" target="_blank">如何建立个人博客</a></li>
      <li><a href="#" title="一个网站的开发流程" target="_blank">一个网站的开发流程</a></li>
      <li><a href="#" title="关键词排名的三个时期" target="_blank">关键词排名的三个时期</a></li>
      <li><a href="#" title="做网站到底需要什么?" target="_blank">做网站到底需要什么?</a></li>
      <li><a href="#" title="关于响应式布局" target="_blank">关于响应式布局</a></li>
      <li><a href="#" title="html5标签" target="_blank">html5标签</a></li>
    </ul>
    
    <h3 class="links">
      <p>友情<span>链接</span></p>
    </h3>
    <ul class="website">
      <li><a href="#">个人博客</a></li>
      <li><a href="#">雨爱博客</a></li>
    </ul> 
    </div> 
</article>
<footer>
  <p><span>Design By:<a href="www.duanliang920.com" target="_blank">雨爱</a></span><span>网站地图</span><span><a href="#">网站统计</a></span></p>
</footer>
<script src="/myblog/Public/index/js/nav.js"></script>
<script src="/myblog/Public/index/dist/js/swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: 2500,
        autoplayDisableOnInteraction: false
    });
    </script>
<!--百度分享-->
<!--<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"32"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
</script>-->
</body>
</html>