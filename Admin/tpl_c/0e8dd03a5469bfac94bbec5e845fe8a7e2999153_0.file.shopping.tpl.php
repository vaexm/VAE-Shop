<?php
/* Smarty version 3.1.29, created on 2016-08-07 17:48:08
  from "E:\PHP\Apache\htdocs\2016-VAE-SHOP\Admin\tpl\shopping.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a703d8708d79_40786345',
  'file_dependency' => 
  array (
    '0e8dd03a5469bfac94bbec5e845fe8a7e2999153' => 
    array (
      0 => 'E:\\PHP\\Apache\\htdocs\\2016-VAE-SHOP\\Admin\\tpl\\shopping.tpl',
      1 => 1470562905,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a703d8708d79_40786345 ($_smarty_tpl) {
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
<th>选项</th><th>id</th><th>名称</th><th>品牌</th><th>产地</th><th>型号</th>
<th>库存</th><th>销量</th><th>加入时间</th><th>更改</th>
</tr>
<?php
$__section_fi_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_fi']) ? $_smarty_tpl->tpl_vars['__smarty_section_fi'] : false;
$__section_fi_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['shopInfo']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_fi_0_total = $__section_fi_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_fi'] = new Smarty_Variable(array());
if ($__section_fi_0_total != 0) {
for ($__section_fi_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index'] = 0; $__section_fi_0_iteration <= $__section_fi_0_total; $__section_fi_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index']++){
?>
<tr  height="30px">
<td><input type="checkbox" name="items" id="chk<?php echo $_smarty_tpl->tpl_vars['shopInfo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index'] : null)]['id'];?>
"/></td>
<td><span id="sp<?php echo $_smarty_tpl->tpl_vars['shopInfo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['shopInfo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index'] : null)]['id'];?>
</span></td>
<td><?php echo $_smarty_tpl->tpl_vars['shopInfo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index'] : null)]['name'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['shopInfo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index'] : null)]['brand'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['shopInfo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index'] : null)]['area'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['shopInfo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index'] : null)]['model'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['shopInfo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index'] : null)]['stocks'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['shopInfo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index'] : null)]['sell'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['shopInfo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_fi']->value['index'] : null)]['addtime'];?>
</td>
<td><a href="#">更改</a></td>
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
<a href="#" id="chNo">全不选</a>&nbsp;&nbsp;&nbsp;<a href="#" id="deleteShop">删除选择</a></div>
<?php echo $_smarty_tpl->tpl_vars['page']->value->ShowPages();?>

<div>第<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
页/共<?php echo $_smarty_tpl->tpl_vars['totalPage']->value;?>
页</div>
<br/><br/>
<?php }
}
