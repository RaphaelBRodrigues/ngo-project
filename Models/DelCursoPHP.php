<?php
include("../Controller/Config.php");
$cursoID = $_GET['del'];
if (mysqli_query($mysqli,"DELETE FROM Cursos where AT_CursoID = $cursoID")) {
  mysqli_query($mysqli,"DELETE FROM Cursos where AT_CursoID = $cursoID");
  header("Location: ../Views/Cursos.php?status=5");
}else{
  header("Location: ../Views/Cursos.php?status=6");

}


 ?>
