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
<tr height="35px"><th colspan="4" bgcolor="#996633"><font color="white">订单查看</font></th></tr>
<tr height="35px"><td>订单号</td><td>{$res[0].formid}</td>
<td>订单时间</td><td>{$res[0].formtime}</td></tr>
<tr height="35px"><td>下单人</td><td>{$res[0].vendee}</td>
<td>收货人</td><td>{$res[0].taker}</td></tr>
<tr height="35px"><td>地址</td><td colspan="3">{$res[0].address}</td>
<tr height="35px"><td>送货方式</td><td>{$res[0].del_method}</td>
<td>付款方式</td><td>{$res[0].pay_method}</td></tr>
</table>
<br/><br/>
<table id="tb" align="center">
<tr height="35px"><th colspan="5" bgcolor="#996633"><font color="white">订单内容</font></th></tr>
<tr>
<td>商品名</td><td>数量</td><td>价格</td><td>折扣率</td><td>合计</td>
</tr>
<tr>
<td>{$res[0].commo_name}</td><td>{$res[0].commo_num}</td>
<td>{$res[0].agoprice}</td><td>{$res[0].fold}</td>
<td>{$res[0].total}</td>
</tr>
</table>