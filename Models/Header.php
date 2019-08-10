

<?php
include('../Controller/Config.php');


if(isset($_SESSION['nivel']) && $_SESSION['nivel'] != 0 ){
  $nivel = "(".$_SESSION['nivel'].")";
  $logout = "<form action='../Controller/logoutPHP.php' method='get'>
<button id='logout' name='logout'  value='1' class='material-icons'>exit_to_app</button>
</form>
";
}
if(empty($_SESSION['nivel'])){
  $_SESSION['nivel'] = "0";
}

if ($_SESSION['nivel'] == 1 || $_SESSION['nivel'] == 2) {
  $AlunosCab = "Alunos";
}else{
  $AlunosCab = "";
}

if(empty($_SESSION['Nome'])){
  $_SESSION['Nome'] = "Login";
}


 echo "

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <nav class='navbar navbar-expand-lg navbar-dark' id='cab' style='background-color:#0091ea;'>

   <a class='navbar-brand' href='../Index.php'>
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

 <li class='nav-item'>
   <a class='nav-link' href='Alunos.php'>

   ".$AlunosCab."

   </a>
 </li>



 </ul>




   </div>


   <div id='items'>

  <ul class='navbar-nav navbar-right'>
 	<li class='nav-link mt-3' >
     <a class= 'nav-link' href='Login.php'>
".$_SESSION['Nome']." ".$nivel." 
     </a>
 	</li>
  

 <li class='nav-item mt-4'>
   <a class='nav-link' >

   ".$logout."

   </a>
 </li>
 </ul>
 </div>
 </nav>



"; ?>


  
</li>
</body>
</html>
