<style type="text/css">
  table{
  width:100%;
  border-collapse:collapse;

  }
  a{
  text-decoration:none;
  color:#996633;
  }
  table  tr th, table  tr  td{
  border:solid 1px #996633;
  text-align:center;
  }
  #div1{
  float:left;
  padding-left:20px;
  }
  </style>  
<table>
<tr bgcolor="#996633" height="30px">
<th>ѡ��</th><th>������</th><th>�����û�</th><th>������</th><th>���ѽ��</th><th>���ʽ</th>
<th>�ͻ���ʽ</th><th>����״̬</th><th>�鿴</th><th>����</th>
</tr>
{section loop=$formInfo name=fi}
<tr  height="30px">
<td><input type="checkbox" name="items" id="chk{$formInfo[fi].id}"/></td>
<td><span id="sp{$formInfo[fi].id}">{$formInfo[fi].formid}</span></td>
<td>{$formInfo[fi].vendee}</td>
<td>{$formInfo[fi].taker}</td>
<td>{$formInfo[fi].total}</td>
<td>{$formInfo[fi].pay_method}</td>
<td>{$formInfo[fi].del_method}</td>
<td>{$formInfo[fi].stateName}</td>
<td><a href="#" onclick="OpenWindow({$formInfo[fi].formid})">�鿴</a></td>
<td><a href="#" onclick="changeState({$formInfo[fi].formid},{$formInfo[fi].state})">������</a></td>
</tr>
{/section}
</table><br/>
<div style="float:left;"><a href="#" id="chAll">ȫѡ</a>&nbsp;&nbsp;&nbsp;<a href="#" id="chRes">��ѡ</a>&nbsp;&nbsp;&nbsp;
<a href="#" id="chNo">ȫ��ѡ</a>&nbsp;&nbsp;&nbsp;<a href="#" id="delete">ɾ��ѡ��</a></div>
{$page->ShowPages()}
<div>��{$currentPage}ҳ/��{$totalPage}ҳ</div>
<br/><br/>
<table id="tbState" style="display:none;" align="center">
<tr bgcolor="#996633"><th colspan="7">��������</th></tr>
<tr><td>������</td><td><span id="spFid"></span></td>
<td>
 <input name="rdo" type="radio" value="0"/>δ����   
<td><input name="rdo" type="radio" value="1"/>���տ�</td>
<td> <input name="rdo" type="radio" value="2"/>�ѷ���</td>
<td>  <input name="rdo" type="radio" value="3"/>���ջ�</td>
<td><a href="#" onclick="saveChangeState()">�޸�</a></td>
</tr>
</table>