<?php
/* Smarty version 4.3.0, created on 2023-06-21 18:06:35
  from 'B:\www\Projekt\app\views\test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6493200b3fecc5_03226894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cf0296c1b4a9e0cd3da8bfaa0aa78440f775a98' => 
    array (
      0 => 'B:\\www\\Projekt\\app\\views\\test.tpl',
      1 => 1687363594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./templates/filter.tpl' => 1,
    'file:./templates/data_table.tpl' => 1,
    'file:./templates/login.tpl' => 1,
  ),
),false)) {
function content_6493200b3fecc5_03226894 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="pl">

<body class="container">
<link rel="stylesheet" href="css/pico.min.css">
<div id="layout">
    <button class="contrast" id="modButton">
        Login
    </button>

    
    
<?php $_smarty_tpl->_subTemplateRender("file:./templates/filter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./templates/data_table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



</div>
</div>



<dialog id="loginModal">
  <article>
    <header >
      <button id="modClose" href="#close" aria-label="Close" class="close"></button>
      <h3>Login to your account</h3>
    </header>
    <?php $_smarty_tpl->_subTemplateRender("file:./templates/login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</article>
</dialog>
<?php echo '<script'; ?>
 src="http://localhost:8080/Projekt/public/js/loginModal.js"><?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
