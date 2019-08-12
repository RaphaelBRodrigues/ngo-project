<?php
include("Config.php");
$cursoID = $_GET['del'];
mysqli_query($mysqli,"DELETE FROM TipoCurso where AT_TipoCursoID = $cursoID");
//header("Location : javascript:history.go(-1)");

 ?>
