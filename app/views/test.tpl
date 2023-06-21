
<!doctype html>
<html lang="pl">

<body class="container">
<link rel="stylesheet" href="css/pico.min.css">
<div id="layout">

    <form class="pure-form pure-form-stacked" action="{$conf->action_root}dologin" method="post">
	<label for="Login">Login: </label>
	<input id="Login" type="text" name="login" value="{$login}" /><br />
	<label for="Password">Password: </label>
	<input id="Password" type="text" name="password"  /><br />
	<input role="button" type="submit" value="Log in" />
</form>	
    


</div>
</div>

</body>
</html>




