<?php
include("../Controller/Config.php");
$cat = $_POST['name'];

if (mysqli_query($mysqli,"INSERT INTO TipoCurso(AT_Tipo)
VALUES('$cat')")) {
  mysqli_query($mysqli,"INSERT INTO TipoCurso(AT_Tipo)
  VALUES('$cat')");

$_SESSION['cursoRes'] = "Nova categoria de cursos criada";
echo $_SESSION['cursoRes'];
if ($_GET['f'] == 1) {
header("Location: ../Views/Cursos.php?status=1");
  }
}


else{
  $_SESSION['cursoRes'] = "Falha ao criar categoria";
echo $_SESSION['cursoRes'];
header("Location: ../Views/Cursos.php?status=2");

}
 ?>
