 <!DOCTYPE html>
 <html>
 <head>
	 <link rel="stylesheet" href="Views/Header.css">



<?php
// header("Location: Views/Login.php");
@include('Controller/Config.php');
@include('Controller/logoutPHP.php');

if(empty($_SESSION['nivel'])){
  $_SESSION['nivel'] = "0";
}
if(isset($_SESSION['nivel']) && $_SESSION['nivel'] != 0 ){
  $nivel = "(".$_SESSION['nivel'].")";
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

   <a class='navbar-brand' href='Index.php'>
     <img src='Imagens/Logo.png' id='logo' class='mr-2'  alt='logo'> FreeONG
   </a>
   <input type='checkbox' class='d-none'  id='nav-check'>
<label class='material-icons d-lg-none text-dark' id='nav-icon' for='nav-check'>menu</label>
   <div class='navbar-collapse' id='items'>
     <ul class='navbar-nav'>
    <li class='nav-item'>
    <a class='nav-link' href='Views/Views/Index.php' id='home'>
    Home
   </a>
   </li>
   <li class='nav-item dropdown'>
     <a class='nav-link' href='Views/Cursos.php'>

   Cursos
 </a>
 </li>


  <li class='nav-item'>
   <a class='nav-link' href='Views/Cadastro.php'>
    Cadastro
   </a>
 </li>
 <li class='nav-item'>
     <a class='nav-link' href='Views/Somos.php'>
    Quem Somos
   </a>
 </li>
 <li class='nav-item '>
   <a class='nav-link  ' href='Views/Contatos.php'>
    Contatos
   </a>
 </li>

 <li class='nav-item'>
   <a class='nav-link' href='Views/Alunos.php'>

   ".$AlunosCab."

   </a>
 </li>



 </ul>




</div>

   <div class='navbar-collapse s' id='items'>

  <ul class='navbar-nav navbar-right'>
  <li class='nav-link mt-3' >
     <a class= 'nav-link' href='Views/Login.php'>
".$_SESSION['Nome']." ".$nivel." 
     </a>
  </li>
  

 <li class='nav-item mt-4'>
   <a class='nav-link' >

   ".@$logout."

   </a>
 </li>
 </ul>
 </div>

 </nav>



"; 

?>



<?php 
@include('Views/Components/Footer.php');


 ?>