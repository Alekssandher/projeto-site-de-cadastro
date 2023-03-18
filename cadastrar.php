<?php
session_start();
include("test.php");

$cnpj = mysqli_real_escape_string ($mysqli, trim($_POST['cnpj']));
$empresa = mysqli_real_escape_string ($mysqli, trim($_POST['empresa']));
$email = mysqli_real_escape_string ($mysqli, trim($_POST['email']));
$senha = mysqli_real_escape_string ($mysqli, trim(md5($_POST['senha'])));

$sql = "select count(*) as total from tb_cadastro where nm_empresa = '$empresa'";
$result = $mysqli->query($sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: cadastro.php');
	exit;
}

$sql = "INSERT INTO tb_cadastro (cd_cnpj, nm_empresa, nm_email, nm_senha) VALUES ('$cnpj', '$empresa', '$email', '$senha')";
if($mysqli->query($sql) === true) {
$_SESSION['status_cadastro'] = true;
echo $msg = "Produto cadastrado com sucesso!";
}
mysqli_close($mysqli);
header('Location: cadastro.php');
?>
