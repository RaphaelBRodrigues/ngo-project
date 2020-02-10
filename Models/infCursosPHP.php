<?php
session_start();
$pdo = new PDO("mysql:host=127.0.0.1;dbname=ONG","root","password");
$curso = $_GET['curso'];
$prepare = $pdo->prepare("update usuario set AT_CursoID = ? where AT_UserID = ?");
$prepare->bindParam(1,$_GET['cur']);
$prepare->bindParam(2,$_GET['id']);
$prepare->execute();



if($prepare->rowCount() == 1){
    $_SESSION['usercad'] = "Usuário cadastrado no curso";
echo "<script>window.history.back();</script>";
    
}else{
    $_SESSION['usercad'] = "Falha ao cadastra usuário no curso";

    echo "<script>window.history.back();</script>";

}

?>