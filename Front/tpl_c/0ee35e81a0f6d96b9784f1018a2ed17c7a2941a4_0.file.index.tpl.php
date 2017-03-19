<?php
/* Smarty version 3.1.29, created on 2016-08-02 22:45:46
  from "E:\PHP\Apache\htdocs\2016-08-02-VAE-SHOP\Front\tpl\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a0b21a3e7370_87425103',
  'file_dependency' => 
  array (
    '0ee35e81a0f6d96b9784f1018a2ed17c7a2941a4' => 
    array (
      0 => 'E:\\PHP\\Apache\\htdocs\\2016-08-02-VAE-SHOP\\Front\\tpl\\index.tpl',
      1 => 1470148387,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:login.tpl' => 1,
    'file:public.tpl' => 1,
    'file:kefu.tpl' => 1,
    'file:link.tpl' => 1,
  ),
),false)) {
function content_57a0b21a3e7370_87425103 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\PHP\\Apache\\htdocs\\2016-08-02-VAE-SHOP\\libs\\plugins\\modifier.date_format.php';
?>
<html>
<head>
<link type="text/css" rel="stylesheet" href="<?php echo @constant('FRONT_CSS_URL');?>
index.css"/>
</head>
<body>
<div id="div_Top">
<ul>
<li><a href="index.php?pageurl=Allthings">&nbsp;&nbsp;首页</a></li>
<li><a href="index.php?pageurl=Newthings">最新商品</a></li>
<li><a href="index.php?pageurl=Commentthings">推荐商品</a></li>
<li><a href="index.php?pageurl=Hotthings">热门商品</a></li>
<li><a href="#">订单查询</a></li>
<li><a href="#"><?php echo smarty_modifier_date_format(time(),"Y-m-d");?>
</a></li>
</ul>
</div>
<div id="div_Middle">
<div id="div_Middle_L">
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:public.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:kefu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<div id="div_Middle_R">
<div id="div_Middle_R_Top">
 <div  style="margin-left:200px;padding-top:180px;"><input type="text" value="请输入商品名称"/>
             <input type="button" value="搜索商品"/>
             </div>
</div>
<div id="div_Middle_R_Bottom" style="width:100%;">
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['url']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

          </div>
</div>
</div>
<div id="div_Foot">
</div>
</body>
</html><?php }
}
