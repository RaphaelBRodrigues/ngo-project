<?php

session_start();
include('Components/Header.php');
$curso = $_GET['curso'];
include('../Controller/infCursosPHP.php');


?>


<form class="mx-auto" id='loginForm' action="../Models/infCursosPHP.php?f=2" method="get">
  <h2>Adicionar aluno</h2>
<h3><?php echo $_SESSION['usercad']; ?></h3> 
  <div class='form-group'>
    <label for='curso'>ID do aluno</label>
    <input type="text" id='curso' name='id' class='form-control' title='Insira o nome do curso' placeholder="Ex:3598" value="">
  </div>

 
<button type="submit" name='cur' value='<?php echo $curso; ?>' id='enviar' class="btn btn-primary">Entrar</button><br><br>

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
