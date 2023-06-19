<?php
/* Smarty version 4.3.0, created on 2023-06-17 13:26:33
  from 'B:\www\Projekt\app\views\templates\filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_648d98696ee936_11236295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b1cf5597deb3148bc3123fc6ad0008cf38ce69b' => 
    array (
      0 => 'B:\\www\\Projekt\\app\\views\\templates\\filter.tpl',
      1 => 1687001169,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648d98696ee936_11236295 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="filter">
    <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
view" method="post">
	<label for="filter1">Authors Last Name: </label>
	<input id="filter1" type="text" name="lastname" value="<?php echo $_smarty_tpl->tpl_vars['flastname']->value;?>
" /><br />
	<label for="filter2">Title: </label>
	<input id="filter2" type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['ftitle']->value;?>
" /><br />
	<input class="pure-button" type="submit" value="Filter" />
</form>	
</div><?php }
}
