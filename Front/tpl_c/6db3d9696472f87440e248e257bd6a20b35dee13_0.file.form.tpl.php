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
<tr bgcolor="#FFC4C4"><th colspan="4">������Ϣ</th></tr>
<tr><td>�ջ���:</td><td><?php echo $_smarty_tpl->tpl_vars['forminfo']->value[0]['realname'];?>
</td><td>�ʱ�:</td><td><?php echo $_smarty_tpl->tpl_vars['forminfo']->value[0]['code'];?>
</td></tr>
<tr><td>��ϵ�绰:</td><td><?php echo $_smarty_tpl->tpl_vars['forminfo']->value[0]['tel'];?>
</td><td colspan="2">&nbsp;&nbsp;</td></tr>
<tr><td>��ַ:</td><td colspan="3"><?php echo $_smarty_tpl->tpl_vars['forminfo']->value[0]['address'];?>
</td></tr>
<tr><td>�ͻ���ʽ</td><td  colspan="3">
<select>
<option value="0" selected='selected'>ƽ��</option>
<option value="1">���</option>
<option value="2">�ͻ�����</option>
</select>
</td></tr>
<tr>
<td>���ʽ</td><td colspan="3">
<select>
<option value="0" selected='selected'>����֧��</option>
<option value="1">�ʾֻ��</option>
<option value="2">֧����</option>
</select>
</td>
</tr>
<tr><td colspan="4"><input type="button" value="�ύ����" onclick=""/></td></tr>
</table><br/>
<?php }
}
