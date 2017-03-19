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
<th>选项</th><th>订单号</th><th>购买用户</th><th>接收人</th><th>消费金额</th><th>付款方式</th>
<th>送货方式</th><th>订单状态</th><th>查看</th><th>处理</th>
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
)">查看</a></td>
<td><a href="#" onclick="changeState(<?php echo $_smarty_tpl->tpl_vars['formInfo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index'] : null)]['formid'];?>
,<?php echo $_smarty_tpl->tpl_vars['formInfo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index'] : null)]['state'];?>
)">请求处理</a></td>
</tr>
<?php
}
}
if ($__section_fi_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_fi'] = $__section_fi_0_saved;
}
?>
</table><br/>
<div style="float:left;"><a href="#" id="chAll">全选</a>&nbsp;&nbsp;&nbsp;<a href="#" id="chRes">反选</a>&nbsp;&nbsp;&nbsp;
<a href="#" id="chNo">全不选</a>&nbsp;&nbsp;&nbsp;<a href="#" id="delete">删除选择</a></div>
<?php echo $_smarty_tpl->tpl_vars['page']->value->ShowPages();?>

<div>第<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
页/共<?php echo $_smarty_tpl->tpl_vars['totalPage']->value;?>
页</div>
<br/><br/>
<table id="tbState" style="display:none;" align="center">
<tr bgcolor="#996633"><th colspan="7">订单处理</th></tr>
<tr><td>订单号</td><td><span id="spFid"></span></td>
<td>
 <input name="rdo" type="radio" value="0"/>未处理   
<td><input name="rdo" type="radio" value="1"/>已收款</td>
<td> <input name="rdo" type="radio" value="2"/>已发货</td>
<td>  <input name="rdo" type="radio" value="3"/>已收货</td>
<td><a href="#" onclick="saveChangeState()">修改</a></td>
</tr>
</table><?php }
}
