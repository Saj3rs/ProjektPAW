{extends file="./main_view.tpl"}

{block name=borrow}
    <td style="padding: 0px;margin-bottom: 0px">
                    <form style="padding: 0px;margin-bottom: 0px" action="{$conf->action_root}borrow" method="post">
                        <input id="book_id" type="hidden" name="book_id" value="{$p["id_book"]}" /><br />
                        <input style="height:auto;width:auto;padding: 10px;"role="button" type="submit" value="Borrow" />
                    </form>
    </td>
     <td style="padding:0px;margin-bottom: 0px">
                    <form style="padding: 0px ;margin-bottom: 0px" action="{$conf->action_root}return" method="post">
                        <input id="book_id" type="hidden" name="book_id" value="{$p["id_book"]}" /><br />
                        <input style="height:auto;width:auto;padding: 10px;" role="button" type="submit" value="Return" />
                    </form>
                    
    </td>
{/block}

{block name=borrowrow}
<th >Borrow</th>
<th >Return</th>
{/block}

{block name=acc}
    <div style="width: 30% ; display: flex;float: left" >
        <form  style=" width: 100% ; display: block; float:none"  action="{$conf->action_root}dologout" method="post">
            <input   class="contrast" type="submit" value="Log out" />
        </form>
         
            
    </div>
            
            <dialog  id="modal">
            <article style="width: 75%">
              <header >
                <button id="modClose" href="#close" aria-label="Close" class="close"></button>
                <h3>Add a new user</h3>
              </header>
              {include file="./templates/useradd.tpl"}
            </article>
        </dialog>
        <button  role="button" class="secondary" id="modButton">Register a new User</button>

{/block}

