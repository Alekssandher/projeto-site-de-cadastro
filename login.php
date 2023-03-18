<?php
session_start();
include('test.php');

if(empty($_POST['cnpj']) || empty($_POST['empresa']) || empty($_POST['email'])
|| empty($_POST['senha'])) {
	header('Location: acesso.php');
	exit();
}

$cnpj = mysqli_real_escape_string($mysqli, $_POST['cnpj']);
$empresa = mysqli_real_escape_string($mysqli, $_POST['empresa']);
$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$senha = mysqli_real_escape_string($mysqli, $_POST['senha']);

$query= "select cd_empresa, nm_empresa from tb_cadastro where nm_empresa = '{$empresa}' and nm_senha = md5('{$senha}')";

$result = $mysqli->query($query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['empresa'] = $empresa;
	header('Location: Formulario.4.php'); 
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: acesso.php');
	exit();
}

?>