<style type="text/css">
#tbg{
width:460px;
height:260px;
 border-collapse:collapse;
}
#tbg tr th,#tbg tr td{
border:1px solid #FFC4C4;
text-align:center;
}
</style>
 <!--����jquery�����ļ�-->
  <script type="text/javascript" src="{$smarty.const.FRONT_JS_URL}jquery-2.1.1.min.js"></script>
  <!--������ӵ����ﳵ��js�ļ�-->
   <script type="text/javascript" src="{$smarty.const.FRONT_JS_URL}addCart.js"></script>
<table id="tbg">
<tr>
<th colspan="5" bgcolor="#FFC4C4">��Ʒ����</th>
</tr>
<tr>
<td rowspan="4"><img width="120px" height="120px" src="{$smarty.const.FONT_PICS_URL}{$goodDetails[0].pics}"/></td>
<td>��Ʒ����</td><td>{$goodDetails[0].gname}</td>
<td>��Ʒ���</td><td>{$goodDetails[0].cname}</td>
</tr>
<tr>
<td>��ƷƷ��</td><td>{$goodDetails[0].brand}</td>
<td>��Ʒ�ͺ�</td><td>{$goodDetails[0].model}</td>
</tr>
<tr>
<td>��Ʒ����</td><td>{$goodDetails[0].area}</td>
<td>��Ʒ���</td><td>{$goodDetails[0].stocks}</td>
</tr>
<tr>
<td>�г��۸�</td><td>{$goodDetails[0].m_price}</td>
<td>��Ա�۸�</td><td>{$goodDetails[0].v_price}</td>
</tr>
<tr>
<td>��Ʒ���</td><td colspan="3">{$goodDetails[0].info}</td>
<td>
<input type="hidden" id="Hiddengid" value="{$goodDetails[0].id}"/>
<img src="{$smarty.const.FONT_PICS_URL}images/looks.JPG" id="imgBuy"/>
<!--<input type="button" id="imgBuy" value="����"/>-->
</td>
</tr>
</table>