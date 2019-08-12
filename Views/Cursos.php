<?php

session_start();
include('Components/Header.php');
include("../Controller/Config.php");

if ($_SESSION['nivel'] == 1 || $_SESSION['nivel'] == 2) {
echo"  <a class='btn btn-warning ml-5 mb-5' style='color:white;font-family:calibri;'
 type='button' href='AddCurso.php'>Novo Curso</a>";

 echo"  <a class='btn btn-danger ml-5 mb-5' style='color:white;font-family:calibri;'
  type='button' href='AttCurso.php'>Deletar Curso</a>";

  echo"  <a class='btn btn-info ml-5 mb-5' style='color:white;font-family:calibri;'
   type='button' href='DelCurso.php'>Atualizar Curso</a>";
}
if ($_GET['status'] == 1) {
    echo "<h1 class='pl-5 text-success'>Curso cadastrado com sucesso!!</h1>";
}
if ($_GET['status'] == 2) {
    echo "<h1 class='pl-5 text-danger'>Falha ao cadastrar produto</h1>";
}


?>
<?php
include_once("../Controller/ConsultaCursoPHP.php"); ?>


<br><br><br>
<br><br><br>
<br><br><br>

<?php

include('Components/Footer.php');

?>
