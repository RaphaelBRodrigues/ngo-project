<?php

session_start();
include('Components/Header.php');
include("../Controller/Config.php");

if ($_SESSION['nivel'] == 1 || $_SESSION['nivel'] == 2) {
echo"<div class='mx-auto'>
<a class='btn btn-warning ml-5 mb-5' style='color:white;font-family:calibri;'
 type='button' href='AddCurso.php'>Novo Curso</a>";

 echo"  <a class='btn btn-danger ml-5 mb-5' style='color:white;font-family:calibri;'
  type='button' href='DelCurso.php'>Deletar Curso</a>";

  echo"  <a class='btn btn-info ml-5 mb-5' style='color:white;font-family:calibri;'
   type='button' href='DelCurso.php'>Atualizar Curso</a>";

   echo"<br>  <a class='btn btn-warning ml-5 mb-5' style='color:white;font-family:calibri;'
    type='button' href='AddCategoria.php'>Adicionar Categoria</a>";

    echo"  <a class='btn btn-danger ml-4 mb-5' style='color:white;font-family:calibri;'
     type='button' href='DelCategoria.php'>Deletar Categoria</a>";

     echo"  <a class='btn btn-info ml-4 mb-5' style='color:white;font-family:calibri;'
      type='button' href='AttCategoria.php'>Atualizar Categoria</a> </div>";

}
if (empty($_GET['status'])) {
  $_GET['status'] = " ";
}
if ($_GET['status'] == 1) {
    echo "<h1 class='pl-5 text-success'>Curso cadastrado com sucesso!!</h1>";
}
if ($_GET['status'] == 2) {
    echo "<h1 class='pl-5 text-danger'>Falha ao cadastrar curso</h1>";
}
if ($_GET['status'] == 3) {
    echo "<h1 class='pl-5 text-success'>Categoria atualizada com sucesso</h1>";
}
if ($_GET['status'] == 4) {
    echo "<h1 class='pl-5 text-danger'>Falha ao atualizar categoria</h1>";
}
if ($_GET['status'] == 5) {
    echo "<h1 class='pl-5 text-danger'>Categoria deletada</h1>";
}
if ($_GET['status'] == 6) {
    echo "<h1 class='pl-5 text-danger'>Falha ao deletar categoria</h1>";
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
