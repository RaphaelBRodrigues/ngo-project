<?php
include("../Controller/Config.php");
$cursoID = $_GET['del'];
if (mysqli_query($mysqli,"DELETE FROM TipoCurso where AT_TipoCursoID = $cursoID")) {
  mysqli_query($mysqli,"DELETE FROM TipoCurso where AT_TipoCursoID = $cursoID");
  header("Location: ../Views/Cursos.php?status=5");
}else{
  header("Location: ../Views/Cursos.php?status=6");

}


 ?>
