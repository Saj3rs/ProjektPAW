
<!doctype html>
<html lang="pl">

<body class="container">
<link rel="stylesheet" href="css/pico.min.css">
<div id="layout">
    <button class="contrast" id="modButton">
        Login
    </button>

    
    
{include file="./templates/filter.tpl"}

{include file="./templates/data_table.tpl"}



</div>
</div>



<dialog id="loginModal">
  <article>
    <header >
      <button id="modClose" href="#close" aria-label="Close" class="close"></button>
      <h3>Login into your account</h3>
    </header>
    {include file="./templates/login.tpl"}
</article>
</dialog>
<script src="http://localhost:8080/Projekt/public/js/loginModal.js"></script>

</body>
</html>
