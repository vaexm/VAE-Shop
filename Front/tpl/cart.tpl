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
<tr bgcolor="#FFC4C4"><th colspan='7'>�ҵĹ��ﳵ</th></tr>
<tr><th>ѡ��</th><th>��Ʒ����</th><th>��������</th><th>�г��۸�</th><th>��Ա�۸�</th>
<th>�ۿ���</th><th>�ϼ�</th></tr>
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
<!--<a href="#" id="chAll">ȫѡ</a>&nbsp;&nbsp;&nbsp;&nbsp;-->
<input type="button" id="chAll" value="ȫѡ" />
<input type="button" id="chRes" value="��ѡ" />
<input type="button" id="chNo" value="ȫ��ѡ"/>&nbsp;&nbsp;
<a href="" onclick="Delete()">ɾ��ѡ��</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;
<input type="button"  value="��������" onclick="saveShopping()"/>&nbsp;&nbsp;
<input type="button" value="ȥ����̨" onclick="Pay()"/>
<span id="sptotal" style="float:right">0&yen</span>
<span style="float:right">�ܼ�:</span>
