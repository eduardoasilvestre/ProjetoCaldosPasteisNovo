<?php
$login = $_POST['login'];
$senha = $_POST['senha'];

include "conexao.php";
$query = "SELECT * FROM usuario WHERE login = '$login' and senha = '$senha'";

// echo $query . "<br />";
$resultado = mysql_query($query);

if (mysql_num_rows($resultado) != 1) {
	header("location: opLogin.php");
}
$loginUsuario = null;
$idUsuario = null;

while ($linha  = mysql_fetch_array($resultado)) {
	$loginUsuario = $linha['login'];
	$idUsuario  = $linha['id'];
}

/* echo "Imprimindo os códigos:<br />";
echo "Login Usuário: " . $loginUsuario . "<br />";
echo "Id Usuário: " . $idUsuario . "<br />";
 */

session_start();
$_SESSION['loginUsuario'] = $loginUsuario;
$_SESSION['idUsuario'] = $idUsuario;

/* echo "<br />";
echo "<br />";
echo "Imprimindo as sessions:<br />";
echo "Login:" . $_SESSION['loginUsuario'] . "<br />";
echo "Session:" . $_SESSION['idUsuario'] . "<br />";
 */
header("location: index.php");

?>