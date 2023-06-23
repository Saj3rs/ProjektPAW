<?php
/* Smarty version 4.3.0, created on 2023-06-23 02:35:30
  from 'B:\www\Projekt\app\views\main_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6494e8d2158136_85669927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2422e75ea26ce73db7f47c975a5c825b89eafd3b' => 
    array (
      0 => 'B:\\www\\Projekt\\app\\views\\main_view.tpl',
      1 => 1687479049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./templates/login.tpl' => 1,
    'file:./templates/filter.tpl' => 1,
    'file:./templates/data_table.tpl' => 1,
  ),
),false)) {
function content_6494e8d2158136_85669927 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">

<body class="container">
<link rel="stylesheet" href="css/pico.min.css">
<div id="layout">
    <header >
        <div style="width: 70% ; display: flex ;float: left" >
            <h3>Biblioteka miejska</h3>
        </div>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12852602366494e8d21545f9_37126625', 'acc');
?>

    </header>
<main style="clear:both">
    
<?php $_smarty_tpl->_subTemplateRender("file:./templates/filter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./templates/data_table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </main>


</div>
</div>
<?php echo '<script'; ?>
 src="http://localhost:8080/Projekt/public/js/loginModal.js"><?php echo '</script'; ?>
>

</body>
</html>
<?php }
/* {block 'acc'} */
class Block_12852602366494e8d21545f9_37126625 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acc' => 
  array (
    0 => 'Block_12852602366494e8d21545f9_37126625',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div style="width: 30% ; display: flex;float: left" >
            <button role="button" class="contrast" id="modButton">Log in</button>
        </div>
        
        <dialog id="loginModal">
            <article>
              <header >
                <button id="modClose" href="#close" aria-label="Close" class="close"></button>
                <h3>Login into your account</h3>
              </header>
              <?php $_smarty_tpl->_subTemplateRender("file:./templates/login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </article>
        </dialog>
        <?php
}
}
/* {/block 'acc'} */
}
