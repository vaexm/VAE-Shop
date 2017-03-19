<style type="text/css">
table{
width:420;
border-collapse:collapse;
}
table tr th,table tr td{
border:1px solid #996633;
text-align:center;
}
</style>
<table align="center">
<tr>
<th colspan="2" bgcolor="#996633" height="30px"><font color="white">会员信息</font></th>
</tr>
<tr  height="30px"><td>会员名称：</td><td>{$res1[0].name}</td></tr>
<tr  height="30px"><td>消费总额：</td><td>{$res1[0].consume}</td></tr>
<tr  height="30px"><td>真实姓名</td><td>{$res1[0].realname}</td></tr>
<tr  height="30px"><td>身份证号：</td><td>{$res1[0].card}</td></tr>
<tr  height="30px"><td>移动电话：</td><td>{$res1[0].tel}</td></tr>
<tr  height="30px"><td>固定电话：</td><td>{$res1[0].phone}</td></tr>
<tr  height="30px"><td>Email:</td><td>{$res1[0].Email}</td></tr>
<tr  height="30px"><td>QQ号：</td><td>{$res1[0].QQ}</td></tr>
<tr  height="30px"><td>邮编：</td><td>{$res1[0].code}</td></tr>
<tr  height="30px"><td>地址:</td><td>{$res1[0].address}</td></tr>
<tr  height="30px"><td>是否冻结:</td><td>{$res1[0].fname}</td></tr>
<tr  height="30px"><td>注册时间:</td><td>{$res1[0].addtime}</td></tr>
</table>