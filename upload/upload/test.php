<?php
$host = "localhost";
$usuario = "root";
$senha = "mano2310";
$banco = "bd_site";

$mysqli = new mysqli($host, $usuario, $senha, $banco);
if ($mysqli->connect_errno) {
	 echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;}
?>
