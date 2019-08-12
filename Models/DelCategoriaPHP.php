<?php
include("../Controller/Config.php");
mysqli_query($mysqli,"DELETE FROM TipoCurso where AT_TipoCursoID = $cursoID");

 ?>
