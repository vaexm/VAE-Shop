<style>
table{
width:300px;
border-collapse:collapse;
}
table tr th,table tr td{
border:1px solid #996633;
text-align:center;
}
#tb1 a{
text-decoration:none;
color:#996633;
}
#tb1 a:hover{
color:red;
}
</style>
<!--{$resAdmin[ad].name},{$resAdmin[ad].pwd}-->
<table id="tb1" align="center">
<tr bgcolor="#996633" height="30px">
<th colspan="5"><font color="white">����Ա����</font></th>
{section loop=$resAdmin name=ad}
<tr height="30px">
<td>{$resAdmin[ad].id}</td>
<td>{$resAdmin[ad].name}</td>
<td><a href="#" onclick="showTable()">���</a></td>
<td><a href="#" onclick="show('{$resAdmin[ad].name}','{$resAdmin[ad].pwd}')">�޸�</a></td>
<td><a href="#" onclick="Delete('{$resAdmin[ad].name}')">ɾ��</a></td>
</tr>
{/section}
</table><br/><br/><br/>
<table id="tbAdd" align="center" style="display:none;">
<tr  bgcolor="#996633" height="30px"><th colspan="2"><font color="white">��ӹ���Ա</font></th></tr>
<tr height="30px"><td>�˺�:</td><td><input type="text" id="txtId"/></td></tr>
<tr height="30px"><td>����:</td><td><input type="password" id="txtPwd"/></td></tr>
<tr height="30px"><td>ȷ������:</td><td><input type="password" id="txtPwd1"/></td></tr>
<tr height="30px"><td colspan="2"><input type="button" name="btnAdd" value="���" onclick="Add()"/></td></tr>
</table>

<table id="tbUpdate" align="center"  style="display:none;">
<tr  bgcolor="#996633" height="30px"><th colspan="2"><font color="white">�޸Ĺ���Ա����</font></th></tr>
<tr height="30px"><td>ԭ����:</td><td><input type="text" id="OldPwd"/></td></tr>
<tr height="30px"><td>������:</td><td><input type="password" id="NewPwd"/></td></tr>
<tr height="30px"><td>ȷ������:</td><td><input type="password" id="NewPwd1"/></td></tr>
<tr height="30px"><td colspan="2"><input type="button" name="btnUpdate" value="�޸�" onclick="Update()"/></td></tr>
</table>
