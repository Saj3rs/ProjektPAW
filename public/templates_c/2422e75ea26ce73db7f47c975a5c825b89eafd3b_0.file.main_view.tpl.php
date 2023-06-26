<?php
/* Smarty version 4.3.0, created on 2023-06-26 21:27:21
  from 'B:\www\Projekt\app\views\main_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6499e699711a66_35575958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2422e75ea26ce73db7f47c975a5c825b89eafd3b' => 
    array (
      0 => 'B:\\www\\Projekt\\app\\views\\main_view.tpl',
      1 => 1687807627,
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
function content_6499e699711a66_35575958 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
<head>
  
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Biblioteka Publiczna</title>
        <link rel="stylesheet" href="css/pico.min.css">
</head>
<body >
<div id="layout" class="container">
    <header >
        <div style="width: 70% ; display: flex ;float: left" >
            <h3>Biblioteka miejska</h3>
        </div>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1043134686499e69970a584_23325567', 'acc');
?>

    </header>
<main style="clear:both">
    
<?php $_smarty_tpl->_subTemplateRender("file:./templates/filter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:./templates/data_table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </main>



</div>
<?php echo '<script'; ?>
 src="http://localhost:8080/Projekt/public/js/loginModal.js"><?php echo '</script'; ?>
>

</body>
</html>
<?php }
/* {block 'acc'} */
class Block_1043134686499e69970a584_23325567 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acc' => 
  array (
    0 => 'Block_1043134686499e69970a584_23325567',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div style="width: 30% ; display: flex;float: left" >
            <button role="button" class="contrast" id="modButton">Log in</button>
        </div>
        
        <dialog id="modal">
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
