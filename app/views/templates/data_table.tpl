
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
                <th>Borrow</th>
                
                
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
                <td><form class="pure-form pure-form-stacked" action="{$conf->action_root}borrow" method="post">
                        <input id="user_id" type="hidden" name="user_id" value="{$loginform->user_id}" /><br />
                        <input id="book_id" type="hidden" name="book_id" value="{$p["id_book"]}" /><br />
                        <input class="pure-button" type="submit" value="Borrow" />
                    </form>
                </td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>