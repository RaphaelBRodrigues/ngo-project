<?php
$pdo = new PDO("mysql:host=127.0.0.1;dbname=ONG","root","password");
$pdoo = new PDO("mysql:host=127.0.0.1;dbname=ONG","root","password");
 
echo "<ul><h1>Alunos | Curso</h1>";

foreach($pdo->query("select * from usuario where AT_Userhash = '' order by usuario.AT_CursoID") as $s){
   foreach($pdoo->query("select AT_Name from Curso where AT_CursoID = ".$s['AT_CursoID']."") as $c){
      echo "<li>".$s['AT_Name']."(".$s['AT_UserID'].") | ".$c['AT_Name']." </li><br>";
}
}
echo "</ul>";
?>