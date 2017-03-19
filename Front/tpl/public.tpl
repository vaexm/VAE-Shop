<div id="div_Public">
<table style="padding-top:47px;">
{foreach from=$public item=p}
<tr><td><img src="{$smarty.const.FONT_PICS_URL}images/man.JPG"/><a href="#">
{$p.title}</a></td></tr>
{/foreach}
</table>
</div>