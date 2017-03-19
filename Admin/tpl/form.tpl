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
<th>选项</th><th>订单号</th><th>购买用户</th><th>接收人</th><th>消费金额</th><th>付款方式</th>
<th>送货方式</th><th>订单状态</th><th>查看</th><th>处理</th>
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
<td><a href="#" onclick="OpenWindow({$formInfo[fi].formid})">查看</a></td>
<td><a href="#" onclick="changeState({$formInfo[fi].formid},{$formInfo[fi].state})">请求处理</a></td>
</tr>
{/section}
</table><br/>
<div style="float:left;"><a href="#" id="chAll">全选</a>&nbsp;&nbsp;&nbsp;<a href="#" id="chRes">反选</a>&nbsp;&nbsp;&nbsp;
<a href="#" id="chNo">全不选</a>&nbsp;&nbsp;&nbsp;<a href="#" id="delete">删除选择</a></div>
{$page->ShowPages()}
<div>第{$currentPage}页/共{$totalPage}页</div>
<br/><br/>
<table id="tbState" style="display:none;" align="center">
<tr bgcolor="#996633"><th colspan="7">订单处理</th></tr>
<tr><td>订单号</td><td><span id="spFid"></span></td>
<td>
 <input name="rdo" type="radio" value="0"/>未处理   
<td><input name="rdo" type="radio" value="1"/>已收款</td>
<td> <input name="rdo" type="radio" value="2"/>已发货</td>
<td>  <input name="rdo" type="radio" value="3"/>已收货</td>
<td><a href="#" onclick="saveChangeState()">修改</a></td>
</tr>
</table>