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
<tr bgcolor="#FFC4C4"><th colspan="4">订单信息</th></tr>
<tr><td>收货人:</td><td>{$forminfo[0].realname}</td><td>邮编:</td><td>{$forminfo[0].code}</td></tr>
<tr><td>联系电话:</td><td>{$forminfo[0].tel}</td><td colspan="2">&nbsp;&nbsp;</td></tr>
<tr><td>地址:</td><td colspan="3">{$forminfo[0].address}</td></tr>
<tr><td>送货方式</td><td  colspan="3">
<select>
<option value="0" selected='selected'>平邮</option>
<option value="1">快递</option>
<option value="2">送货上门</option>
</select>
</td></tr>
<tr>
<td>付款方式</td><td colspan="3">
<select>
<option value="0" selected='selected'>网银支付</option>
<option value="1">邮局汇款</option>
<option value="2">支付宝</option>
</select>
</td>
</tr>
<tr><td colspan="4"><input type="button" value="提交订单" onclick=""/></td></tr>
</table><br/>
