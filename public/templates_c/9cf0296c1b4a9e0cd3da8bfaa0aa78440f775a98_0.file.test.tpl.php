<?php
/* Smarty version 4.3.0, created on 2023-06-19 01:20:27
  from 'B:\www\Projekt\app\views\test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_648f913b25c1c7_66754610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cf0296c1b4a9e0cd3da8bfaa0aa78440f775a98' => 
    array (
      0 => 'B:\\www\\Projekt\\app\\views\\test.tpl',
      1 => 1687130426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./templates/filter.tpl' => 1,
    'file:./templates/data_table.tpl' => 1,
  ),
),false)) {
function content_648f913b25c1c7_66754610 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="pl">


<div style="background-image:url('/Projekt/public/css/bgd.jpg')">
<div id="layout">

    <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
dologin" method="post">
	<label for="Login">Login: </label>
	<input id="Login" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
" /><br />
	<label for="Password">Password: </label>
	<input id="Password" type="text" name="password"  /><br />
	<input class="pure-button" type="submit" value="Log in" />
</form>	
    
<?php $_smarty_tpl->_subTemplateRender("file:./templates/filter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./templates/data_table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
</div>

</body>
</html>




<?php }
}
