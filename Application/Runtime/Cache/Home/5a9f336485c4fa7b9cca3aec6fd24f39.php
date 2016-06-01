<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
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
<style type="text/css">
.message {
  width: 600px;
  min-height: 80px;
  padding: 20px 20px 10px 20px;
  margin: 50px auto 0 auto;
  border-width: 5px;
  overflow: hidden;
}
.message .content {
  overflow: hidden;
}
.message h4 {
  margin: 10px 0;
  line-height: 30px;
}

</style>
<div class="message alert alert-<?php echo ($type); ?>">
	<div class="icon pull-left"><i class="{if $type=='success'}icon-ok{else if $type=='error'}icon-remove{else if $type=='tips'}icon-exclamation-sign{else if $type=='sql'}icon-warning-sign{/if}"></i></div>
	<div class="content">
		<h4><?php echo $msg;?></h4>
		<?php if($redirect){ ?>
		<p><a href="<?php echo $redirect;?>">如果你的浏览器没有自动跳转，请点击此链接</a></p>
		<script type="text/javascript">
			setTimeout(function () {
				location.href = "<?php echo $redirect;?>";
			}, 3000);
		</script>
		<?php }else{ ?>
		<p>[<a href="javascript:history.go(-1);">点击这里返回上一页</a>] &nbsp; [<a href="/index.php/">首页</a>]</p>
		<?php } ?>
	</div>
</div>

   
	<script src="/Public/js/common/jquery.min.js"></script>
    <script src="/Public/bootstrap/js/bootstrap.min.js"></script>
    <script src="/Public/js/common/showdoc.js"></script>
  </body>
</html>