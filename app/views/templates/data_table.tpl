<figure>
<table id="tab_calc" role="grid">
<thead>
	<tr >
                <th scope="col">#</th>
		<th scope="col">id</th>
		<th scope="col">title</th>
		<th scope="col">genre</th>
		<th scope="col">Authors Firstname</th>
		<th scope="col">Authors Lastname</th>
		<th scope="col">Borrowers Firstname</th>
		<th scope="col">Borrowers Lastname</th>
                <th scope="col">Borrow</th>
                
                
	</tr>
</thead>
<tbody>
{foreach $books as $p}
{strip}
	<tr>
                <th scope="row">1</th>
		<td>{$p["id_book"]}</td>
		<td>{$p["tytul"]}</td>
		<td>{$p["gatunek"]}</td>
		<td>{$p["aimie"]}</td>
		<td>{$p["anazwisko"]}</td>
		<td>{$p["uimie"]}</td>
		<td>{$p["unazwisko"]}</td>
                <td><form class="pure-form pure-form-stacked" action="{$conf->action_root}borrow" method="post">
                        <input id="user_id" type="hidden" name="user_id" value="{$loginform->user_id}" /><br />
                        <input id="book_id" type="hidden" name="book_id" value="{$p["id_book"]}" /><br />
                        <input role="button" type="submit" value="Borrow" />
                    </form>
                </td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>
</figure>