<html>
<head>
<link type="text/css" rel="stylesheet" href="{$smarty.const.FRONT_CSS_URL}index.css"/>
 <!--导入jquery的类文件-->
  <script type="text/javascript" src="{$smarty.const.FRONT_JS_URL}jquery-1.7.1.min.js"></script>
  <script type="text/javascript" src="{$smarty.const.FRONT_JS_URL}jquery-2.1.1.min.js"></script>
 <!--导入打开新窗口的js文件-->
 <script type="text/javascript" src="{$smarty.const.FRONT_JS_URL}Open.js"></script>
 <!--导入登录的js文件-->
   <script type="text/javascript" src="{$smarty.const.FRONT_JS_URL}login.js"></script>
 <!--导入购物车全选，反选的js文件-->
   <script type="text/javascript" src="{$smarty.const.FRONT_JS_URL}cart.js"></script>
<!--导入支付的时候的js文件-->
   <script type="text/javascript" src="{$smarty.const.FRONT_JS_URL}Pay.js"></script>
</head>
<body>
<div id="div_Top">
<ul>
<li><a href="index.php?pageurl=Allthings">&nbsp;&nbsp;首页</a></li>
<li><a href="index.php?pageurl=Newthings">最新商品</a></li>
<li><a href="index.php?pageurl=Commentthings">推荐商品</a></li>
<li><a href="index.php?pageurl=Hotthings">热门商品</a></li>
<li><a href="#">订单查询</a></li>
<li><a href="#">{$smarty.now|date_format:"Y-m-d"}</a></li>
</ul>
</div>
<div id="div_Middle">
<div id="div_Middle_L">
{include file="login.tpl"}
{include file="public.tpl"}
{include file="kefu.tpl"}
{include file="link.tpl"}
</div>
<div id="div_Middle_R">
<div id="div_Middle_R_Top">
 <div  style="margin-left:200px;padding-top:180px;"><input type="text" placeholder="请输入商品名称"/>
             <input type="button" value="搜索商品"/>
             </div>
</div>
<div id="div_Middle_R_Bottom" style="width:100%;">
{include file="{$url}"}
          </div>
</div>
</div>
<div id="div_Foot">
</div>
</body>
</html>