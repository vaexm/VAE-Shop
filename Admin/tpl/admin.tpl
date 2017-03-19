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
<th colspan="5"><font color="white">管理员管理</font></th>
{section loop=$resAdmin name=ad}
<tr height="30px">
<td>{$resAdmin[ad].id}</td>
<td>{$resAdmin[ad].name}</td>
<td><a href="#" onclick="showTable()">添加</a></td>
<td><a href="#" onclick="show('{$resAdmin[ad].name}','{$resAdmin[ad].pwd}')">修改</a></td>
<td><a href="#" onclick="Delete('{$resAdmin[ad].name}')">删除</a></td>
</tr>
{/section}
</table><br/><br/><br/>
<table id="tbAdd" align="center" style="display:none;">
<tr  bgcolor="#996633" height="30px"><th colspan="2"><font color="white">添加管理员</font></th></tr>
<tr height="30px"><td>账号:</td><td><input type="text" id="txtId"/></td></tr>
<tr height="30px"><td>密码:</td><td><input type="password" id="txtPwd"/></td></tr>
<tr height="30px"><td>确认密码:</td><td><input type="password" id="txtPwd1"/></td></tr>
<tr height="30px"><td colspan="2"><input type="button" name="btnAdd" value="添加" onclick="Add()"/></td></tr>
</table>

<table id="tbUpdate" align="center"  style="display:none;">
<tr  bgcolor="#996633" height="30px"><th colspan="2"><font color="white">修改管理员密码</font></th></tr>
<tr height="30px"><td>原密码:</td><td><input type="text" id="OldPwd"/></td></tr>
<tr height="30px"><td>新密码:</td><td><input type="password" id="NewPwd"/></td></tr>
<tr height="30px"><td>确认密码:</td><td><input type="password" id="NewPwd1"/></td></tr>
<tr height="30px"><td colspan="2"><input type="button" name="btnUpdate" value="修改" onclick="Update()"/></td></tr>
</table>
