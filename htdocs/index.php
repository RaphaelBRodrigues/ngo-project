<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	 <link rel='stylesheet' type='text/css' href='/Views/Header.css'>

	<title>ONG</title>
</head>
<body>
<?php 
include_once('/Controller/Config.php');
include_once('/Views/Header.php');/*Cabeçalho*/
 ?>

<nav class='navbar navbar-expand-lg navbar-light' style='background-color:#e3f2fd;'>

  <a class='navbar-brand' href='#'>
    <img src='../Imagens/Logo.png' id='logo' alt='logo'>
  </a>

  <div class='navbar-collapse' id='items'>
    <ul class='navbar-nav'>
  	<li class='nav-item'>
   <a class='nav-link' href='../Index.php' id='home'>
  	Home
  </a>
  </li>
  <li class='nav-item dropdown'>
    <a class='nav-link' href='Cursos.php'>

  Cursos
</a>  
</li>


 <li class='nav-item'>
  <a class='nav-link' href='Cadastro.php'>
  	Cadastro
  </a>
</li>
<li class='nav-item'>
    <a class='nav-link' href='Somos.php'>
  	Quem Somos
  </a>
</li>
<li class='nav-item '>
  <a class='nav-link  ' href='Contatos.php'>
  	Contatos
  </a>
</li> 


</ul>



  
  </div>
 <ul class='navbar-nav navbar-right'>
	<li class='nav-link'>
    <a class= 'nav-link' href='Login.php'>
	Login		
    </a>
	</li>
</ul>
</nav>







<?php 
/*Rodapé*/
include_once('Views/Footer.php');
 ?>
</body>
</html>