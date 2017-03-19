<div id="div_Comment">
<div id="div_Comment_Top">
</div>
<div id="div_Comment_2">
 {foreach from=$comment item=n} 
     <div style="width:150px;height:150px;float:left; text-align:center;font-size:13px;">
     <a href="#"  onclick="openWindow({$n.id})"><img src="{$smarty.const.FONT_PICS_URL}{$n.pics}" width="80px" height="80px" style="border:2px solid #D8D6D6;"/></a><br/>
     <span>{$n.name}</span><br/>
     市场价:<span>{$n.m_price}</span><br/>
   会员价:<span>{$n.v_price}</span><br/>
     </div>
   {/foreach}
</div>
</div>
<div id="div_Hot">
<div id="div_Hot_Top">
</div>
<div id="div_Hot_2">
 {foreach from=$hot item=n} 

     <div style="width:150px;height:150px;float:left; text-align:center;font-size:13px;">
     <a href="#" onclick="openWindow({$n.id})"><img  src="{$smarty.const.FONT_PICS_URL}{$n.pics}" width="80px" height="80px" style="border:2px solid #D8D6D6;"/></a><br/>
     <span>{$n.name}</span><br/>
     市场价:<span>{$n.m_price}</span><br/>
   会员价:<span>{$n.v_price}</span><br/>
     </div>
   {/foreach}
</div>
</div>
<div id="div_New">
<div id="div_New_Top">
</div>
<div id="div_New_2">
 {foreach from=$hot item=n} 

     <div style="width:150px;height:150px;float:left; text-align:center;font-size:13px;">
     <a href="#" onclick="openWindow({$n.id})"><img src="{$smarty.const.FONT_PICS_URL}{$n.pics}" width="80px" height="80px" style="border:2px solid #D8D6D6;"/></a><br/>
     <span>{$n.name}</span><br/>
     市场价:<span>{$n.m_price}</span><br/>
   会员价:<span>{$n.v_price}</span><br/>
     </div>
   {/foreach}
</div>
</div>