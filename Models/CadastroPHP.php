<?php
include('Config.php');
/*EMPTY http_post_data*/



$user = $_POST['user'];
$username = $_POST['username'];
$password = $_POST['password'];
$cep = $_POST['cep'];
$bairro = $_POST['bairro'];
$rua = $_POST['rua'];
$casa = $_POST['casa'];
$tel = $_POST['tel'];
$tell = $_POST['tell'];
$passkey = $_POST['passkey'];
$cpf = $_POST['cpf'];



$query = mysqli_query($mysqli,"SELECT AT_Cpf from usuario");
$test =
		mysqli_query($mysqli,"INSERT INTO `usuario` ( `AT_Name`, `AT_Username`, `AT_Password`, `AT_Cep`, `AT_Cpf`, `AT_House`, `AT_Userhash`, `AT_Bairro`, `AT_Street`, `AT_PhoneOne`, `AT_PhoneTwo`)
		VALUES ( '$user', '$username', '$password', '$cep', '$cpf', '$casa', '$passkey', '$bairro', '$rua', '$tel', '$tell')");
while ($print = mysqli_fetch_array($query)) {

#user verification
	if ($print['AT_Cpf'] == $cpf) {
$alert = 'Usuário já cadastrado';
#creating a new user
}else if($test) {


		mysqli_query($mysqli,"INSERT INTO `usuario` ( `AT_Name`, `AT_Username`, `AT_Password`, `AT_Cep`, `AT_Cpf`, `AT_House`, `AT_Userhash`, `AT_Bairro`, `AT_Street`, `AT_PhoneOne`, `AT_PhoneTwo`)
		VALUES ( '$user', '$username', '$password', '$cep', '$cpf', '$casa', '$passkey', '$bairro', '$rua', '$tel', '$tell')");
		$alert = 'Usuário cadastrado com sucesso';

	}else if(!$test){
				$alert = 'Falha ao cadastrar usuário';

	}
}




 ?>


 
