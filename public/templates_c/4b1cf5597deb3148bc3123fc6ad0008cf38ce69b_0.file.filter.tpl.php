<?php
/* Smarty version 4.3.0, created on 2023-06-26 21:02:51
  from 'B:\www\Projekt\app\views\templates\filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6499e0db1e6f62_30323353',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b1cf5597deb3148bc3123fc6ad0008cf38ce69b' => 
    array (
      0 => 'B:\\www\\Projekt\\app\\views\\templates\\filter.tpl',
      1 => 1687469932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6499e0db1e6f62_30323353 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
view" method="post">
        <div class="grid" id="filter">
        <label for="filter1">Authors Last Name: 
	<input id="filter1" type="search" name="lastname" placeholder="Last Name" value="<?php echo $_smarty_tpl->tpl_vars['flastname']->value;?>
" />
        </label>
        <label for="filter2">Title:
	<input id="filter2" type="search" name="title" placeholder="Title" value="<?php echo $_smarty_tpl->tpl_vars['ftitle']->value;?>
" />
	</label>
        </div>
        <footer>
            <input role="button" type="submit" value="Filter" />
        </footer>
</form>	
<?php }
}
