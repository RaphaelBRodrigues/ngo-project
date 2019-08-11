<?php
include_once('Config.php');
echo " <table class='
table table-bordered table-info col-5 mx-auto'>
  <thead>
<tr>
  <th scope='col'>Código do categoria</th>
  <th scope='col'>Categoria do curso</th>
</tr>
</thead>

<tbody>
"
;

$query = mysqli_query($mysqli,"SELECT * FROM TipoCurso");
 while($print = mysqli_fetch_array($query)) {
echo"

<tr>
  <th scope='row'>".$print['AT_TipoCursoID']."</th>
  <td>".$print['AT_Tipo']."</td>
</tr>

";}
echo "
</tbody>
</table>
";
 ?>
