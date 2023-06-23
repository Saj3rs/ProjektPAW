
<!doctype html>
<html lang="pl">

<body class="container">
<link rel="stylesheet" href="css/pico.min.css">
<div id="layout">
    <header >
        <div style="width: 70% ; display: flex ;float: left" >
            <h3>Biblioteka miejska</h3>
        </div>
        {block name=acc}
        <div style="width: 30% ; display: flex;float: left" >
            <button role="button" class="contrast" id="modButton">Log in</button>
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
        {/block}
    </header>
<main style="clear:both">
    
{include file="./templates/filter.tpl"}

{include file="./templates/data_table.tpl"}
    </main>


</div>
</div>




<script src="http://localhost:8080/Projekt/public/js/loginModal.js"></script>

</body>
</html>
