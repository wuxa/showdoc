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
<link rel="stylesheet" href="/Public/css/login.css" />

    <div class="container">

      <form class="form-signin" method="post">
        <input type="hidden" id="item_id" name="item_id" value="<?php echo ($item["item_id"]); ?>">
        <!-- <h3 class="form-signin-heading">新建项目</h3> -->
        <input type="text" class="input-block-level"  name="item_name" placeholder="项目名" value="<?php echo ($item["item_name"]); ?>" >
        <input type="text" class="input-block-level"  name="item_description" placeholder="项目描述" value="<?php echo ($item["item_description"]); ?>">
        <input type="password" class="input-block-level" name="password" placeholder="访问密码（可选，私密项目请设置密码）" value="<?php echo ($item["password"]); ?>">
        <button class="btn  btn-primary" type="submit">提交</button>
        <a href="javascript:history.go(-1)" class="btn">返回</a>
      </form>

    </div> <!-- /container -->


    
	<script src="/Public/js/common/jquery.min.js"></script>
    <script src="/Public/bootstrap/js/bootstrap.min.js"></script>
    <script src="/Public/js/common/showdoc.js"></script>
  </body>
</html>