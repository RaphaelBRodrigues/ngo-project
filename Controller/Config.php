<?php
//LOCAL
session_start();
echo "
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
 <link rel='stylesheet' type='text/css' href='Header.css'>

  <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>

<meta charset='utf-8'>
";

$databaseHost = 'localhost';
$databaseName = 'ONG';
$databaseUsername = 'ONG';
$databasePassword = 'ONG';
$mysqli = mysqli_connect($databaseHost,
$databaseUsername,$databasePassword,$databaseName);


//EPIZY
/*
$databaseHost = 'sql107.epizy.com';
$databaseName = 'epiz_24293573_FreeOng';
$databaseUsername = 'epiz_24293573';
$databasePassword = 'fiLyCPxN0Is95P';
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
