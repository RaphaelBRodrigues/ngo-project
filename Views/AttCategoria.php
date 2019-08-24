<?php

include('Components/Header.php');
include('../Controller/ConsultaTipoPHP.php');

?>

<?php

if (empty($_SESSION['cursoRes'])){

$_SESSION['cursoRes'] = "";}
 ?>


<form class="mx-auto" id='loginForm' action="../Models/AttCategoriaPHP.php?f=1" method="post">
  <h2>Nova categoria de cursos</h2>
  <!-- <h3><?php echo $_SESSION['cursoRes']; ?></h3> -->
  <div class='form-group'>
    <label for='curso'>Novo nome da categoria</label>
    <input type="text" autofocus id='curso' name='newName' class='form-control' title='Insira o novo nome da categoria' placeholder="Ex:Arte" value="">

    <label for='curso'>Código da categoria</label>
    <input type="text" autofocus id='curso' name='code' class='form-control' title='Insira o código da categoria' placeholder="Ex:1" value="">

  </div>


<button type="submit" id='enviar' class="btn btn-primary">Entrar</button><br><br>

</form>

<?php

include('Components/Footer.php');

?>
