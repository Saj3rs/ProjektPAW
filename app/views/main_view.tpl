<!doctype html>
<html lang="pl">

{block name=meta}Meta data error{/block}
{block name=head}Head error{/block}
<div style="background-image:url('/Projekt/css/bgd.jpg')">
<div id="layout">

<!--include file="./templates/side_menu.tpl"}-->



<div class="messages">

{* wyświeltenie listy błędów, jeśli istnieją *}
{if $mess->isError()}
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	{foreach $mess->getErrors() as $err}
	{strip}
		<li>{$err}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{* wyświeltenie listy informacji, jeśli istnieją *}
{if $mess->isInfo()}
	<h4>Informacje: </h4>
	<ol class="inf">
	{foreach $mess->getInfos() as $inf}
	{strip}
		<li>{$inf}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}



{if isset($res->full)&&isset($res->monthly)}
	<h4>Wynik</h4>
	<p class="result">
            Pelna kwota:{$res->full}<br>
            Miesiecznie:{$res->monthly}
	</p>
{/if}

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
</div>
<!-- For some reasons include doesn't work
include file="./templates/bottom.tpl"}-->
<script src="http://localhost:8080/PAW/php_08/js/ui.js"></script>
</body>
</html>




