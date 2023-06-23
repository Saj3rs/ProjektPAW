<?php
/* Smarty version 4.3.0, created on 2023-06-23 02:39:48
  from 'B:\www\Projekt\app\views\admin_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6494e9d425d048_66219709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fed289100a331a4886897f0e5fe5ed1b8a3cd22' => 
    array (
      0 => 'B:\\www\\Projekt\\app\\views\\admin_view.tpl',
      1 => 1687480786,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6494e9d425d048_66219709 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4454170366494e9d42564d1_47970891', 'borrow');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13455555986494e9d425c323_01900532', 'borrowrow');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13521078526494e9d425c860_93363832', 'acc');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "./main_view.tpl");
}
/* {block 'borrow'} */
class Block_4454170366494e9d42564d1_47970891 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'borrow' => 
  array (
    0 => 'Block_4454170366494e9d42564d1_47970891',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <td>
                    <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
borrow" method="post">
                        <input id="user_id" type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['loginform']->value->user_id;?>
" /><br />
                        <input id="book_id" type="hidden" name="book_id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value["id_book"];?>
" /><br />
                        <input role="button" type="submit" value="Borrow" />
                    </form>
    </td>
     <td>
                    <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
return" method="post">
                        <input id="book_id" type="hidden" name="book_id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value["id_book"];?>
" /><br />
                        <input role="button" type="submit" value="Return" />
                    </form>
                    
    </td>
<?php
}
}
/* {/block 'borrow'} */
/* {block 'borrowrow'} */
class Block_13455555986494e9d425c323_01900532 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'borrowrow' => 
  array (
    0 => 'Block_13455555986494e9d425c323_01900532',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<th scope="col"></th>
<th scope="col"></th>
<?php
}
}
/* {/block 'borrowrow'} */
/* {block 'acc'} */
class Block_13521078526494e9d425c860_93363832 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acc' => 
  array (
    0 => 'Block_13521078526494e9d425c860_93363832',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
dologout" method="post">
	<input role="button" type="submit" value="Log out" />
    </form>
<?php
}
}
/* {/block 'acc'} */
}
