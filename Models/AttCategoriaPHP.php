<?php
include("../Controller/Config.php");
session_start();
$newName = $_POST['newName'];
$code = $_POST['code'];

if (mysqli_query($mysqli,"UPDATE TipoCurso SET AT_Tipo = '".$newName."' WHERE AT_TipoCursoID = $code ")) {
  echo "Categoria atualizada";

  mysqli_query($mysqli,"UPDATE TipoCurso SET AT_Tipo = '".$newName."' WHERE AT_TipoCursoID = $code");
  header("Location: ../Views/Cursos.php?status=3");
}else{
  header("Location: ../Views/Cursos.php?status=4");

}

 ?>
