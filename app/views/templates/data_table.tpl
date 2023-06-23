<figure>
<table id="tab_calc" role="grid">
<thead>
	<tr >
                
		<th scope="col">id</th>
		<th scope="col">title</th>
		<th scope="col">genre</th>
		<th scope="col">Authors Firstname</th>
		<th scope="col">Authors Lastname</th>
		<th scope="col">Borrowers Firstname</th>
		<th scope="col">Borrowers Lastname</th>
                {block name=borrowrow}{/block}
                
                
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
                {block name="borrow"}{/block}
	</tr>
{/strip}
{/foreach}
</tbody>
</table>
</figure>