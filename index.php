
 <!DOCTYPE html>
 <html>
 <head>
	 <link rel="stylesheet" href="Views/Header.css">
	 <?php
include_once('Controller/Config.php');
	  ?>
 	<title></title>
 </head>
 <body>

 <nav class='navbar navbar-expand-lg navbar-dark' id='cab' style='background-color:#0091ea;'>

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
     <a class='nav-link' href='Views/Cursos.php'>

   Cursos
 </a>
 </li>


  <li class='nav-item'>
   <a class='nav-link' href='Views/adastro.php'>
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


 </ul>




   </div>
   <div id='items'>

  <ul class='navbar-nav navbar-right'>
 	<li class='nav-link'>
     <a class= 'nav-link' href='Login.php'>
<?php echo $_SESSION['Nome']; ?>
     </a>
 	</li>
 </ul>
 </div>
 </nav>






<style media="screen">
body{
	background-color: #70ddf1;
;
	margin: 0 auto;
}
</style>

















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
