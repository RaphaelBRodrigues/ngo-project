<?php

include('Components/Header.php');

?>

<?php

if (empty($_SESSION['cursoRes'])){

$_SESSION['cursoRes'] = "";}
 ?>


<form class="mx-auto" id='loginForm' action="../Models/AddCategoriaPHP.php?f=1" method="post">
  <h2>Nova categoria de cursos</h2>
  <!-- <h3><?php echo $_SESSION['cursoRes']; ?></h3> -->
  <div class='form-group'>
    <label for='curso'>Nome da categoria</label>
    <input type="text" autofocus id='curso' name='name' class='form-control' title='Insira o nome da categoria' placeholder="Ex:Arte" value="">
  </div>


<button type="submit" id='enviar' class="btn btn-primary">Entrar</button><br><br>

</form>

<?php

include('Components/Footer.php');

?>
<style media="screen">
body{
	background-color: #70ddf1;

	margin: 0 auto;
}
  footer{
margin-top: 1em;
  }
</style>
