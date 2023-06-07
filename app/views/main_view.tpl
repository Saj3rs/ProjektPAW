<!doctype html>
<html lang="pl">

{block name=meta}Meta data error{/block}
{block name=head}Head error{/block}
<div style="background-image:url('/Projekt/css/bgd.jpg')">
<div id="layout">

<!--include file="./templates/side_menu.tpl"}-->





</div>
{block name=bottom}

<table id="tab_calc" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>id</th>
		<th>title</th>
		<th>genre</th>
		<th>Authors Firstname</th>
		<th>Authors Lastname</th>
                
	</tr>
</thead>
<tbody>
{foreach $obliczenia as $p}
{strip}
	<tr>
		<td>{$p["ammount"]}</td>
		<td>{$p["years"]}</td>
		<td>{$p["percent"]}</td>
		<td>{$p["full"]}</td>
                
	</tr>
{/strip}
{/foreach}
</tbody>
</table>

{/block}



</div>

</body>
</html>




