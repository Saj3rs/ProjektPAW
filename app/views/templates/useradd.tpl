<form class="pure-form pure-form-stacked" action="{$conf->action_root}adduser" method="post">
	<label for="Login">Login: </label>
	<input id="Login" type="text" name="login" /><br />
	<label for="Password">Password: </label>
	<input id="Password" type="text" name="password"  /><br />
        <label for="Name">First name: </label>
	<input id="Name" type="text" name="name"/><br />
	<label for="Lname">Last name: </label>
	<input id="Lname" type="text" name="lname"  /><br />
	<input role="button" type="submit" value="Register" />
    </form>