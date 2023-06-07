<?php
/* Smarty version 4.3.0, created on 2023-06-07 21:57:09
  from 'B:\www\Projekt\app\views\test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6480e115f0a0f5_73795153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cf0296c1b4a9e0cd3da8bfaa0aa78440f775a98' => 
    array (
      0 => 'B:\\www\\Projekt\\app\\views\\test.tpl',
      1 => 1686167829,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./templates/data_table.tpl' => 1,
  ),
),false)) {
function content_6480e115f0a0f5_73795153 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="pl">


<div style="background-image:url('/Projekt/public/css/bgd.jpg')">
<div id="layout">


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


<?php $_smarty_tpl->_subTemplateRender("file:./templates/data_table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
</div>

</body>
</html>




<?php }
}
