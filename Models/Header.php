
<?php

include('../Controller/Config.php');
 echo "

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <nav class='navbar navbar-expand-lg navbar-light' id='cab' style='background-color:#e3f2fd;'>

   <a class='navbar-brand' href='#'>
     <img src='../Imagens/Logo.png' id='logo' alt='logo'>
   </a>

   <div class='navbar-collapse' id='items'>
     <ul class='navbar-nav'>
   	<li class='nav-item'>
    <a class='nav-link' href='Index.php' id='home'>
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
   <div id='items'>

  <ul class='navbar-nav navbar-right'>
 	<li class='nav-link'>
     <a class= 'nav-link' href='Login.php'>
".$_SESSION['Nome']."
     </a>
 	</li>
 </ul>
 </div>
 </nav>



"; ?>

</body>
</html>
