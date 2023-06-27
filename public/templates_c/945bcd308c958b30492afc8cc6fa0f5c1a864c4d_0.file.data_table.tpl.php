<?php
/* Smarty version 4.3.0, created on 2023-06-27 17:18:58
  from 'B:\www\Projekt\app\views\templates\data_table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_649afde2b919f5_68612749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '945bcd308c958b30492afc8cc6fa0f5c1a864c4d' => 
    array (
      0 => 'B:\\www\\Projekt\\app\\views\\templates\\data_table.tpl',
      1 => 1687879135,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649afde2b919f5_68612749 (Smarty_Internal_Template $_smarty_tpl) {
?><figure id="tab_books">
<table  role="grid">
<thead>
	<tr >
                
		<th scope="col">id</th>
		<th scope="col">title</th>
		<th scope="col">genre</th>
		<th scope="col">Authors Firstname</th>
		<th scope="col">Authors Lastname</th>
		<th scope="col">Borrowers Firstname</th>
		<th scope="col">Borrowers Lastname</th>
                <?php if (Core\RoleUtils::inRole("User")) {?>
                <th >Borrow</th>
                <?php } elseif (Core\RoleUtils::inRole("Admin")) {?>
                <th >Borrow</th>
                <th >Return</th>
                <?php }?>
                
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
<tr><td style="padding-bottom: 1%  "><?php echo $_smarty_tpl->tpl_vars['p']->value["id_book"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["tytul"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["gatunek"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["aimie"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["anazwisko"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["uimie"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["unazwisko"];?>
</td><?php if (Core\RoleUtils::inRole("User")) {?><td style="padding: 0px;margin-bottom: 0px"><form id="borrowform" style="padding: 0px;margin-bottom: 0px" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
borrow" ><input id="book_id" type="hidden" name="book_id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value["id_book"];?>
" /><br /><input id="book_id" type="hidden" name="borrowed" value="<?php echo $_smarty_tpl->tpl_vars['p']->value["unazwisko"];?>
" /><br /><?php if ($_smarty_tpl->tpl_vars['p']->value["uimie"] == null) {?><input style="height:auto;width:auto;padding: 10px;"role="button" type="submit" value="Borrow" /><?php } else { ?><input style="height:auto;width:auto;padding: 10px;"role="button" type="submit" value="Borrow" disabled/><?php }?></form></td><?php } elseif (Core\RoleUtils::inRole("Admin")) {?><td style="padding: 0px;margin-bottom: 0px"><form id="borrowform" style="padding: 0px;margin-bottom: 0px" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
borrow" method="post" ><input id="book_id" type="hidden" name="book_id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value["id_book"];?>
" /><br /><input style="height:auto;width:auto;padding: 10px;"role="button" type="submit" value="Borrow" /></form></td><td style="padding:0px;margin-bottom: 0px"><form id="borrowform" style="padding: 0px ;margin-bottom: 0px" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
return" method="post"><input id="book_id" type="hidden" name="book_id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value["id_book"];?>
" /><br /><input style="height:auto;width:auto;padding: 10px;" role="button" type="submit" value="Return" /></form></td><?php }?></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>
</figure><?php }
}
