<style type="text/css">
table{
width:100%;
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
padding-left:180px;
}
</style>
<table align="center">
<tr>
<th colspan="5" bgcolor="#996633" height="30px"><font color="white">��Ա����</font></th>
<tr height="30px"><td></td><td>id</td><td>�ǳ�</td><td>״̬</td><td>�鿴��Ϣ</td></tr>
{section loop=$resUser name=lu}
<tr height="30px">
<td><input type="checkbox" name="items" id="{$resUser[lu].id}"/></td>
<td>{$resUser[lu].id}</td>
<td>{$resUser[lu].name}</td>
<td>
{if $resUser[lu].isfreeze==0}
<a href="#" onclick="UserState({$resUser[lu].id},1)">δ����</a>
{elseif $resUser[lu].isfreeze==1}
<a href="#" onclick="UserState({$resUser[lu].id},0)">����</a>
{/if}
</td>
<td><a href="#" onclick="OpenWindow1({$resUser[lu].id})">��ϸ��Ϣ</a></td>
</tr>
{/section}
</tr>
</table>
<div id="div1"><a href="#" id="chAll">ȫѡ</a>&nbsp;&nbsp;&nbsp;<a href="#" id="chRes">��ѡ</a>&nbsp;&nbsp;&nbsp;
<a href="#" id="chNo">ȫ��ѡ</a>&nbsp;&nbsp;&nbsp;<a href="#">ɾ��ѡ��</a>&nbsp;&nbsp;&nbsp;
<a href="#" onclick="ChUsers(0)">�ⶳ�û�</a>&nbsp;&nbsp;&nbsp;
<a href="#" onclick="ChUsers(1)">�����û�</a>
</div>