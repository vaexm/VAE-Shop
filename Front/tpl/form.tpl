<style type="text/css">
#tb{
width:460px;
height:200px;
 border-collapse:collapse;
}
#tb tr th,#tb tr td{
border:1px solid #FFC4C4;
text-align:center;
}
</style>
<table id="tb">
<tr bgcolor="#FFC4C4"><th colspan="4">������Ϣ</th></tr>
<tr><td>�ջ���:</td><td>{$forminfo[0].realname}</td><td>�ʱ�:</td><td>{$forminfo[0].code}</td></tr>
<tr><td>��ϵ�绰:</td><td>{$forminfo[0].tel}</td><td colspan="2">&nbsp;&nbsp;</td></tr>
<tr><td>��ַ:</td><td colspan="3">{$forminfo[0].address}</td></tr>
<tr><td>�ͻ���ʽ</td><td  colspan="3">
<select>
<option value="0" selected='selected'>ƽ��</option>
<option value="1">���</option>
<option value="2">�ͻ�����</option>
</select>
</td></tr>
<tr>
<td>���ʽ</td><td colspan="3">
<select>
<option value="0" selected='selected'>����֧��</option>
<option value="1">�ʾֻ��</option>
<option value="2">֧����</option>
</select>
</td>
</tr>
<tr><td colspan="4"><input type="button" value="�ύ����" onclick=""/></td></tr>
</table><br/>
