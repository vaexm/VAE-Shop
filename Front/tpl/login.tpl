
<head>
<script type="text/javascript">
function changeCode(){
	<!--Ϊ���÷���������Ϊ����������ҳ�棬��Ҫ���ϵĸ���url������ͨ����url����׷�Ӳ����ķ�ʽ��ʵ��-->
	document.getElementById("myImg").src="YanZheng.php?a="+Math.random(0,1000000);
}
</script>
</head>
<div id="div_Login">
<form>
{if $islogin=="1"}
<div style="padding-top:50px;text-align:center;font-color:black;font-size:13px;">
��ӭ��:{$user}<br/><br/>
<a href="#">��Ա����</a><br/><br/>
<a href="index.php?pageurl=cart">�鿴���ﳵ</a><br/><br/>
<a href="LoginOut.php">��ȫ�˳�</a><br/><br/>
</div>
{else}
<table style="padding-top:40px;font-size:10px;">
<tr><td>�û���:<input type="text" id="txtId" onblur="IdBlur()" size="12px"/>
<a href="#" style="color:blue;">&nbsp;&nbsp;ע��&nbsp;&nbsp;</a>
</td></tr>
<tr><td>&nbsp;&nbsp;����:<input type="password" id="txtPwd" onblur="PwdBlur()" size="12px"/>
<a href="#" style="color:blue;">��������</a>
</td></tr>
<tr><td>��֤��:<input type="text" id="txtCode" size="12px"/></td></tr>
<tr align="center"><td><img src="YanZheng.php" id="myImg"/><a href="#" onClick="changeCode()">��һ��</a></td><tr>
 <tr align="center">
       <td><input type="reset" id="btnReset" value="����"/>
       <input type="button" id="btnLogin" value="��¼"/>
       </td>
     </tr>
</table>
{/if}

</form>
</div>