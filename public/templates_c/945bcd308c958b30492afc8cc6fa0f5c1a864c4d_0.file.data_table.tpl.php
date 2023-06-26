<?php
/* Smarty version 4.3.0, created on 2023-06-26 21:02:51
  from 'B:\www\Projekt\app\views\templates\data_table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6499e0db1fba94_18804677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '945bcd308c958b30492afc8cc6fa0f5c1a864c4d' => 
    array (
      0 => 'B:\\www\\Projekt\\app\\views\\templates\\data_table.tpl',
      1 => 1687773520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6499e0db1fba94_18804677 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<figure>
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
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12212330776499e0db1f2cb5_67974582', 'borrowrow');
?>

                
                
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
</td><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19877528886499e0db1fa616_45468586', "borrow");
?>
</tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>
</figure><?php }
/* {block 'borrowrow'} */
class Block_12212330776499e0db1f2cb5_67974582 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'borrowrow' => 
  array (
    0 => 'Block_12212330776499e0db1f2cb5_67974582',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'borrowrow'} */
/* {block "borrow"} */
class Block_19877528886499e0db1fa616_45468586 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'borrow' => 
  array (
    0 => 'Block_19877528886499e0db1fa616_45468586',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "borrow"} */
}
