<style type="text/css">
#tb3{
width:300px;
border-collapse:collapse;
}
#tb3 tr th,#tb3 tr td{
text-align:center;
border:1px solid #996633;
}
#tb3 a{
text-decoration:none;
color:#996633;
font-size:13px;
}
a:hover{
color:red;
}
</style>
<table id="tb3" align="center">
<tr bgcolor="#996633"><th colspan="4">商品类别查看</th></tr>
  {section loop=$firstMenu name=fm}
    <tr height="30px">
      <td><font color="red" size="3px">父类:</font></td>
      <td><input type="text" size="10" id="txt{$firstMenu[fm].id}" value="{$firstMenu[fm].name}"/>
      </td>
      <td><a href="" onclick="UpClass({$firstMenu[fm].id},'{$firstMenu[fm].name}')">修改</a></td>
      <td><a href="#" onclick="DelFir({$firstMenu[fm].id})">删除</a></td>
  
    </tr>
    {section loop=$secondMenu name=sm}
      {if $secondMenu[sm].supid==$firstMenu[fm].id}
        <tr height="30px">
      <td><font size="2px">子类:</font></td>
      <td><input type="text" size="10" id="txt{$secondMenu[sm].id}" value="{$secondMenu[sm].name}"/>
      </td>
      <td>
        <a href="#" onclick="UpClass({$secondMenu[sm].id},'{$secondMenu[sm].name}'")>修改</a></td>
      <td><a href="#" onclick="DelSec({$secondMenu[sm].id})">删除</a>
      </td>
    </tr>
      {/if}
    {/section}
  {/section}
</table>