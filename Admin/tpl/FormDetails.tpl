<style>
#tb{
width:400px;
border-collapse:collapse;
}
#tb tr th,#tb tr td{
text-align:center;
border:1px solid #996633;
}
</style>
<table id="tb" align="center">
<tr height="35px"><th colspan="4" bgcolor="#996633"><font color="white">�����鿴</font></th></tr>
<tr height="35px"><td>������</td><td>{$res[0].formid}</td>
<td>����ʱ��</td><td>{$res[0].formtime}</td></tr>
<tr height="35px"><td>�µ���</td><td>{$res[0].vendee}</td>
<td>�ջ���</td><td>{$res[0].taker}</td></tr>
<tr height="35px"><td>��ַ</td><td colspan="3">{$res[0].address}</td>
<tr height="35px"><td>�ͻ���ʽ</td><td>{$res[0].del_method}</td>
<td>���ʽ</td><td>{$res[0].pay_method}</td></tr>
</table>
<br/><br/>
<table id="tb" align="center">
<tr height="35px"><th colspan="5" bgcolor="#996633"><font color="white">��������</font></th></tr>
<tr>
<td>��Ʒ��</td><td>����</td><td>�۸�</td><td>�ۿ���</td><td>�ϼ�</td>
</tr>
<tr>
<td>{$res[0].commo_name}</td><td>{$res[0].commo_num}</td>
<td>{$res[0].agoprice}</td><td>{$res[0].fold}</td>
<td>{$res[0].total}</td>
</tr>
</table>