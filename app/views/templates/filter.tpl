
<form id="filterform" onsubmit="ajaxPostForm('filterform','{$conf->action_root}reloadTable','tab_books');return false;" method="post" >
        <div class="grid" id="filter">
        <label for="filter2">Title:
	<input id="filter2" type="search" name="title" placeholder="Title" value="{$ftitle}" />
	</label>
        <label for="filter1">Authors Last Name: 
	<input id="filter1" type="search" name="lastname" placeholder="Last Name" value="{$flastname}" />
        </label>

        </div>
        <footer>
            <input role="button" type="submit" value="Filter" />
        </footer>
</form>	
