<?php

include "conexao.php";

$query = "SELECT * FROM usuario";

$resultado = mysql_query($query);

	echo "<table id='tableListarUsuario'>
	<tr>
	<th>C�digo</th>
	<th>Login</th>
	<th>Senha</th>
	<th>Ativo</th>
	<th>Data de Cria��o</th>
	<th>Data de Modifica��o</th>
	</tr>";
	
while ($linha  = mysql_fetch_array($resultado)) {
	$codigo = $linha['id'];
	$login = $linha['login'];
	$senha = $linha['senha'];
	$ativo = $linha['ativo'];
	
	$dataC = $linha['data_criacao'];
	$dataM = $linha['data_modificacao'];
	
	echo "<tr><td>$codigo</td><td>$login</td><td>$senha</td><td>$ativo</td><td>$dataC</td><td>$dataM</td></tr>";
}
echo  "</table>";
?>