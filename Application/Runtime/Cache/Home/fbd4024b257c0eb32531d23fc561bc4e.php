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
<link rel="stylesheet" href="/Public/css/item/index.css" />
<style type="text/css">
  .container-thumbnails{
    margin-top: 60px;
  }
  .thumbnails li a{
    color: #888;
    font-weight: bold;
  }
  .thumbnails li a:hover,
  .thumbnails li a:focus{
    border-color:#f2f5e9;
    -webkit-box-shadow:none;
    box-shadow:none;
    text-decoration: none;
    background-color: #f2f5e9;
  }
</style>
    <div class="container-narrow">

      <div class="masthead">
        <div class="btn-group pull-right">
          <?php if($_SESSION['login_user']['uid']): ?><a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
        <?php echo ($_SESSION['login_user']['username']); ?>
        <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
        <!-- dropdown menu links -->
          <li><a href="<?php echo U('Home/User/setting');?>">个人设置</a></li>
          <li><a href="#share-home-modal"  data-toggle="modal">分享主页</a></li>
          <li><a href="../">网站首页</a></li>
          <li><a href="<?php echo U('Home/User/exist');?>">退出登录</a></li>

        </ul>
            <?php else: ?>
            <a href="<?php echo U('Home/User/login');?>" class="btn btn-large btn-primary  " >
              登录/注册
              <span class="caret"></span>
            </a><?php endif; ?>
        </div>

        </ul>
        <h3 class="muted">文档说明</h3>
      </div>

      <hr>

    <div class="container-thumbnails">
      <ul class="thumbnails">

        <?php if(is_array($items)): foreach($items as $key=>$item): ?><li class="span3 text-center">
            <a class="thumbnail" href="<?php echo U('Home/Item/Show');?>?item_id=<?php echo ($item["item_id"]); ?>" title="<?php echo ($item["item_description"]); ?>">
              <p class="my-item"><?php echo ($item["item_name"]); ?></p>
            </a>
          </li><?php endforeach; endif; ?>

        <?php if($_SESSION['login_user']['uid']): ?><li class="span3 text-center">
            <a class="thumbnail" href="<?php echo U('Home/Item/add');?>" title="添加一个新项目">
              <p class="my-item ">新建项目&nbsp;<i class="icon-plus"></i></p>
            </a>
          </li><?php endif; ?>
      </ul>
    </div>


    </div> <!-- /container -->

<!-- 分享项目框 -->
<div class="modal hide fade" id="share-home-modal">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>分享我的主页</h3>
  </div>
  <div class="modal-body">
    <p>主页地址：<code id="share-home-link"><?php echo ($share_url); ?></code></p>
    <p>别人访问您的主页时，将可以看到您的所有公开项目（但没有新建项目等权限）。你可以复制地址给你的好友</p>
  </div>
</div>


    
	<script src="/Public/js/common/jquery.min.js"></script>
    <script src="/Public/bootstrap/js/bootstrap.min.js"></script>
    <script src="/Public/js/common/showdoc.js"></script>
  </body>
</html> 
 <script type="text/javascript">


 </script>