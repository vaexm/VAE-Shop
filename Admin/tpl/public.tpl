<style type="text/css">
table{
  width:240px;
  border-collapse:collapse;
  }
 table  tr th, table  tr  td{
  border:solid 1px #996633;
  text-align:center;
  }
 #div1{
 padding-left:280px;
 }
 </style>
<table align="center">
<tr bgcolor="#996633" height="30px"><th colspan="2">查看公告</th></tr>
<tr height="30xp"><td>删除</td><td>公告标题</td></tr>
{section loop=$resPub name=rp}
<tr height="30px">
<td><input type="checkbox" name="items" id="chk{$resPub[rp].id}"/></td>
<td>{$resPub[rp].title}</td>
</tr>
{/section}
</table><br/>
<div id="div1">
<a href="#" id="chAll">全选</a>&nbsp;&nbsp;<a href="#" id="chRes">反选</a>
&nbsp;&nbsp;
<a href="#" id="chNo">全不选</a>&nbsp;&nbsp;
<a href="#" id="deletePublic">删除选择</a>
</div>