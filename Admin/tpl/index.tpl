<html>
  <head>
 
 <!--引入主页的样式-->
 <link type="text/css" rel="stylesheet" href="{$smarty.const.ADMIN_CSS_URL}index.css"/>
  <!--导入jquery的类文件-->
  <script type="text/javascript" src="{$smarty.const.ADMIN_JS_URL}jquery-1.7.1.min.js"></script>
  <script type="text/javascript" src="{$smarty.const.ADMIN_JS_URL}menu.js"></script>
  <!--导入请求处理订单的js文件-->
  <script type="text/javascript" src="{$smarty.const.ADMIN_JS_URL}formState.js"></script>
<!--导入查看订单详情的js文件-->
   <script type="text/javascript" src="{$smarty.const.ADMIN_JS_URL}OpenWindow.js"></script>
<!--导入删除商品的js文件-->
   <script type="text/javascript" src="{$smarty.const.ADMIN_JS_URL}DeleteShop.js"></script>
   <script type="text/javascript" src="{$smarty.const.ADMIN_JS_URL}admin.js"></script>
<!--关于公告的js文件-->
   <script type="text/javascript" src="{$smarty.const.ADMIN_JS_URL}public.js"></script>
    <script type="text/javascript" src="{$smarty.const.ADMIN_JS_URL}OpenUser.js"></script>
    <script type="text/javascript" src="{$smarty.const.ADMIN_JS_URL}class.js"></script>
 <!--关于友情链接的js文件-->
 <script type="text/javascript" src="{$smarty.const.ADMIN_JS_URL}link.js"></script>
 <!--关于会员操作的js文件-->
  <script type="text/javascript" src="{$smarty.const.ADMIN_JS_URL}user.js"></script>
  </head>
  <body>
    <div id="div_Top">
    </div>
    <div id="div_Middle">
       <div id="div_Middle_Left">
       {include file="menu.tpl"}
       </div>
       <div id="div_Middle_Right">
       {include file="{$url}"}
       </div>
    </div>
    <div id="div_Footer">
   
    </div>
  </body>
</html>