<?php
/* Smarty version 3.1.29, created on 2016-08-07 22:48:29
  from "E:\PHP\Apache\htdocs\2016-VAE-SHOP\Admin\tpl\Addpublic.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a74a3d225282_02244586',
  'file_dependency' => 
  array (
    '09284ea0efa4e09cd7465f47613237550440501d' => 
    array (
      0 => 'E:\\PHP\\Apache\\htdocs\\2016-VAE-SHOP\\Admin\\tpl\\Addpublic.tpl',
      1 => 1470581304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a74a3d225282_02244586 ($_smarty_tpl) {
?>
<header Content-type="text/html";charset=gbk;>
<style type="text/css">
table{
  width:400px;
  border-collapse:collapse;
  }
 table  tr th, table  tr  td{
  border:solid 1px #996633;
  text-align:center;
  }
 </style>
<table align="center">
<tr bgcolor="#996633" height="30px"><th colspan="2"><font color="white">添加公告
</font></th></tr>
<tr height="30px"><td>公告标题:</td><td><input type="text" id="puTitle"/></td></tr>
<tr><td>公告内容</td><td><textarea cols="40" rows="10" id="area"></textarea></td></tr>
<tr><td colspan="2"><input type="button" value="添加公告" onclick="AddPublic()"/></td></tr>
</table><?php }
}
