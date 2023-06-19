
<div id="filter">
    <form class="pure-form pure-form-stacked" action="{$conf->action_root}view" method="post">
	<label for="filter1">Authors Last Name: </label>
	<input id="filter1" type="text" name="lastname" value="{$flastname}" /><br />
	<label for="filter2">Title: </label>
	<input id="filter2" type="text" name="title" value="{$ftitle}" /><br />
	<input class="pure-button" type="submit" value="Filter" />
</form>	
</div>