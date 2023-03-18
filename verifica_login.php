<?php
session_start();
if(!$_SESSION['empresa']) {
	header( 'Location: acesso.php');
	exit();
}