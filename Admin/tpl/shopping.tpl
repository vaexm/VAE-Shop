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
<th>ѡ��</th><th>id</th><th>����</th><th>Ʒ��</th><th>����</th><th>�ͺ�</th>
<th>���</th><th>����</th><th>����ʱ��</th><th>����</th>
</tr>
{section loop=$shopInfo name=fi}
<tr  height="30px">
<td><input type="checkbox" name="items" id="chk{$shopInfo[fi].id}"/></td>
<td><span id="sp{$shopInfo[fi].id}">{$shopInfo[fi].id}</span></td>
<td>{$shopInfo[fi].name}</td>
<td>{$shopInfo[fi].brand}</td>
<td>{$shopInfo[fi].area}</td>
<td>{$shopInfo[fi].model}</td>
<td>{$shopInfo[fi].stocks}</td>
<td>{$shopInfo[fi].sell}</td>
<td>{$shopInfo[fi].addtime}</td>
<td><a href="#">����</a></td>
</tr>
{/section}
</table><br/>
<div style="float:left;"><a href="#" id="chAll">ȫѡ</a>&nbsp;&nbsp;&nbsp;<a href="#" id="chRes">��ѡ</a>&nbsp;&nbsp;&nbsp;
<a href="#" id="chNo">ȫ��ѡ</a>&nbsp;&nbsp;&nbsp;<a href="#" id="deleteShop">ɾ��ѡ��</a></div>
{$page->ShowPages()}
<div>��{$currentPage}ҳ/��{$totalPage}ҳ</div>
<br/><br/>
