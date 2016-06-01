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
<link rel="stylesheet" href="/Public/css/item/show.css" />


<div class="doc-head row" >
  <div class="left "><h2><?php echo ($item["item_name"]); ?></h2></div>
  <div class="right">
    <ul class="inline pull-right">

      <?php if($ItemPermn): ?><li>
          <div class="btn-group ">
            <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
              项目
              <span class="caret"></span>
            </a>
          <ul class="dropdown-menu">
          <!-- dropdown menu links -->
            <li><a href="#" id="share">分享</a></li>
             <li><a href="<?php echo U('Home/Item/word');?>?item_id=<?php echo ($item["item_id"]); ?>">导出</a></li>

             <?php if($ItemCreator): ?><li><a href="<?php echo U('Home/Item/add');?>?item_id=<?php echo ($item["item_id"]); ?>">修改信息</a></li>          
              <li><a href="<?php echo U('Home/Member/edit');?>?item_id=<?php echo ($item["item_id"]); ?>">成员管理</a></li>
              <li><a href="<?php echo U('Home/Attorn/index');?>?item_id=<?php echo ($item["item_id"]); ?>">转让</a></li>
              <li><a href="<?php echo U('Home/Item/delete');?>?item_id=<?php echo ($item["item_id"]); ?>">删除</a></li><?php endif; ?>

            <li><a href="<?php echo U('Home/Item/index');?>">更多项目</a></li>
          </ul>
      </li>
      <?php else: ?>

      <?php if(! $login_user): ?><li ><a href="<?php echo U('Home/User/login');?>">登录/注册</a></li>
        <li ><a href="" target="_blank">关于文档说明</a></li>
        <?php else: ?>
        <li><a href="<?php echo U('Home/Item/index');?>">我的项目</a></li><?php endif; endif; ?>

    </ul>
    </div>  
  </div>
</div>

<div class="doc-body row">
  <!-- 左侧栏菜单 -->
    <div class="doc-left span3 bs-docs-sidebar pull-left">
        <form class="form-search text-center" action="" method="get">
          <div class="input-append search-input-append">
            <i class="icon-blank"></i>
            <input type="text" name="keyword" class="search-query search-query-input" value="<?php echo ($keyword); ?>">
            <input type="hidden" name="item_id" value="<?php echo ($item["item_id"]); ?>">
            <button type="submit" class="btn"><i class="icon-search"></i></button>
          </div>
        </form>

      <ul class="nav nav-list bs-docs-sidenav">

        <?php if(is_array($pages)): foreach($pages as $key=>$page): ?><li ><a href="<?php echo U('Home/Page/index');?>?page_id=<?php echo ($page["page_id"]); ?>" data-page-id="<?php echo ($page["page_id"]); ?>" ><i class="icon-blank"></i><?php echo ($page["page_title"]); ?></a></li><?php endforeach; endif; ?>

        <?php if(is_array($catalogs)): foreach($catalogs as $key=>$catalog): ?><li><a href="#"><i class="icon-chevron-right"></i><?php echo ($catalog["cat_name"]); ?></a>
            <ul class="child-ul nav-list ">
              <?php if(is_array($catalog["pages"])): foreach($catalog["pages"] as $key=>$catalog_page): ?><li><a href="<?php echo U('Home/Page/index');?>?page_id=<?php echo ($catalog_page["page_id"]); ?>" data-page-id="<?php echo ($catalog_page["page_id"]); ?>" ><?php echo ($catalog_page["page_title"]); ?></a></li><?php endforeach; endif; ?>
            </ul>
          </li><?php endforeach; endif; ?>

      </ul>
      <!-- 新建栏 -->
      <div class="doc-left-newbar">

        <?php if($ItemPermn): ?><div><a href="<?php echo U('Home/Page/edit');?>?item_id=<?php echo ($item["item_id"]); ?>&type=new" id="new-like"><i class="icon-plus"></i>&nbsp;新建页面</a></div>
          <div><a href="<?php echo U('Home/Catalog/edit');?>?item_id=<?php echo ($item["item_id"]); ?>" id="dir-like" ><i class="icon-folder-open"></i>新建目录</a></div><?php endif; ?>

      </div>

      <input type="hidden" id="item_id" value="<?php echo ($item["item_id"]); ?>">
      <input type="hidden" id="page_id" value="<?php echo ($page_id); ?>">
      <input type="hidden" id="base_url" value="/index.php">


    </div>
    <div class="doc-right  span12 ">
      <!-- 编辑栏 -->
      <div class='page-edit-link pull-right hide'>
        <ul class="inline">
          <?php if($ItemPermn): ?><li><a href="" id="share-page" title="分享该接口访问地址给你的好友">分享</a></li>
            <li><a href="" id="copy-link" title="复制该接口到新接口">复制</a></li>
            <li><a href="" id="edit-link" title="编辑接口">编辑</a></li>
            <li><a href="" title="删除接口" onclick="return confirm('确认删除吗？');return false;" id="delete-link">删除</a></li>
          <?php else: ?>
            <li></li>
            <li></li><?php endif; ?>
        </ul>
      </div>
      <!-- 页面内容 -->
      <div class='iframe_content'>
        <iframe id="page-content" width="100%" scrolling="yes"  height="100%" frameborder="0" style=" overflow:visible; height:100%;" name="main"  seamless ="seamless"src=""></iframe>
      </div>

    </div>

   
	<script src="/Public/js/common/jquery.min.js"></script>
    <script src="/Public/bootstrap/js/bootstrap.min.js"></script>
    <script src="/Public/js/common/showdoc.js"></script>
  </body>
</html> 
<!-- 分享项目框 -->
<div class="modal hide fade" id="share-modal">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>分享</h3>
  </div>
  <div class="modal-body">
    <p>项目地址：<code><?php echo ($share_url); ?></code></p>
    <p>你可以复制地址给你的好友</p>
  </div>
</div>

<!-- 分享页面框 -->
<div class="modal hide fade" id="share-page-modal">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>分享页面</h3>
  </div>
  <div class="modal-body">
    <p>页面地址：<code id="share-page-link"></code></p>
    <p>你可以复制地址给你的好友</p>
  </div>
</div>
<script src="/Public/js/jquery.bootstrap-growl.min.js"></script>
<script src="/Public/js/jquery.hotkeys.js"></script>

<script src="/Public/js/item/show.js"></script>