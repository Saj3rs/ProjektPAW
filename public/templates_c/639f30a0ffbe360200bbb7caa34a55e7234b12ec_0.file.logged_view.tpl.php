<?php
/* Smarty version 4.3.0, created on 2023-06-23 02:43:56
  from 'B:\www\Projekt\app\views\logged_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6494eacca65d31_12763626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '639f30a0ffbe360200bbb7caa34a55e7234b12ec' => 
    array (
      0 => 'B:\\www\\Projekt\\app\\views\\logged_view.tpl',
      1 => 1687479264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6494eacca65d31_12763626 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13877931626494eacca5cda0_57301938', 'borrow');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10066180586494eacca64ec0_03800510', 'borrowrow');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14745191616494eacca65454_09910352', 'acc');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "./main_view.tpl");
}
/* {block 'borrow'} */
class Block_13877931626494eacca5cda0_57301938 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'borrow' => 
  array (
    0 => 'Block_13877931626494eacca5cda0_57301938',
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
<?php
}
}
/* {/block 'borrow'} */
/* {block 'borrowrow'} */
class Block_10066180586494eacca64ec0_03800510 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'borrowrow' => 
  array (
    0 => 'Block_10066180586494eacca64ec0_03800510',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<th scope="col">Borrow</th>
<?php
}
}
/* {/block 'borrowrow'} */
/* {block 'acc'} */
class Block_14745191616494eacca65454_09910352 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acc' => 
  array (
    0 => 'Block_14745191616494eacca65454_09910352',
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
