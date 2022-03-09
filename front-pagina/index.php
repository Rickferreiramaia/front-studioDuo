<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style2.css" />
    <title>Studio Duo</title>


    
</head>
<menu class="menu">
<div> <!-- Código que representa o header -->
    <header> <div id="shape_cab"> 
    <button  id="botao1"><img id="imgIcone" src="./icones/editar.png" /> SEJA UM FRANQUEADO</button>
    <button id="botao2"><img id="imgIcone" src="./icones/seja_consultor.png"/>SEJA UM CONSULTOR(A)</button>
</div>
    <button id="botao3">QUERO COMPRAR</button>
    <button id="botao4"><img id="imgIcone" src="./icones/area_restrita.png"/>  ÁREA RESTRITA</button>
    
             
        
        
    <h2 id="tituloDuvidas">Dúvidas</h2>     
    <h4 id="textoDuvidas"><b id="textoDuvidasFrequentes">Listamos aqui algumas dúvidas frequentes.<b>
    </br><b id="textoCasoDuvidas">
        Caso a sua dúvida não esteja aqui você pode</b> <br/>
    <b id="textoCasoDuvidas">entrar em contato conosco</b> <a href="" id="textoDuvidasClick">clicando aqui</a>
    </h4>
        
       
    </header>
<body style="background-color: #f1f1f1;">
    <!--EXTRAINDO JSON-->
		<?php
			$json = file_get_contents("./duvidas.json");
			$duvidas = json_decode($json);
		?>

<!--LISTA DE DUVIDAS-->
<ul class="acordeao">
    <li class="acordeao-item acordeao-item_isActive">
      <h1 id="duvidas"  class="acordeao-item-titulo"  ><?php echo ("{$duvidas->lista_tarefas[0]->titulo}");?><img id="imgSeta" src="./icones/seta.png"/> </h1>
      <p class="acordeao-item-conteudo"><?php echo ("{$duvidas->lista_tarefas[0]->descricao}");?></p>
    </li>
    <li class="acordeao-item">
      <h1 class="acordeao-item-titulo"><?php  echo ("{$duvidas->lista_tarefas[1]->titulo}");?><img id="imgSeta" src="./icones/seta.png"/> </h1>
      <p class="acordeao-item-conteudo"><?php echo ("{$duvidas->lista_tarefas[1]->descricao}");?></p>
    </li>
    <li class="acordeao-item">
      <h1 class="acordeao-item-titulo"><?php echo ("{$duvidas->lista_tarefas[2]->titulo}");?><img id="imgSeta" src="./icones/seta.png"/> </h1>
      <p class="acordeao-item-conteudo"><?php echo ("{$duvidas->lista_tarefas[2]->descricao}");?></p>
    <li class="acordeao-item">
      <h1 class="acordeao-item-titulo"><?php echo ("{$duvidas->lista_tarefas[3]->titulo}");?><img id="imgSeta" src="./icones/seta.png"/> </h1>
      <p class="acordeao-item-conteudo"><?php echo ("{$duvidas->lista_tarefas[3]->descricao}");?></p>
    <li class="acordeao-item">
      <h1 class="acordeao-item-titulo"><?php echo ("{$duvidas->lista_tarefas[4]->titulo}");?><img id="imgSeta" src="./icones/seta.png"/> </h1>
      <p class="acordeao-item-conteudo"><?php echo ("{$duvidas->lista_tarefas[4]->descricao}");?></p>
    <li class="acordeao-item">
      <h1 class="acordeao-item-titulo"><?php echo ("{$duvidas->lista_tarefas[5]->titulo}");?><img id="imgSeta"  src="./icones/seta.png"/> </h1>
      <p class="acordeao-item-conteudo"><?php echo ("{$duvidas->lista_tarefas[5]->descricao}");?></p>
    <li class="acordeao-item">
      <h1 class="acordeao-item-titulo"><?php echo ("{$duvidas->lista_tarefas[6]->titulo}");?><img id="imgSeta" src="./icones/seta.png"/> </h1>
      <p class="acordeao-item-conteudo"><?php echo ("{$duvidas->lista_tarefas[6]->descricao}");?></p>
    <li class="acordeao-item">
      <h1 class="acordeao-item-titulo"><?php echo ("{$duvidas->lista_tarefas[7]->titulo}");?><img id="imgSeta" src="./icones/seta.png"/> </h1>
      <p class="acordeao-item-conteudo"><?php echo ("{$duvidas->lista_tarefas[7]->descricao}");?></p>
    <li class="acordeao-item">
      <h1 class="acordeao-item-titulo"><?php echo ("{$duvidas->lista_tarefas[8]->titulo}");?><img id="imgSeta" src="./icones/seta.png"/> </h1>
      <p class="acordeao-item-conteudo"><?php echo ("{$duvidas->lista_tarefas[8]->descricao}");?></p>
    <li class="acordeao-item">
      <h1 class="acordeao-item-titulo"><?php echo ("{$duvidas->lista_tarefas[9]->titulo}");?><img id="imgSeta" src="./icones/seta.png"/> </h1>
      <p class="acordeao-item-conteudo"><?php echo ("{$duvidas->lista_tarefas[9]->descricao}");?></p>
   
    </li>
</ul>




</body>
<!--footer da pagina-->
<footer id="footer">
 
</footer>

<!--Função javascript accordion -->
<script> 
(function () {
  'use strict'

  var $acordeao = document.querySelector('.acordeao')

  $acordeao.addEventListener('click', function(event) {
    var $this = this
    var $origin = event.target

    if($origin.classList.contains('acordeao-item-titulo')) {
      $origin.activeItemClass = "active";
      document.querySelector('.acordeao-item_isActive').classList.remove('acordeao-item_isActive')
      $origin.parentNode.classList.add('acordeao-item_isActive')
    }
  })
})()	



</script>
<style>




</style>
</html>