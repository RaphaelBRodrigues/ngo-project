<?php
include_once('Config.php');
/*$query = mysqli_query($mysqli,"SELECT * FROM usuarios");


    while ($print = mysqli_fetch_array($mysqli,$query)) {
  echo $print['AT_Name'];

}*/


$query = mysqli_query($mysqli,"SELECT * from Produto where CategoriaID = $tipo");
          echo "<br>";
          while ($print = mysqli_fetch_array($query)) {
echo $print;
          }
 ?>
