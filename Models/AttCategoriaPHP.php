<?php
include("../Controller/Config.php");

$newName = $_POST['newName'];
$code = $_POST['code'];
mysqli_query($mysqli,"UPDATE TipoCurso SET AT_Tipo = ".$newName." WHERE AT_TipoCursoID = ".$code."");
if (mysqli_query($mysqli,"UPDATE TipoCurso SET AT_Tipo = ".$newName." WHERE AT_TipoCursoID = ".$code."")) {
  echo "Categoria atualizada";
}

 ?>
