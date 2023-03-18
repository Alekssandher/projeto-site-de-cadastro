<?php
$host = "localhost";
$db = "db_site";
$usuario = "root";
$senha = "mano2310";

$mysqli = new mysqli($host, $db, $usuario, $senha);
if($mysqli->connect_errno) {
	echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
}
?>