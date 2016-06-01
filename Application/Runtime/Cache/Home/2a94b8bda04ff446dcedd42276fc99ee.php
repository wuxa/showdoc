<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo ($item["item_name"]); ?> 文档说明</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    @charset "utf-8";
	body {
		font:14px/1.5 "Microsoft Yahei","微软雅黑",Tahoma,Arial,Helvetica,STHeiti;
	}
    </style>
      <script type="text/javascript">
      var DocConfig = {
          host: window.location.origin,
          app: "<?php echo U('/');?>",
          pubile:"/Public",
      }

      DocConfig.hostUrl = DocConfig.host + "/" + DocConfig.app;
      </script>

  </head>
  <body>
<link rel="stylesheet" href="/Public/css/index.css" />

    <div class="container-narrow">

      <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <?php if($login_user): ?><li ><a href="<?php echo U('Home/Item/index');?>">我的项目</a></li>
            <?php else: ?>
            <li ><a href="<?php echo U('Home/User/login');?>">登录/注册</a></li><?php endif; ?>
          
        </ul>
        <h3 class="muted">文档说明</h3>
      </div>

      <hr>

		<div id="myCarousel" class="carousel slide">
		   <!-- 轮播（Carousel）指标 -->
		   <ol class="carousel-indicators">
		      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		      <li data-target="#myCarousel" data-slide-to="1"></li>
		      <li data-target="#myCarousel" data-slide-to="2"></li>
		   </ol>   
		   <!-- 轮播（Carousel）项目 -->
		   <div class="carousel-inner">
		      <div class="item active">
		         <img src="/Public/img/pic1.jpg" alt="First slide">
		      </div>
		      <div class="item">
		         <img src="/Public/img/pic2.jpg" alt="Second slide">
		      </div>
 		      <div class="item">
		         <img src="/Public/img/pic3.jpg" alt="Third slide">
		      </div>
		   </div>
		   <!-- 轮播（Carousel）导航 -->
		   <a class="carousel-control left" href="#myCarousel" 
		      data-slide="prev">&lsaquo;</a>
		   <a class="carousel-control right" href="#myCarousel" 
		      data-slide="next">&rsaquo;</a>
		</div>

		<p class="text-center">
			<a class="btn btn-primary  btn-large" href="<?php echo U('Home/item/show').'?item_id=2';?>" target="_blank">Demo</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a class="btn  btn-large" href="<?php echo U('Home/item/show').'?item_id=3';?>" target="_blank" >帮助教程&nbsp;<i class="icon-circle-arrow-right"></i></a>
		</p>

      <hr>


      <div class="footer">
        <p>&copy; Created By <a href="http://blog.star7th.com/" target="_blank"> Star7th</a></p>
      </div>

    </div> <!-- /container -->


    
	<script src="/Public/js/common/jquery.min.js"></script>
    <script src="/Public/bootstrap/js/bootstrap.min.js"></script>
    <script src="/Public/js/common/�ĵ�˵��.js"></script>
  </body>
</html> 
 <script type="text/javascript">

    $("#myCarousel").carousel('cycle');

 </script>