<figure id="tab_books">
<table  role="grid">
<thead>
	<tr >
                
		<th scope="col">id</th>
		<th scope="col">title</th>
		<th scope="col">genre</th>
		<th scope="col">Authors Firstname</th>
		<th scope="col">Authors Lastname</th>
		<th scope="col">Borrowers Firstname</th>
		<th scope="col">Borrowers Lastname</th>
                {if Core\RoleUtils::inRole("User")}
                <th >Borrow</th>
                {else if Core\RoleUtils::inRole("Admin")}
                <th >Borrow</th>
                <th >Return</th>
                {/if}
                
	</tr>
</thead>
<tbody>
{foreach $books as $p}
{strip}
	<tr>
                
		<td style="padding-bottom: 1%  ">{$p["id_book"]}</td>
		<td>{$p["tytul"]}</td>
		<td>{$p["gatunek"]}</td>
		<td>{$p["aimie"]}</td>
		<td>{$p["anazwisko"]}</td>
		<td>{$p["uimie"]}</td>
		<td>{$p["unazwisko"]}</td>
                {if Core\RoleUtils::inRole("User")}
                <td style="padding: 0px;margin-bottom: 0px">
                    <form id="borrowform" style="padding: 0px;margin-bottom: 0px" action="{$conf->action_root}borrow" >
                        <input id="book_id" type="hidden" name="book_id" value="{$p["id_book"]}" /><br />
                        <input id="book_id" type="hidden" name="borrowed" value="{$p["unazwisko"]}" /><br />
                        {if $p["uimie"]==null}
                        <input style="height:auto;width:auto;padding: 10px;"role="button" type="submit" value="Borrow" />
                        {else}
                        <input style="height:auto;width:auto;padding: 10px;"role="button" type="submit" value="Borrow" disabled/>
                        {/if}
                    </form>
                </td>
                {else if Core\RoleUtils::inRole("Admin")}
                <td style="padding: 0px;margin-bottom: 0px">
                    <form id="borrowform" style="padding: 0px;margin-bottom: 0px" action="{$conf->action_root}borrow" method="post" >
                        <input id="book_id" type="hidden" name="book_id" value="{$p["id_book"]}" /><br />
                        <input style="height:auto;width:auto;padding: 10px;"role="button" type="submit" value="Borrow" />
                    </form>
                </td>
                 <td style="padding:0px;margin-bottom: 0px">
                    <form id="borrowform" style="padding: 0px ;margin-bottom: 0px" action="{$conf->action_root}return" method="post">
                        <input id="book_id" type="hidden" name="book_id" value="{$p["id_book"]}" /><br />
                        <input style="height:auto;width:auto;padding: 10px;" role="button" type="submit" value="Return" />
                    </form>

                </td>
                {/if}
	</tr>
{/strip}
{/foreach}
</tbody>
</table>
</figure>