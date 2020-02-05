<?php
include('../Controller/logoutPHP.php');
if(!isset($_SESSION)) {
    session_start();
  }
//LOCAL

echo "
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
 <link rel='stylesheet' type='text/css' href='Header.css'>
 <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>

 <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>

 <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>

 <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>

 <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>

  <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>

<meta charset='utf-8'>
";

$databaseHost = 'localhost';
$databaseName = 'ONG';
$databaseUsername = 'ONG';
$databasePassword = 'ONG';
$mysqli = mysqli_connect($databaseHost,
$databaseUsername,$databasePassword,$databaseName);


/*
$databaseHost = 'sql107.epizy.com';
$databaseName = 'epiz_24293573_FreeOng';
$databaseUsername = 'epiz_24293573';
$databasePassword = 'ongfree';
$mysqli = mysqli_connect($databaseHost,
$databaseUsername,$databasePassword,$databaseName);
*/



?>
<!--
Freeong.epizy.com
HOST:ftpupload.net
USERNAME:epiz_24293573
PASSWORD:ongfr


 -->
