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
 <!--导入jquery的类文件-->
  <script type="text/javascript" src="{$smarty.const.FRONT_JS_URL}jquery-2.1.1.min.js"></script>
  <!--导入添加到购物车的js文件-->
   <script type="text/javascript" src="{$smarty.const.FRONT_JS_URL}addCart.js"></script>
<table id="tbg">
<tr>
<th colspan="5" bgcolor="#FFC4C4">商品详情</th>
</tr>
<tr>
<td rowspan="4"><img width="120px" height="120px" src="{$smarty.const.FONT_PICS_URL}{$goodDetails[0].pics}"/></td>
<td>商品名称</td><td>{$goodDetails[0].gname}</td>
<td>商品类别</td><td>{$goodDetails[0].cname}</td>
</tr>
<tr>
<td>商品品牌</td><td>{$goodDetails[0].brand}</td>
<td>商品型号</td><td>{$goodDetails[0].model}</td>
</tr>
<tr>
<td>商品产地</td><td>{$goodDetails[0].area}</td>
<td>商品库存</td><td>{$goodDetails[0].stocks}</td>
</tr>
<tr>
<td>市场价格</td><td>{$goodDetails[0].m_price}</td>
<td>会员价格</td><td>{$goodDetails[0].v_price}</td>
</tr>
<tr>
<td>商品简介</td><td colspan="3">{$goodDetails[0].info}</td>
<td>
<input type="hidden" id="Hiddengid" value="{$goodDetails[0].id}"/>
<img src="{$smarty.const.FONT_PICS_URL}images/looks.JPG" id="imgBuy"/>
<!--<input type="button" id="imgBuy" value="购买"/>-->
</td>
</tr>
</table>