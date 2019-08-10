<?php 

$log = $_GET['logout'];


if (empty($log)) {
		$log = 0;

}
if ($log == 1) {
	session_start();
	session_destroy();
	header('Location: ../Index.php');

	$log = 0;

}

 ?>
