{extends file="./main_view.tpl"}

{block name=borrow}
    <td>
                    <form class="marginless"  action="{$conf->action_root}borrow" method="post">
                        <input id="book_id" type="hidden" name="book_id" value="{$p["id_book"]}" /><br />
                        <input role="button" type="submit" value="Borrow" />
                    </form>
    </td>
{/block}

{block name=borrowrow}
<th scope="col">Borrow</th>
{/block}

{block name=acc}
    
        <div class="marginless" style="width: 30% ; display: flex;float: left" >
            <form  style="width: 100% ; display: block; float:none"  action="{$conf->action_root}dologout" method="post">
                <input   class="contrast" type="submit" value="Log out" />
            </form>
        </div>
{/block}
