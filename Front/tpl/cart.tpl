<style>
#tb1{
 border-collapse:collapse;
}
#tb1 tr th,#tb1 tr td{
text-align:center;
border:1px solid #FFC4C4;
}
</style>
<table id="tb1" width="100%"> 
<tr bgcolor="#FFC4C4"><th colspan='7'>我的购物车</th></tr>
<tr><th>选项</th><th>商品名称</th><th>购买数量</th><th>市场价格</th><th>会员价格</th>
<th>折扣率</th><th>合计</th></tr>
{section loop=$cart name=c}
<tr>
<td><input type="checkbox" id="chk{$cart[c].id}" name="items" onchange="changeTotal()"/></td>
<td>{$cart[c].name}</td>
<td><input type="text" size="10" name="txtnum" id="num{$cart[c].id}" value="{$num[$smarty.section.c.index]}" 
onkeyup="calTotal({$cart[c].id},this.value,{$cart[c].v_price})"/></td>
<td>{$cart[c].m_price}</td>
<td><span id="vprice">{$cart[c].v_price}</span></td>
<td>{$cart[c].fold}</td>
<td><span id="sp{$cart[c].id}">{$num[$smarty.section.c.index]*$cart[c].v_price}</span></td>
</tr>
{/section}
 
</table><br/>
<!--<a href="#" id="chAll">全选</a>&nbsp;&nbsp;&nbsp;&nbsp;-->
<input type="button" id="chAll" value="全选" />
<input type="button" id="chRes" value="反选" />
<input type="button" id="chNo" value="全不选"/>&nbsp;&nbsp;
<a href="" onclick="Delete()">删除选择</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;
<input type="button"  value="继续购物" onclick="saveShopping()"/>&nbsp;&nbsp;
<input type="button" value="去收银台" onclick="Pay()"/>
<span id="sptotal" style="float:right">0&yen</span>
<span style="float:right">总计:</span>
