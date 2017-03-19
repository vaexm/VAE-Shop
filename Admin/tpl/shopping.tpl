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
<th>选项</th><th>id</th><th>名称</th><th>品牌</th><th>产地</th><th>型号</th>
<th>库存</th><th>销量</th><th>加入时间</th><th>更改</th>
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
<td><a href="#">更改</a></td>
</tr>
{/section}
</table><br/>
<div style="float:left;"><a href="#" id="chAll">全选</a>&nbsp;&nbsp;&nbsp;<a href="#" id="chRes">反选</a>&nbsp;&nbsp;&nbsp;
<a href="#" id="chNo">全不选</a>&nbsp;&nbsp;&nbsp;<a href="#" id="deleteShop">删除选择</a></div>
{$page->ShowPages()}
<div>第{$currentPage}页/共{$totalPage}页</div>
<br/><br/>
