
<!doctype html>
<html lang="pl">


<div style="background-image:url('/Projekt/public/css/bgd.jpg')">
<div id="layout">

    <form class="pure-form pure-form-stacked" action="{$conf->action_root}dologin" method="post">
	<label for="Login">Login: </label>
	<input id="Login" type="text" name="login" value="{$login}" /><br />
	<label for="Password">Password: </label>
	<input id="Password" type="text" name="password"  /><br />
	<input class="pure-button" type="submit" value="Log in" />
</form>	
    
{include file="./templates/filter.tpl"}

{include file="./templates/data_table.tpl"}

</div>
</div>

</body>
</html>




