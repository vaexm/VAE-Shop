<style type="text/css">
table{
width:500px;
border-collapse:collapse;
}
table tr th,table tr td{
border:1px solid #996633;
text-align:center;
}
table a{
text-decoration:none;
color:#996633;
}
table a:hover{
color:red;
}
#div1{
padding-left:260px;
font-size:13px;
}

</style>
<table align="center">
<th colspan="4" bgcolor="#996633" height="30px"><font color="white">�鿴����</font></th>
<tr>
<td>ɾ��</td>
<td>������վ</td>
<td>URL</td>
<td>�޸�</td>
</tr>
{section loop=$resLinks name=rk}
<tr  height="30px">
<td><input type="checkbox" name="items" id="chk{$resLinks[rk].id}"/></td>
<td><input type="text" id="links1" value="{$resLinks[rk].name}"/></td> 
<td><input type="text" id="links" value="{$resLinks[rk].url}"/></td> 
<td><a href="#" onclick="UpLinks({$resLinks[rk].id})">�޸�</a></td>
</tr>
{/section}
</table>
<div id="div1"><a href="#" id="chAll">ȫѡ</a>&nbsp;&nbsp;&nbsp;<a href="#" id="chRes">��ѡ</a>&nbsp;&nbsp;&nbsp;
<a href="#" id="chNo">ȫ��ѡ</a>&nbsp;&nbsp;&nbsp;<a href="#">ɾ��ѡ��</a></div>