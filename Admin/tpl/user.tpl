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
<th colspan="5" bgcolor="#996633" height="30px"><font color="white">会员管理</font></th>
<tr height="30px"><td></td><td>id</td><td>昵称</td><td>状态</td><td>查看信息</td></tr>
{section loop=$resUser name=lu}
<tr height="30px">
<td><input type="checkbox" name="items" id="{$resUser[lu].id}"/></td>
<td>{$resUser[lu].id}</td>
<td>{$resUser[lu].name}</td>
<td>
{if $resUser[lu].isfreeze==0}
<a href="#" onclick="UserState({$resUser[lu].id},1)">未冻结</a>
{elseif $resUser[lu].isfreeze==1}
<a href="#" onclick="UserState({$resUser[lu].id},0)">冻结</a>
{/if}
</td>
<td><a href="#" onclick="OpenWindow1({$resUser[lu].id})">详细信息</a></td>
</tr>
{/section}
</tr>
</table>
<div id="div1"><a href="#" id="chAll">全选</a>&nbsp;&nbsp;&nbsp;<a href="#" id="chRes">反选</a>&nbsp;&nbsp;&nbsp;
<a href="#" id="chNo">全不选</a>&nbsp;&nbsp;&nbsp;<a href="#">删除选择</a>&nbsp;&nbsp;&nbsp;
<a href="#" onclick="ChUsers(0)">解冻用户</a>&nbsp;&nbsp;&nbsp;
<a href="#" onclick="ChUsers(1)">冻结用户</a>
</div>