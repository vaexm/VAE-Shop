<html>
  <head>
 
 <!--������ҳ����ʽ-->
 <link type="text/css" rel="stylesheet" href="{$smarty.const.ADMIN_CSS_URL}index.css"/>
  <!--����jquery�����ļ�-->
  <script type="text/javascript" src="{$smarty.const.ADMIN_JS_URL}jquery-1.7.1.min.js"></script>
  <script type="text/javascript" src="{$smarty.const.ADMIN_JS_URL}menu.js"></script>
  <!--��������������js�ļ�-->
  <script type="text/javascript" src="{$smarty.const.ADMIN_JS_URL}formState.js"></script>
<!--����鿴���������js�ļ�-->
   <script type="text/javascript" src="{$smarty.const.ADMIN_JS_URL}OpenWindow.js"></script>
<!--����ɾ����Ʒ��js�ļ�-->
   <script type="text/javascript" src="{$smarty.const.ADMIN_JS_URL}DeleteShop.js"></script>
   <script type="text/javascript" src="{$smarty.const.ADMIN_JS_URL}admin.js"></script>
<!--���ڹ����js�ļ�-->
   <script type="text/javascript" src="{$smarty.const.ADMIN_JS_URL}public.js"></script>
    <script type="text/javascript" src="{$smarty.const.ADMIN_JS_URL}OpenUser.js"></script>
    <script type="text/javascript" src="{$smarty.const.ADMIN_JS_URL}class.js"></script>
 <!--�����������ӵ�js�ļ�-->
 <script type="text/javascript" src="{$smarty.const.ADMIN_JS_URL}link.js"></script>
 <!--���ڻ�Ա������js�ļ�-->
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