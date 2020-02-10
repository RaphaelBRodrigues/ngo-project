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
 <nav class='navbar  navbar-expand-lg navbar-dark' id='cab' style='background-color:#0091ea;'>

   <a class='navbar-brand ' href='Index.php'>
     <img src='Imagens/Logo.png' id='logo' class='mr-2 ml-5'  alt='logo'> FreeONG
   </a>
<button data-toggle='collapse' data-dismiss='collapse' data-target='#items' class='btn material-icons d-lg-none text-light' id='nav-icon' for='nav-check'>menu</button>
   <div class='navbar-collapse collapse ' id='items'>
     <ul class='navbar-nav ml-4'>
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

   <div class='navbar-collapse collapse ' id='items'>

  <ul class='navbar-nav navbar-right ml-4 '>
  <li class='nav-link mt-3' >
     <a class= 'nav-link' href='Views/Login.php'>
".$_SESSION['Nome']." ".$nivel." 
     </a>
  </li>
  

 <li class='nav-item mt-4 '>
   <a class='nav-link ' >

   ".@$logout."

   </a>
 </li>
 </ul>
 </div>

 </nav>



"; 

?>

<div class='bloco-main'>
<center>
<div class='conteudo-main'>

<div class='container texto-main'>
<h1>FreeONG</h1>
<H2>Em desenvolvimento</H2>

<div class='row mt-5'>
<a href="#info"><button class='btn btn-info mr-4'>Saiba mais</button></a>
<a href="Views/Cadastro.php"><button class='btn btn-success  ml-4'>Se inscreva</button></a>
</div>
</div>
</div>
</center>
</div>

<div class='container-fluid mt-5'>
<center>

<div class='row'>
<div class="container bloco-texto col-4" id='info'><h1>Title</h1>  "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?" <br><br><button class='btn btn-info'>Acessar</button></div>
<div class="container bloco-texto col-4" id='info'><h1>Title</h1> "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?" <br><br><button class='btn btn-info'>Acessar</button></div>
</div>
</center>

</div>

<?php 
@include('Views/Components/Footer.php');


 ?>
 <style>
 body{
  background-color: #70ddf1;

margin: 0 auto;
 }
 .bloco-main{
  margin-top:-5em;
  height:34em;
  background-repeat:no-repeat;
  background-size:100%;
background-image:url('https://redenoticiaes.com/wp-content/uploads/2018/07/IMG-20180719-WA0046.jpg');
   width:100%;
 }
 .conteudo-main{
   background-color:rgba(0,0,0,0.7);
   height:34em;
   color:white;
   text-shadow:1px 1px 12px black;
 }
 
 .bloco-texto{
   background-color:rgba(232,172,111,0.3);
   padding:20px 20px 20px 20px;
   color:rgba(0,0,0,0.7);
   box-shadow:0 0 40px black;
 }
 .texto-main{
   padding-top:6.3em;
 }
 .texto-main .row .btn{
   box-shadow:0 0 10px black;
font-size:1.8em;
font-weight:700;
 }
 .texto-main .row{
   display:block;
   margin-left:auto;
   margin-right:auto;
 }
<<<<<<< HEAD
 @media screen and (max-width:989px) {
  
  .conteudo-main{
  height:27em;
  } 
}


 
 </style>
=======
 </style>
>>>>>>> 8beb8f35f4ae5e4838ed6572700eed1381fd973e
