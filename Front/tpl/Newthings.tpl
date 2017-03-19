
<div id="div_Middle_R_Bottom_1">

</div>
<div id="div_Middle_R_Bottom_2" >

{foreach from=$PageNew item=n}
<table width=600px height=150px style="font-size:13px;">
<tr><td rowspan='5'><a href="#" onclick="openWindow({$n.id})"><img width=100px height=100px src="{$smarty.const.FONT_PICS_URL}{$n.pics}" style="border:1px solid #D8D6D6;"/></a></td>
<td>商品名称:{$n.name}</td>
<td>商品型号:{$n.model}</td></tr>
<tr>
<td>商品品牌:{$n.brand}</td>
<td>销售数量:{$n.sell}</td></tr>
<tr>
<td>剩余数量:{$n.stocks}</td>
<td>商品产地:{$n.area}</td></tr>
<tr>
<td>市场价&nbsp;&nbsp;:{$n.m_price}</td>
<td>商品类别:{$n.class}</td></tr>
<tr><td>会员价&nbsp;&nbsp;:{$n.v_price}</td>
<td>上市日期:{$n.addTime}</td></tr>
</table>
<hr width="642px" size="1" color="#D8D8D6"/>
{/foreach}
<div style="float:left;font-size:14px">
产品{$totalNum}个&nbsp;&nbsp;每页{$size}个&nbsp;&nbsp;  第{$currentPage}页/共{$totalPage}页
</div>
{$page->ShowPages()}

</div>