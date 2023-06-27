
<form id="filterform" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('filterform','{$conf->action_root}reloadTable','tab_books');return false;" method="post" >
        <div class="grid" id="filter">
        <label for="filter1">Authors Last Name: 
	<input id="filter1" type="search" name="lastname" placeholder="Last Name" value="{$flastname}" />
        </label>
        <label for="filter2">Title:
	<input id="filter2" type="search" name="title" placeholder="Title" value="{$ftitle}" />
	</label>
        </div>
        <footer>
            <input role="button" type="submit" value="Filter" />
        </footer>
</form>	
