<?php
session_start();
$_SESSION['loginUsuario'] = FALSE;
$_SESSION['idUsuario'] = FALSE;

session_destroy();
header("location: opLogin.php");
?>