<?php
/* Smarty version 3.1.29, created on 2016-08-04 20:23:03
  from "E:\PHP\Apache\htdocs\2016-VAE-SHOP\Front\tpl\ShowDetails.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a333a7992912_52663281',
  'file_dependency' => 
  array (
    '61744b646a9674b807d2171e21a8180c010ab494' => 
    array (
      0 => 'E:\\PHP\\Apache\\htdocs\\2016-VAE-SHOP\\Front\\tpl\\ShowDetails.tpl',
      1 => 1470313378,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a333a7992912_52663281 ($_smarty_tpl) {
?>
<style type="text/css">
#tbg{
width:460px;
height:260px;
 border-collapse:collapse;
}
#tbg tr th,#tbg tr td{
border:1px solid #FFC4C4;
text-align:center;
}
</style>
 <!--导入jquery的类文件-->
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('FRONT_JS_URL');?>
jquery-2.1.1.min.js"><?php echo '</script'; ?>
>
  <!--导入添加到购物车的js文件-->
   <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('FRONT_JS_URL');?>
addCart.js"><?php echo '</script'; ?>
>
<table id="tbg">
<tr>
<th colspan="5" bgcolor="#FFC4C4">商品详情</th>
</tr>
<tr>
<td rowspan="4"><img width="120px" height="120px" src="<?php echo @constant('FONT_PICS_URL');
echo $_smarty_tpl->tpl_vars['goodDetails']->value[0]['pics'];?>
"/></td>
<td>商品名称</td><td><?php echo $_smarty_tpl->tpl_vars['goodDetails']->value[0]['gname'];?>
</td>
<td>商品类别</td><td><?php echo $_smarty_tpl->tpl_vars['goodDetails']->value[0]['cname'];?>
</td>
</tr>
<tr>
<td>商品品牌</td><td><?php echo $_smarty_tpl->tpl_vars['goodDetails']->value[0]['brand'];?>
</td>
<td>商品型号</td><td><?php echo $_smarty_tpl->tpl_vars['goodDetails']->value[0]['model'];?>
</td>
</tr>
<tr>
<td>商品产地</td><td><?php echo $_smarty_tpl->tpl_vars['goodDetails']->value[0]['area'];?>
</td>
<td>商品库存</td><td><?php echo $_smarty_tpl->tpl_vars['goodDetails']->value[0]['stocks'];?>
</td>
</tr>
<tr>
<td>市场价格</td><td><?php echo $_smarty_tpl->tpl_vars['goodDetails']->value[0]['m_price'];?>
</td>
<td>会员价格</td><td><?php echo $_smarty_tpl->tpl_vars['goodDetails']->value[0]['v_price'];?>
</td>
</tr>
<tr>
<td>商品简介</td><td colspan="3"><?php echo $_smarty_tpl->tpl_vars['goodDetails']->value[0]['info'];?>
</td>
<td>
<input type="hidden" id="Hiddengid" value="<?php echo $_smarty_tpl->tpl_vars['goodDetails']->value[0]['id'];?>
"/>
<img src="<?php echo @constant('FONT_PICS_URL');?>
images/looks.JPG" id="imgBuy"/>
<!--<input type="button" id="imgBuy" value="购买"/>-->
</td>
</tr>
</table><?php }
}
