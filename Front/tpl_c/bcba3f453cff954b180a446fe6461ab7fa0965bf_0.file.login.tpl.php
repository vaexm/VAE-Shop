<?php
/* Smarty version 3.1.29, created on 2016-08-04 22:00:49
  from "E:\PHP\Apache\htdocs\2016-VAE-SHOP\Front\tpl\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a34a914c8947_27457505',
  'file_dependency' => 
  array (
    'bcba3f453cff954b180a446fe6461ab7fa0965bf' => 
    array (
      0 => 'E:\\PHP\\Apache\\htdocs\\2016-VAE-SHOP\\Front\\tpl\\login.tpl',
      1 => 1470316515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a34a914c8947_27457505 ($_smarty_tpl) {
?>

<head>
<?php echo '<script'; ?>
 type="text/javascript">
function changeCode(){
	<!--为了让服务器误以为重新请求了页面，需要不断的更新url，可以通过在url后面追加参数的方式来实现-->
	document.getElementById("myImg").src="YanZheng.php?a="+Math.random(0,1000000);
}
<?php echo '</script'; ?>
>
</head>
<div id="div_Login">
<form>
<?php if ($_smarty_tpl->tpl_vars['islogin']->value == "1") {?>
<div style="padding-top:50px;text-align:center;font-color:black;font-size:13px;">
欢迎您:<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
<br/><br/>
<a href="#">会员中心</a><br/><br/>
<a href="index.php?pageurl=cart">查看购物车</a><br/><br/>
<a href="LoginOut.php">安全退出</a><br/><br/>
</div>
<?php } else { ?>
<table style="padding-top:40px;font-size:10px;">
<tr><td>用户名:<input type="text" id="txtId" onblur="IdBlur()" size="12px"/>
<a href="#" style="color:blue;">&nbsp;&nbsp;注册&nbsp;&nbsp;</a>
</td></tr>
<tr><td>&nbsp;&nbsp;密码:<input type="password" id="txtPwd" onblur="PwdBlur()" size="12px"/>
<a href="#" style="color:blue;">忘记密码</a>
</td></tr>
<tr><td>验证码:<input type="text" id="txtCode" size="12px"/></td></tr>
<tr align="center"><td><img src="YanZheng.php" id="myImg"/><a href="#" onClick="changeCode()">换一张</a></td><tr>
 <tr align="center">
       <td><input type="reset" id="btnReset" value="重置"/>
       <input type="button" id="btnLogin" value="登录"/>
       </td>
     </tr>
</table>
<?php }?>

</form>
</div><?php }
}
