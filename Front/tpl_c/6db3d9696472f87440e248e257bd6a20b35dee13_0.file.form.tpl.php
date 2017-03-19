<?php
/* Smarty version 3.1.29, created on 2016-10-13 11:24:31
  from "E:\PHP\Apache\htdocs\2016-VAE-SHOP\Front\tpl\form.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fefe6fefa1d0_35987685',
  'file_dependency' => 
  array (
    '6db3d9696472f87440e248e257bd6a20b35dee13' => 
    array (
      0 => 'E:\\PHP\\Apache\\htdocs\\2016-VAE-SHOP\\Front\\tpl\\form.tpl',
      1 => 1471970124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fefe6fefa1d0_35987685 ($_smarty_tpl) {
?>
<style type="text/css">
#tb{
width:460px;
height:200px;
 border-collapse:collapse;
}
#tb tr th,#tb tr td{
border:1px solid #FFC4C4;
text-align:center;
}
</style>
<table id="tb">
<tr bgcolor="#FFC4C4"><th colspan="4">订单信息</th></tr>
<tr><td>收货人:</td><td><?php echo $_smarty_tpl->tpl_vars['forminfo']->value[0]['realname'];?>
</td><td>邮编:</td><td><?php echo $_smarty_tpl->tpl_vars['forminfo']->value[0]['code'];?>
</td></tr>
<tr><td>联系电话:</td><td><?php echo $_smarty_tpl->tpl_vars['forminfo']->value[0]['tel'];?>
</td><td colspan="2">&nbsp;&nbsp;</td></tr>
<tr><td>地址:</td><td colspan="3"><?php echo $_smarty_tpl->tpl_vars['forminfo']->value[0]['address'];?>
</td></tr>
<tr><td>送货方式</td><td  colspan="3">
<select>
<option value="0" selected='selected'>平邮</option>
<option value="1">快递</option>
<option value="2">送货上门</option>
</select>
</td></tr>
<tr>
<td>付款方式</td><td colspan="3">
<select>
<option value="0" selected='selected'>网银支付</option>
<option value="1">邮局汇款</option>
<option value="2">支付宝</option>
</select>
</td>
</tr>
<tr><td colspan="4"><input type="button" value="提交订单" onclick=""/></td></tr>
</table><br/>
<?php }
}
