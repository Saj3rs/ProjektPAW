<?php
/* Smarty version 4.3.0, created on 2023-06-27 13:22:27
  from 'B:\www\Projekt\app\views\templates\useradd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_649ac67384cbe3_59382777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '721987d047e624630a3a503a617ce53d96fe815b' => 
    array (
      0 => 'B:\\www\\Projekt\\app\\views\\templates\\useradd.tpl',
      1 => 1687803401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649ac67384cbe3_59382777 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
adduser" method="post">
	<label for="Login">Login: </label>
	<input id="Login" type="text" name="login" /><br />
	<label for="Password">Password: </label>
	<input id="Password" type="text" name="password"  /><br />
        <label for="Name">First name: </label>
	<input id="Name" type="text" name="name"/><br />
	<label for="Lname">Last name: </label>
	<input id="Lname" type="text" name="lname"  /><br />
	<input role="button" type="submit" value="Register" />
    </form><?php }
}
