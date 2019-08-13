<?php

session_start();
include('Components/Header.php');
include('../Controller/Config.php');



?>
<div class="text-center text-danger">
<h1>Deletar categoria</h1>
<h5 class="text-warning">Não é possível excluir categorias com cursos cadastrados!</h2>
</div>
<?php
$FirstQuery = mysqli_query($mysqli,'SELECT AT_Tipo,AT_TipoCursoID FROM TipoCurso');

while($tipo = mysqli_fetch_array($FirstQuery)){
  //Open a list


echo "
<ul>
  <form action='../Models/DelCategoriaPHP.php' method='get'>
  <li>
  <button class='btn btn-danger' value='".$tipo['AT_TipoCursoID']."' name='del'>X</button>

  ".$tipo['AT_Tipo']."

    </li>
</form>


</ul>

";
}




?>
<br><br><br>
<br><br><br>
<br><br><br>

</form>

<?php

include('Components/Footer.php');

?>
