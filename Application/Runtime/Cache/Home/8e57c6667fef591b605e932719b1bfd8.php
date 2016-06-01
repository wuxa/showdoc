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
<style type="text/css">
.single-cat{
  margin: 10px;
}
</style>
 <div id="edit-cat" class="modal hide fade">
  <!-- 编辑框 -->
  <div class="cat-edit">
      <div class="modal-header">
      <h4>新建/编辑目录</h4>
      </div>
      <input type="hidden" id="item_id" value="<?php echo ($item_id); ?>">
      <input type="hidden" id="cat_id" value="<?php echo ($Catalog["cat_id"]); ?>">
      <div class="add-cat">
          <form class="form-horizontal">
            <div class="control-group">
              <label class="control-label" for="inputEmail">目录名</label>
              <div class="controls">
                <input type="text" id="cat_name" placeholder="目录名" value="<?php echo ($Catalog["cat_name"]); ?>">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="inputPassword">序号</label>
              <div class="controls">
                <input type="text" id="order" placeholder="可选：顺序数字" value="<?php echo ($Catalog["order"]); ?>">
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <button  class="btn" id="save-cat">保存</button>
                <button  class="btn btn-link" id="delete-cat">删除目录</button>
              </div>
            </div>
          </form>

      </div>
    </div>
  <!-- 目录列表 -->
  <div class="cat-list">
    <div class="modal-header">
    <h4>目录列表&nbsp;<small>（点击可编辑）</small></h4>
    </div>
    <div id="show-cat">

    <br>
    <br>
    </div>
  </div>

    <div class="modal-footer">
      <a href="#" class="btn exist-cat">关闭</a>
    </div>
 </div>

    
	<script src="/Public/js/common/jquery.min.js"></script>
    <script src="/Public/bootstrap/js/bootstrap.min.js"></script>
    <script src="/Public/js/common/showdoc.js"></script>
  </body>
</html> 
 <script src="/Public/js/catalog/edit.js"></script>