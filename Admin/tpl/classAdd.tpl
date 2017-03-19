<style type="text/css">
#tb1{
width:250px;
border-collapse:collapse;
}
#tb1 tr th,#tb1 tr td{
text-align:center;
border:1px solid #996633;
}
</style>
<table id="tb1" align="center">
<tr bgcolor="#996633" height="30px"><th colspan="2">添加商品类别</th></tr>
<tr height="30px"><td>类别名称</td><td><input type="text" size="15"/></td></tr>
<tr height="30px"> <td>类别等级</td><td>
<select>
<option value="2">二级类别</option>
<option value="1">一级类别</option>
</select>
</td></tr>
<tr height="30px"><td>父级类别</td>
<td>
<select>
{section loop=$firstMenu name=fm}
<option value="{$firstMenu[fm].id}">{$firstMenu[fm].name}</option>
{/section}
</select>
</td>
</tr>
</table><br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" name="btnAdd" value="添加"/>