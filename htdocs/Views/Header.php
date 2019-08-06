<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 

include('../Controller/Config.php');
 echo "

<nav class='navbar navbar-expand-lg navbar-light' style='background-color:#e3f2fd;'>

  <a class='navbar-brand' href='#'>
    <img src='../Imagens/Logo.png' id='logo' alt='logo'>
  </a>

  <div class='navbar-collapse' id='items'>
    <ul class='navbar-nav'>
  	<li class='nav-item'>
   <a class='nav-link' href='#' id='home'>
  	Home
  </a>
  </li>
  <li class='nav-item dropdown'>
  
  <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Cursos
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Alguma ação</a>
    <a class="dropdown-item" href="#">Outra ação</a>
    <a class="dropdown-item" href="#">Alguma coisa aqui</a>
  </div>
</div>

  </li>
  
 <li class='nav-item'>
  <a class='nav-link' href='#'>
  	Cadastro
  </a>
</li>
<li class='nav-item'>
    <a class='nav-link' href='#'>
  	Quem Somos
  </a>
</li>
<li class='nav-item '>
  <a class='nav-link  ' href='#'>
  	Contatos
  </a>
</li> 


</ul>
<ul class='navbar-nav navbar-right'>
	<li class='nav-link'>
	Login		
	</li>
</ul>

  </div>
 
</nav>
"; ?>

</body>
</html>
