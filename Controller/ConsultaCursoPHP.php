
<?php
include("Config.php");

unset($_SESSION['usercad']);


$FirstQuery = mysqli_query($mysqli,"SELECT AT_Tipo,AT_TipoCursoID FROM TipoCurso");

echo "<div  class='row mx-auto'>";
while($tipo = mysqli_fetch_array($FirstQuery)){
  //Open a list
  $tip = $tipo['AT_TipoCursoID'];
  echo "
  <div class='col'>

      <ul  class='cursos'>".$tipo['AT_Tipo']."
      ";

 $SecondQuery = mysqli_query($mysqli,"SELECT AT_Name,AT_Tipo,AT_CursoID FROM Curso WHERE AT_Tipo = $tip");
 while($item = mysqli_fetch_array($SecondQuery)) {
//Create a item list
echo "
    <li class='item-curso'><a href='InfCursos.php?curso=".$item['AT_CursoID']."'>".$item['AT_Name']."</a></li>
    ";
  }
  //Close a list
  echo "
    </ul>
    </div>
      ";

}

echo "</div>"
 ?>
