
<div id="div_Middle_R_Bottom_1">

</div>
<div id="div_Middle_R_Bottom_2" >

{foreach from=$PageNew item=n}
<table width=600px height=150px style="font-size:13px;">
<tr><td rowspan='5'><a href="#" onclick="openWindow({$n.id})"><img width=100px height=100px src="{$smarty.const.FONT_PICS_URL}{$n.pics}" style="border:1px solid #D8D6D6;"/></a></td>
<td>��Ʒ����:{$n.name}</td>
<td>��Ʒ�ͺ�:{$n.model}</td></tr>
<tr>
<td>��ƷƷ��:{$n.brand}</td>
<td>��������:{$n.sell}</td></tr>
<tr>
<td>ʣ������:{$n.stocks}</td>
<td>��Ʒ����:{$n.area}</td></tr>
<tr>
<td>�г���&nbsp;&nbsp;:{$n.m_price}</td>
<td>��Ʒ���:{$n.class}</td></tr>
<tr><td>��Ա��&nbsp;&nbsp;:{$n.v_price}</td>
<td>��������:{$n.addTime}</td></tr>
</table>
<hr width="642px" size="1" color="#D8D8D6"/>
{/foreach}
<div style="float:left;font-size:14px">
��Ʒ{$totalNum}��&nbsp;&nbsp;ÿҳ{$size}��&nbsp;&nbsp;  ��{$currentPage}ҳ/��{$totalPage}ҳ
</div>
{$page->ShowPages()}

</div>