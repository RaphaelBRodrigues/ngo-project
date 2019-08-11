<?php

include('Components/Header.php');

?>

<?php

include('../Controller/ConsultaTipoPHP.php');
if (empty($_SESSION['cursoRes'])){

$_SESSION['cursoRes'] = "";}
 ?>


<form class="mx-auto" id='loginForm' action="../Models/CursoAddPHP.php?f=1" method="post">
  <h2>Novo curso</h2>
  <h3><?php echo $_SESSION['cursoRes']; ?></h3>
  <div class='form-group'>
    <label for='curso'>Nome do curso</label>
    <input type="text" id='curso' name='name' class='form-control' title='Insira o nome do curso' placeholder="Ex:Violão" value="">
  </div>

  <div class='form-group'>
    <label for="Categoria">Categoria</label>
    <input type="text" id='Categoria' name='cat' class='form-control' placeholder="Ex:1" title='Insira o código da categoria' value="">
  </div>
<button type="submit" id='enviar' class="btn btn-primary">Entrar</button><br><br>

</form>

<?php

include('Components/Footer.php');

?>
