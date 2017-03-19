<?php
/* Smarty version 3.1.29, created on 2016-08-02 17:08:28
  from "E:\PHP\Apache\htdocs\2016-08-02-VAE-SHOP\Front\tpl\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a0630cedd099_93722176',
  'file_dependency' => 
  array (
    'ba7204bead513fb551d9ad0a6d091e2c56ccef96' => 
    array (
      0 => 'E:\\PHP\\Apache\\htdocs\\2016-08-02-VAE-SHOP\\Front\\tpl\\login.tpl',
      1 => 1470128905,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a0630cedd099_93722176 ($_smarty_tpl) {
?>
<div id="div_Login">
<form>
<table style="padding-top:40px;font-size:10px;">
<tr><td>用户名:<input type="text" name="txtId" size="12px"/>
<a href="#">&nbsp;&nbsp;注册&nbsp;&nbsp;</a>
</td></tr>
<tr><td>&nbsp;&nbsp;密码:<input type="password" name="txtPwd" size="12px"/>
<a href="#">忘记密码</a>
</td></tr>
 <tr align="center">
       <td><input type="reset" name="btnReset" value="重置"/>
       <input type="button" name="btnLogin" value="登录"/>
       </td>
     </tr>
</table>
</form>
</div><?php }
}
