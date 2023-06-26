<?php
/* Smarty version 4.3.0, created on 2023-06-26 21:02:51
  from 'B:\www\Projekt\app\views\admin_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6499e0db1c3343_62477483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fed289100a331a4886897f0e5fe5ed1b8a3cd22' => 
    array (
      0 => 'B:\\www\\Projekt\\app\\views\\admin_view.tpl',
      1 => 1687777418,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./templates/useradd.tpl' => 1,
  ),
),false)) {
function content_6499e0db1c3343_62477483 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1355489166499e0db1ba133_78302151', 'borrow');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20952441836499e0db1bfde5_83796904', 'borrowrow');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11198730606499e0db1c0320_90429740', 'acc');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "./main_view.tpl");
}
/* {block 'borrow'} */
class Block_1355489166499e0db1ba133_78302151 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'borrow' => 
  array (
    0 => 'Block_1355489166499e0db1ba133_78302151',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <td style="padding: 0px;margin-bottom: 0px">
                    <form style="padding: 0px;margin-bottom: 0px" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
borrow" method="post">
                        <input id="book_id" type="hidden" name="book_id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value["id_book"];?>
" /><br />
                        <input style="height:auto;width:auto;padding: 10px;"role="button" type="submit" value="Borrow" />
                    </form>
    </td>
     <td style="padding:0px;margin-bottom: 0px">
                    <form style="padding: 0px ;margin-bottom: 0px" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
return" method="post">
                        <input id="book_id" type="hidden" name="book_id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value["id_book"];?>
" /><br />
                        <input style="height:auto;width:auto;padding: 10px;" role="button" type="submit" value="Return" />
                    </form>
                    
    </td>
<?php
}
}
/* {/block 'borrow'} */
/* {block 'borrowrow'} */
class Block_20952441836499e0db1bfde5_83796904 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'borrowrow' => 
  array (
    0 => 'Block_20952441836499e0db1bfde5_83796904',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<th >Borrow</th>
<th >Return</th>
<?php
}
}
/* {/block 'borrowrow'} */
/* {block 'acc'} */
class Block_11198730606499e0db1c0320_90429740 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acc' => 
  array (
    0 => 'Block_11198730606499e0db1c0320_90429740',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div style="width: 30% ; display: flex;float: left" >
        <form  style=" width: 100% ; display: block; float:none"  action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
dologout" method="post">
            <input   class="contrast" type="submit" value="Log out" />
        </form>
         
            
    </div>
            
            <dialog style="width: 75%" id="modal">
            <article>
              <header >
                <button id="modClose" href="#close" aria-label="Close" class="close"></button>
                <h3>Add a new user</h3>
              </header>
              <?php $_smarty_tpl->_subTemplateRender("file:./templates/useradd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </article>
        </dialog>
        <button  role="button" class="secondary" id="modButton">Register a new User</button>

<?php
}
}
/* {/block 'acc'} */
}
