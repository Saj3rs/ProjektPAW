<?php
/* Smarty version 4.3.0, created on 2023-06-27 13:27:41
  from 'B:\www\Projekt\app\views\templates\data_table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_649ac7ad013935_02260734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '945bcd308c958b30492afc8cc6fa0f5c1a864c4d' => 
    array (
      0 => 'B:\\www\\Projekt\\app\\views\\templates\\data_table.tpl',
      1 => 1687865258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649ac7ad013935_02260734 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<figure id="tab_books">
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
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2146526916649ac7ad000642_16497612', 'borrowrow');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2053423345649ac7ad012f40_05228724', "borrow");
?>
</tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>
</figure><?php }
/* {block 'borrowrow'} */
class Block_2146526916649ac7ad000642_16497612 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'borrowrow' => 
  array (
    0 => 'Block_2146526916649ac7ad000642_16497612',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'borrowrow'} */
/* {block "borrow"} */
class Block_2053423345649ac7ad012f40_05228724 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'borrow' => 
  array (
    0 => 'Block_2053423345649ac7ad012f40_05228724',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "borrow"} */
}
