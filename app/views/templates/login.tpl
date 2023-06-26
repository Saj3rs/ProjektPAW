
<form  action="{$conf->action_root}dologin" method="post">
	<label for="Login">Login: </label>
	<input id="Login" type="text" name="login" value="{$login}" /><br />
	<label for="Password">Password: </label>
	<input id="Password" type="text" name="password"  /><br />
	<input role="button" type="submit" value="Log in" />
    </form>