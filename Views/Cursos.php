<?php

session_start();
include('Components/Header.php');
if ($_SESSION['nivel'] == 1 || $_SESSION['nivel'] == 2) {
echo"  <a class='btn btn-warning ml-5 mb-5' style='color:white;font-family:calibri;'
 type='button' href='AddCurso.php'>Novo Curso</a>";

 echo"  <a class='btn btn-danger ml-5 mb-5' style='color:white;font-family:calibri;'
  type='button' href='AttCurso.php'>Deletar Curso</a>";

  echo"  <a class='btn btn-info ml-5 mb-5' style='color:white;font-family:calibri;'
   type='button' href='DelCurso.php'>Atualizar Curso</a>";
}
if ($_GET['status'] == 1) {
    echo "<h1 class='pl-5'>Curso cadastrado com sucesso!!</h1>";
}


?>
<?php  ?>
<div  class='row mx-auto'>

<div class="col">


<ul class='cursos'>
  Profissionalizante
  <li><a href="InfCursos.php?.php?id="> Eletricista </a></li>
  <li><a href="InfCursos.php?.php?cursoid=2"> Cabeleleiro </a></li>
  <li><a href="InfCursos.php?cursoid=3"> Eletricista </a></li>
  <li><a href="InfCursos.php?cursoid=4"> Cabeleleiro </a></li>
  <li><a href="InfCursos.php?cursoid=5"> Eletricista </a></li>
  <li><a href="InfCursos.php?cursoid=6"> Cabeleleiro </a></li>

</ul>

</div>

<div class="col">

<ul class='cursos'>
  Arte
  <li><a href="InfCursos.php?cursoid=7"> Violão </a></li>
  <li><a href="InfCursos.php?cursoid=8"> Teclado </a></li>
  <li><a href="InfCursos.php?cursoid=9"> Balé </a></li>
  <li><a href="InfCursos.php?cursoid=7"> Violão </a></li>
  <li><a href="InfCursos.php?cursoid=8"> Teclado </a></li>
  <li><a href="InfCursos.php?cursoid=9"> Balé </a></li>

</ul>

</div>
<div class="col">

<ul class='cursos'>
  ??
  <li><a href="InfCursos.php?cursoid=10"> ?? </a></li>
  <li><a href="InfCursos.php?cursoid=10"> ?? </a></li>
  <li><a href="InfCursos.php?cursoid=10"> ?? </a></li>
  <li><a href="InfCursos.php?cursoid=10"> ?? </a></li>
  <li><a href="InfCursos.php?cursoid=10"> ?? </a></li>
</ul>
</div>


<div class="col">

<ul class='cursos'>
  ??
  <li><a href="InfCursos.php?cursoid=10"> ?? </a></li>
  <li><a href="InfCursos.php?cursoid=10"> ?? </a></li>
  <li><a href="InfCursos.php?cursoid=10"> ?? </a></li>
  <li><a href="InfCursos.php?cursoid=10"> ?? </a></li>
  <li><a href="InfCursos.php?cursoid=10"> ?? </a></li></ul>
</div>

<div class="col">

<ul class='cursos'>
  ??
  <li><a href="InfCursos.php?cursoid=10"> ?? </a></li>
  <li><a href="InfCursos.php?cursoid=10"> ?? </a></li>
  <li><a href="InfCursos.php?cursoid=10"> ?? </a></li>
  <li><a href="InfCursos.php?cursoid=10"> ?? </a></li>
  <li><a href="InfCursos.php?cursoid=10"> ?? </a></li></ul>
</div>

<div class="col">

<ul class='cursos'>
  ??
  <li><a href="InfCursos.php?cursoid=10"> ?? </a></li>
  <li><a href="InfCursos.php?cursoid=10"> ?? </a></li>
  <li><a href="InfCursos.php?cursoid=10"> ?? </a></li>
  <li><a href="InfCursos.php?cursoid=10"> ?? </a></li>
  <li><a href="InfCursos.php?cursoid=10"> ?? </a></li></ul>

</div>
</div>
</div>
</div>



<br><br><br>
<br><br><br>
<br><br><br>

<?php

include('Components/Footer.php');

?>