{extends file="./main_view.tpl"}

{block name=borrow}
    <td>
                    <form class="pure-form pure-form-stacked" action="{$conf->action_root}borrow" method="post">
                        <input id="user_id" type="hidden" name="user_id" value="{$loginform->user_id}" /><br />
                        <input id="book_id" type="hidden" name="book_id" value="{$p["id_book"]}" /><br />
                        <input role="button" type="submit" value="Borrow" />
                    </form>
    </td>
     <td>
                    <form class="pure-form pure-form-stacked" action="{$conf->action_root}return" method="post">
                        <input id="book_id" type="hidden" name="book_id" value="{$p["id_book"]}" /><br />
                        <input role="button" type="submit" value="Return" />
                    </form>
                    
    </td>
{/block}

{block name=borrowrow}
<th scope="col"></th>
<th scope="col"></th>
{/block}

{block name=acc}
    <form class="pure-form pure-form-stacked" action="{$conf->action_root}dologout" method="post">
	<input role="button" type="submit" value="Log out" />
    </form>
{/block}