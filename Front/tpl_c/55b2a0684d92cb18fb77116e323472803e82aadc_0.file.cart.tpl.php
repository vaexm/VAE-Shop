<?php
/* Smarty version 3.1.29, created on 2016-08-23 23:54:09
  from "E:\PHP\Apache\htdocs\2016-VAE-SHOP\Front\tpl\cart.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57bc71a1f1a1c8_01259121',
  'file_dependency' => 
  array (
    '55b2a0684d92cb18fb77116e323472803e82aadc' => 
    array (
      0 => 'E:\\PHP\\Apache\\htdocs\\2016-VAE-SHOP\\Front\\tpl\\cart.tpl',
      1 => 1471966454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57bc71a1f1a1c8_01259121 ($_smarty_tpl) {
?>
<style>
#tb1{
 border-collapse:collapse;
}
#tb1 tr th,#tb1 tr td{
text-align:center;
border:1px solid #FFC4C4;
}
</style>
<table id="tb1" width="100%"> 
<tr bgcolor="#FFC4C4"><th colspan='7'>我的购物车</th></tr>
<tr><th>选项</th><th>商品名称</th><th>购买数量</th><th>市场价格</th><th>会员价格</th>
<th>折扣率</th><th>合计</th></tr>
<?php
$__section_c_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_c']) ? $_smarty_tpl->tpl_vars['__smarty_section_c'] : false;
$__section_c_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['cart']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_c_0_total = $__section_c_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_c'] = new Smarty_Variable(array());
if ($__section_c_0_total != 0) {
for ($__section_c_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_c']->value['index'] = 0; $__section_c_0_iteration <= $__section_c_0_total; $__section_c_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_c']->value['index']++){
?>
<tr>
<td><input type="checkbox" id="chk<?php echo $_smarty_tpl->tpl_vars['cart']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_c']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_c']->value['index'] : null)]['id'];?>
" name="items" onchange="changeTotal()"/></td>
<td><?php echo $_smarty_tpl->tpl_vars['cart']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_c']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_c']->value['index'] : null)]['name'];?>
</td>
<td><input type="text" size="10" name="txtnum" id="num<?php echo $_smarty_tpl->tpl_vars['cart']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_c']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_c']->value['index'] : null)]['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['num']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_c']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_c']->value['index'] : null)];?>
" 
onkeyup="calTotal(<?php echo $_smarty_tpl->tpl_vars['cart']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_c']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_c']->value['index'] : null)]['id'];?>
,this.value,<?php echo $_smarty_tpl->tpl_vars['cart']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_c']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_c']->value['index'] : null)]['v_price'];?>
)"/></td>
<td><?php echo $_smarty_tpl->tpl_vars['cart']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_c']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_c']->value['index'] : null)]['m_price'];?>
</td>
<td><span id="vprice"><?php echo $_smarty_tpl->tpl_vars['cart']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_c']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_c']->value['index'] : null)]['v_price'];?>
</span></td>
<td><?php echo $_smarty_tpl->tpl_vars['cart']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_c']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_c']->value['index'] : null)]['fold'];?>
</td>
<td><span id="sp<?php echo $_smarty_tpl->tpl_vars['cart']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_c']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_c']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['num']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_c']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_c']->value['index'] : null)]*$_smarty_tpl->tpl_vars['cart']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_c']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_c']->value['index'] : null)]['v_price'];?>
</span></td>
</tr>
<?php
}
}
if ($__section_c_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_c'] = $__section_c_0_saved;
}
?>
 
</table><br/>
<!--<a href="#" id="chAll">全选</a>&nbsp;&nbsp;&nbsp;&nbsp;-->
<input type="button" id="chAll" value="全选" />
<input type="button" id="chRes" value="反选" />
<input type="button" id="chNo" value="全不选"/>&nbsp;&nbsp;
<a href="" onclick="Delete()">删除选择</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;
<input type="button"  value="继续购物" onclick="saveShopping()"/>&nbsp;&nbsp;
<input type="button" value="去收银台" onclick="Pay()"/>
<span id="sptotal" style="float:right">0&yen</span>
<span style="float:right">总计:</span>
<?php }
}
