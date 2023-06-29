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
        {block name=acc}
        <div style="width: 30% ; display: flex;float: left" >
            <button role="button" class="contrast" id="modButton">Log in</button>
        </div>
        
        <dialog id="modal">
            <article style="width: 50%">
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
{if $msgs->isMessage("formerror")}
  <article>
      <head ><h3><kbd>ERROR:</kbd></h3></head>
      <footer>
        
      <h5>{$msgs->getMessage("formerror")->text}</h5>
          
      </footer>
  </article>
{/if}
    
{include file="./templates/filter.tpl"}
</div>
<div id="results">
    {include file="./templates/data_table.tpl"}
    
</div>
</main>

</div>
<script src="http://localhost:8080/Projekt/public/js/loginModal.js"></script>
<script src="http://localhost:8080/Projekt/public/js/functions.js"></script>

</body>
</html>
