<?php
/* Smarty version 4.3.0, created on 2023-06-21 18:04:46
  from 'B:\www\Projekt\app\views\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64931f9e6ef1f9_94535470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb4aafaf8107896c03571f1579d6d15184639dda' => 
    array (
      0 => 'B:\\www\\Projekt\\app\\views\\templates\\login.tpl',
      1 => 1687363455,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64931f9e6ef1f9_94535470 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
dologin" method="post">
	<label for="Login">Login: </label>
	<input id="Login" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
" /><br />
	<label for="Password">Password: </label>
	<input id="Password" type="text" name="password"  /><br />
	<input role="button" type="submit" value="Log in" />
    </form><?php }
}
