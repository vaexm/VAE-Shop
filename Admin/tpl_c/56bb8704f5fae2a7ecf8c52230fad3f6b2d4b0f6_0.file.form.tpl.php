<?php
/* Smarty version 3.1.29, created on 2016-08-07 16:38:22
  from "E:\PHP\Apache\htdocs\2016-VAE-SHOP\Admin\tpl\form.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a6f37e96b682_58334094',
  'file_dependency' => 
  array (
    '56bb8704f5fae2a7ecf8c52230fad3f6b2d4b0f6' => 
    array (
      0 => 'E:\\PHP\\Apache\\htdocs\\2016-VAE-SHOP\\Admin\\tpl\\form.tpl',
      1 => 1470557789,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a6f37e96b682_58334094 ($_smarty_tpl) {
?>
<style type="text/css">
  table{
  width:100%;
  border-collapse:collapse;

  }
  a{
  text-decoration:none;
  color:#996633;
  }
  table  tr th, table  tr  td{
  border:solid 1px #996633;
  text-align:center;
  }
  #div1{
  float:left;
  padding-left:20px;
  }
  </style>  
<table>
<tr bgcolor="#996633" height="30px">
<th>ѡ��</th><th>������</th><th>�����û�</th><th>������</th><th>���ѽ��</th><th>���ʽ</th>
<th>�ͻ���ʽ</th><th>����״̬</th><th>�鿴</th><th>����</th>
</tr>
<?php
$__section_fi_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_fi']) ? $_smarty_tpl->tpl_vars['__smarty_section_fi'] : false;
$__section_fi_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['formInfo']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_fi_0_total = $__section_fi_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_fi'] = new Smarty_Variable(array());
if ($__section_fi_0_total != 0) {
for ($__section_fi_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index'] = 0; $__section_fi_0_iteration <= $__section_fi_0_total; $__section_fi_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index']++){
?>
<tr  height="30px">
<td><input type="checkbox" name="items" id="chk<?php echo $_smarty_tpl->tpl_vars['formInfo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index'] : null)]['id'];?>
"/></td>
<td><span id="sp<?php echo $_smarty_tpl->tpl_vars['formInfo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['formInfo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index'] : null)]['formid'];?>
</span></td>
<td><?php echo $_smarty_tpl->tpl_vars['formInfo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index'] : null)]['vendee'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['formInfo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index'] : null)]['taker'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['formInfo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index'] : null)]['total'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['formInfo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index'] : null)]['pay_method'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['formInfo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index'] : null)]['del_method'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['formInfo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index'] : null)]['stateName'];?>
</td>
<td><a href="#" onclick="OpenWindow(<?php echo $_smarty_tpl->tpl_vars['formInfo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index'] : null)]['formid'];?>
)">�鿴</a></td>
<td><a href="#" onclick="changeState(<?php echo $_smarty_tpl->tpl_vars['formInfo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index'] : null)]['formid'];?>
,<?php echo $_smarty_tpl->tpl_vars['formInfo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index'] : null)]['state'];?>
)">������</a></td>
</tr>
<?php
}
}
if ($__section_fi_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_fi'] = $__section_fi_0_saved;
}
?>
</table><br/>
<div style="float:left;"><a href="#" id="chAll">ȫѡ</a>&nbsp;&nbsp;&nbsp;<a href="#" id="chRes">��ѡ</a>&nbsp;&nbsp;&nbsp;
<a href="#" id="chNo">ȫ��ѡ</a>&nbsp;&nbsp;&nbsp;<a href="#" id="delete">ɾ��ѡ��</a></div>
<?php echo $_smarty_tpl->tpl_vars['page']->value->ShowPages();?>

<div>��<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
ҳ/��<?php echo $_smarty_tpl->tpl_vars['totalPage']->value;?>
ҳ</div>
<br/><br/>
<table id="tbState" style="display:none;" align="center">
<tr bgcolor="#996633"><th colspan="7">��������</th></tr>
<tr><td>������</td><td><span id="spFid"></span></td>
<td>
 <input name="rdo" type="radio" value="0"/>δ����   
<td><input name="rdo" type="radio" value="1"/>���տ�</td>
<td> <input name="rdo" type="radio" value="2"/>�ѷ���</td>
<td>  <input name="rdo" type="radio" value="3"/>���ջ�</td>
<td><a href="#" onclick="saveChangeState()">�޸�</a></td>
</tr>
</table><?php }
}
