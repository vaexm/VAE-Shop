<html>
<head>
<link type="text/css" rel="stylesheet" href="{$smarty.const.FRONT_CSS_URL}index.css"/>
 <!--����jquery�����ļ�-->
  <script type="text/javascript" src="{$smarty.const.FRONT_JS_URL}jquery-1.7.1.min.js"></script>
  <script type="text/javascript" src="{$smarty.const.FRONT_JS_URL}jquery-2.1.1.min.js"></script>
 <!--������´��ڵ�js�ļ�-->
 <script type="text/javascript" src="{$smarty.const.FRONT_JS_URL}Open.js"></script>
 <!--�����¼��js�ļ�-->
   <script type="text/javascript" src="{$smarty.const.FRONT_JS_URL}login.js"></script>
 <!--���빺�ﳵȫѡ����ѡ��js�ļ�-->
   <script type="text/javascript" src="{$smarty.const.FRONT_JS_URL}cart.js"></script>
<!--����֧����ʱ���js�ļ�-->
   <script type="text/javascript" src="{$smarty.const.FRONT_JS_URL}Pay.js"></script>
</head>
<body>
<div id="div_Top">
<ul>
<li><a href="index.php?pageurl=Allthings">&nbsp;&nbsp;��ҳ</a></li>
<li><a href="index.php?pageurl=Newthings">������Ʒ</a></li>
<li><a href="index.php?pageurl=Commentthings">�Ƽ���Ʒ</a></li>
<li><a href="index.php?pageurl=Hotthings">������Ʒ</a></li>
<li><a href="#">������ѯ</a></li>
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
 <div  style="margin-left:200px;padding-top:180px;"><input type="text" placeholder="��������Ʒ����"/>
             <input type="button" value="������Ʒ"/>
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