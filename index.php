 <!DOCTYPE html>
 <html>
 <head>
	 <link rel="stylesheet" href="Views/Header.css">



<?php
include('Controller/Config.php');
include('Controller/logoutPHP.php');

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

 <li class='nav-item '>
   <a class='nav-link' href='Views/Alunos.php'>

   ".$AlunosCab."

   </a>
 </li>



 </ul>




   </div>
   <div id='items'>

  <ul class='navbar-nav navbar-right'>
  <li class='nav-link'>
     <a class= 'nav-link' href='Login.php'>
".$_SESSION['Nome']." ".$nivel."
     </a>
  </li>
 </ul>
 </div>
 </nav>



"; ?>

</body>
</html>






 <br>
 <br>
 <footer class='page-footer'>

   <div class='container-fluid pt-5 pl-5 '>
     <div class='row'>

       <div class='col'>
         <h5 class='text-uppercase'>ONG Reviver</h5>
         <p>A mais de 17 anos com você!</p>
       </div>

       <div class='col'>

         <!-- Links -->
         <h5 class='text-uppercase'>Links</h5>

         <ul class='list-unstyled '>
           <li>
             <a class='inf' href='https://web.facebook.com/revivercapao/'>Facebook</a><br>
           </li>
           <li>
             <a href='https://web.facebook.com/revivercapao/' class='inf'>(11) 5874-3147</a>
           </li>

         </ul>

       </div>

     </div>

   </div>

   <div class='footer-copyright text-center py-3'>
     Desenvolvido por <a href='https://github.com/RaphaelBRodrigues/'>.Corps</a>
   </div>

 </footer>
 </body>
 </html>
*/
