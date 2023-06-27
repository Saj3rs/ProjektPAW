<?php
/* Smarty version 4.3.0, created on 2023-06-27 13:21:35
  from 'B:\www\Projekt\app\views\templates\filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_649ac63fb37244_74462012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b1cf5597deb3148bc3123fc6ad0008cf38ce69b' => 
    array (
      0 => 'B:\\www\\Projekt\\app\\views\\templates\\filter.tpl',
      1 => 1687864856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649ac63fb37244_74462012 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form id="filterform" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('filterform','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reloadTable','tab_books');return false;" method="post" >
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
