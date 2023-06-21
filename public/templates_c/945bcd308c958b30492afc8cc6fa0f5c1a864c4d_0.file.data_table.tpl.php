<?php
/* Smarty version 4.3.0, created on 2023-06-21 15:25:52
  from 'B:\www\Projekt\app\views\templates\data_table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6492fa60e074d5_34917375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '945bcd308c958b30492afc8cc6fa0f5c1a864c4d' => 
    array (
      0 => 'B:\\www\\Projekt\\app\\views\\templates\\data_table.tpl',
      1 => 1687353951,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6492fa60e074d5_34917375 (Smarty_Internal_Template $_smarty_tpl) {
?><figure>
<table id="tab_calc" role="grid">
<thead>
	<tr >
                
		<th scope="col">id</th>
		<th scope="col">title</th>
		<th scope="col">genre</th>
		<th scope="col">Authors Firstname</th>
		<th scope="col">Authors Lastname</th>
		<th scope="col">Borrowers Firstname</th>
		<th scope="col">Borrowers Lastname</th>
                <th scope="col">Borrow</th>
                
                
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["id_book"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["tytul"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["gatunek"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["aimie"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["anazwisko"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["uimie"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["unazwisko"];?>
</td><td><form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
borrow" method="post"><input id="user_id" type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['loginform']->value->user_id;?>
" /><br /><input id="book_id" type="hidden" name="book_id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value["id_book"];?>
" /><br /><input role="button" type="submit" value="Borrow" /></form></td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>
</figure><?php }
}
