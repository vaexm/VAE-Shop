<?php
/* Smarty version 3.1.29, created on 2016-08-08 22:57:40
  from "E:\PHP\Apache\htdocs\2016-VAE-SHOP\Admin\tpl\class.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a89de4805f41_71145691',
  'file_dependency' => 
  array (
    '8f6c788a092e1c1993bdae98d6e45a4c226aef40' => 
    array (
      0 => 'E:\\PHP\\Apache\\htdocs\\2016-VAE-SHOP\\Admin\\tpl\\class.tpl',
      1 => 1470650647,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a89de4805f41_71145691 ($_smarty_tpl) {
?>
<style type="text/css">
#tb3{
width:300px;
border-collapse:collapse;
}
#tb3 tr th,#tb3 tr td{
text-align:center;
border:1px solid #996633;
}
#tb3 a{
text-decoration:none;
color:#996633;
font-size:13px;
}
a:hover{
color:red;
}
</style>
<table id="tb3" align="center">
<tr bgcolor="#996633"><th colspan="4">商品类别查看</th></tr>
  <?php
$__section_fm_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_fm']) ? $_smarty_tpl->tpl_vars['__smarty_section_fm'] : false;
$__section_fm_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['firstMenu']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_fm_0_total = $__section_fm_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_fm'] = new Smarty_Variable(array());
if ($__section_fm_0_total != 0) {
for ($__section_fm_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_fm']->value['index'] = 0; $__section_fm_0_iteration <= $__section_fm_0_total; $__section_fm_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_fm']->value['index']++){
?>
    <tr height="30px">
      <td><font color="red" size="3px">父类:</font></td>
      <td><input type="text" size="10" id="txt<?php echo $_smarty_tpl->tpl_vars['firstMenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_fm']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_fm']->value['index'] : null)]['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['firstMenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_fm']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_fm']->value['index'] : null)]['name'];?>
"/>
      </td>
      <td><a href="" onclick="UpClass(<?php echo $_smarty_tpl->tpl_vars['firstMenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_fm']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_fm']->value['index'] : null)]['id'];?>
,'<?php echo $_smarty_tpl->tpl_vars['firstMenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_fm']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_fm']->value['index'] : null)]['name'];?>
')">修改</a></td>
      <td><a href="#" onclick="DelFir(<?php echo $_smarty_tpl->tpl_vars['firstMenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_fm']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_fm']->value['index'] : null)]['id'];?>
)">删除</a></td>
  
    </tr>
    <?php
$__section_sm_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_sm']) ? $_smarty_tpl->tpl_vars['__smarty_section_sm'] : false;
$__section_sm_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['secondMenu']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sm_1_total = $__section_sm_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sm'] = new Smarty_Variable(array());
if ($__section_sm_1_total != 0) {
for ($__section_sm_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sm']->value['index'] = 0; $__section_sm_1_iteration <= $__section_sm_1_total; $__section_sm_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sm']->value['index']++){
?>
      <?php if ($_smarty_tpl->tpl_vars['secondMenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sm']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sm']->value['index'] : null)]['supid'] == $_smarty_tpl->tpl_vars['firstMenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_fm']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_fm']->value['index'] : null)]['id']) {?>
        <tr height="30px">
      <td><font size="2px">子类:</font></td>
      <td><input type="text" size="10" id="txt<?php echo $_smarty_tpl->tpl_vars['secondMenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sm']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sm']->value['index'] : null)]['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['secondMenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sm']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sm']->value['index'] : null)]['name'];?>
"/>
      </td>
      <td>
        <a href="#" onclick="UpClass(<?php echo $_smarty_tpl->tpl_vars['secondMenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sm']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sm']->value['index'] : null)]['id'];?>
,'<?php echo $_smarty_tpl->tpl_vars['secondMenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sm']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sm']->value['index'] : null)]['name'];?>
'")>修改</a></td>
      <td><a href="#" onclick="DelSec(<?php echo $_smarty_tpl->tpl_vars['secondMenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sm']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sm']->value['index'] : null)]['id'];?>
)">删除</a>
      </td>
    </tr>
      <?php }?>
    <?php
}
}
if ($__section_sm_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_sm'] = $__section_sm_1_saved;
}
?>
  <?php
}
}
if ($__section_fm_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_fm'] = $__section_fm_0_saved;
}
?>
</table><?php }
}
