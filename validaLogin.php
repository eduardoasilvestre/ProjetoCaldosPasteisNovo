<?php
session_start();

$loginUsuario = $_SESSION['loginUsuario'];
$idUsuario = $_SESSION['idUsuario'];

if ($loginUsuario == false || $idUsuario == false) {
	header("location: opLogin.php");
}
?>