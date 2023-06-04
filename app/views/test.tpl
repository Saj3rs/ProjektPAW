
<!doctype html>
<html lang="pl">


<div style="background-image:url('/Projekt/css/bgd.jpg')">
<div id="layout">


<table id="tab_calc" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>id</th>
		<th>title</th>
		<th>genre</th>
		<th>Authors Firstname</th>
		<th>Authors Lastname</th>
		<th>Borrowers Firstname</th>
		<th>Borrowers Lastname</th>
                
                
	</tr>
</thead>
<tbody>
{foreach $books as $p}
{strip}
	<tr>
		<td>{$p["id_book"]}</td>
		<td>{$p["tytul"]}</td>
		<td>{$p["gatunek"]}</td>
		<td>{$p["aimie"]}</td>
		<td>{$p["anazwisko"]}</td>
		<td>{$p["uimie"]}</td>
		<td>{$p["unazwisko"]}</td>
                
	</tr>
{/strip}
{/foreach}
</tbody>
</table>

</div>
</div>

</body>
</html>




