<?php
/* Smarty version 4.3.0, created on 2023-06-27 16:53:41
  from 'B:\www\Projekt\app\views\logged_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_649af7f52960a6_69424458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '639f30a0ffbe360200bbb7caa34a55e7234b12ec' => 
    array (
      0 => 'B:\\www\\Projekt\\app\\views\\logged_view.tpl',
      1 => 1687772304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649af7f52960a6_69424458 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1237099389649af7f528f7a3_87893495', 'borrow');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1740484438649af7f52952a8_46266122', 'borrowrow');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1280104106649af7f5295806_20558447', 'acc');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "./main_view.tpl");
}
/* {block 'borrow'} */
class Block_1237099389649af7f528f7a3_87893495 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'borrow' => 
  array (
    0 => 'Block_1237099389649af7f528f7a3_87893495',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <td>
                    <form class="marginless"  action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
borrow" method="post">
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
class Block_1740484438649af7f52952a8_46266122 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'borrowrow' => 
  array (
    0 => 'Block_1740484438649af7f52952a8_46266122',
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
class Block_1280104106649af7f5295806_20558447 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acc' => 
  array (
    0 => 'Block_1280104106649af7f5295806_20558447',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
        <div class="marginless" style="width: 30% ; display: flex;float: left" >
            <form  style="width: 100% ; display: block; float:none"  action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
dologout" method="post">
                <input   class="contrast" type="submit" value="Log out" />
            </form>
        </div>
<?php
}
}
/* {/block 'acc'} */
}
