<?php
include("../Controller/Config.php");
$cur = $_POST['name'];
$cat = $_POST['cat'];

if (mysqli_query($mysqli,"INSERT INTO Curso(AT_NAME,AT_TIPO)
VALUES('$cur','$cat')")) {

  mysqli_query($mysqli,"INSERT INTO Curso(AT_NAME,AT_TIPO)
  VALUES('$cur',$cat)");

$_SESSION['cursoRes'] = "Curso cadastrado com sucesso";
echo $_SESSION['cursoRes'];
if ($_GET['f'] == 1) {
header("Location: ../Views/Cursos.php?status=1");
}

}

else{
  $_SESSION['cursoRes'] = "Falha ao cadastrar produto";
echo $_SESSION['cursoRes'];
  header("Location: javascript:history.go(-1)");

}
 ?>
