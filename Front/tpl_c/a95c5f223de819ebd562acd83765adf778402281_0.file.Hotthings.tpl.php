<?php
/* Smarty version 3.1.29, created on 2016-08-02 22:46:53
  from "E:\PHP\Apache\htdocs\2016-08-02-VAE-SHOP\Front\tpl\Hotthings.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a0b25d667ba1_26057731',
  'file_dependency' => 
  array (
    'a95c5f223de819ebd562acd83765adf778402281' => 
    array (
      0 => 'E:\\PHP\\Apache\\htdocs\\2016-08-02-VAE-SHOP\\Front\\tpl\\Hotthings.tpl',
      1 => 1470149131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a0b25d667ba1_26057731 ($_smarty_tpl) {
?>
<div id="div_Middle_R_Bottom_H1">

</div>
<div id="div_Middle_R_Bottom_H2" >

<?php
$_from = $_smarty_tpl->tpl_vars['PageHot']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_n_0_saved_item = isset($_smarty_tpl->tpl_vars['n']) ? $_smarty_tpl->tpl_vars['n'] : false;
$_smarty_tpl->tpl_vars['n'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['n']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->_loop = true;
$__foreach_n_0_saved_local_item = $_smarty_tpl->tpl_vars['n'];
?>
<table width=600px height=150px style="font-size:13px;">
<tr><td rowspan='5'><a href="#"><img width=80px height=80px src="<?php echo @constant('FONT_PICS_URL');
echo $_smarty_tpl->tpl_vars['n']->value['pics'];?>
"/></a></td>
<td>��Ʒ����:<?php echo $_smarty_tpl->tpl_vars['n']->value['name'];?>
</td>
<td>��Ʒ�ͺ�:<?php echo $_smarty_tpl->tpl_vars['n']->value['model'];?>
</td></tr>
<tr>
<td>��ƷƷ��:<?php echo $_smarty_tpl->tpl_vars['n']->value['brand'];?>
</td>
<td>��������:<?php echo $_smarty_tpl->tpl_vars['n']->value['sell'];?>
</td></tr>
<tr>
<td>ʣ������:<?php echo $_smarty_tpl->tpl_vars['n']->value['stocks'];?>
</td>
<td>��Ʒ����:<?php echo $_smarty_tpl->tpl_vars['n']->value['area'];?>
</td></tr>
<tr>
<td>�г���&nbsp;&nbsp;:<?php echo $_smarty_tpl->tpl_vars['n']->value['m_price'];?>
</td>
<td>��Ʒ���:<?php echo $_smarty_tpl->tpl_vars['n']->value['class'];?>
</td></tr>
<tr><td>��Ա��&nbsp;&nbsp;:<?php echo $_smarty_tpl->tpl_vars['n']->value['v_price'];?>
</td>
<td>��������:<?php echo $_smarty_tpl->tpl_vars['n']->value['addTime'];?>
</td></tr>
</table>
<hr width="642px" size="1" color="#D8D8D6"/>
<?php
$_smarty_tpl->tpl_vars['n'] = $__foreach_n_0_saved_local_item;
}
if ($__foreach_n_0_saved_item) {
$_smarty_tpl->tpl_vars['n'] = $__foreach_n_0_saved_item;
}
?>
<div style="float:left;font-size:14px">
��Ʒ<?php echo $_smarty_tpl->tpl_vars['totalNum2']->value;?>
��&nbsp;&nbsp;ÿҳ<?php echo $_smarty_tpl->tpl_vars['size2']->value;?>
��&nbsp;&nbsp;  ��<?php echo $_smarty_tpl->tpl_vars['currentPage2']->value;?>
ҳ/��<?php echo $_smarty_tpl->tpl_vars['totalPage2']->value;?>
ҳ
</div>
<?php echo $_smarty_tpl->tpl_vars['pageC']->value->ShowPages();?>



</div><?php }
}
