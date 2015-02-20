<?php

include "conexao.php";

$query = "SELECT * FROM usuario";

$resultado = mysql_query($query);

echo "<form method='post' action='index.php?iftm=720'>";
	echo "<table id='tableListarUsuario'>
	<tr>
	<th></th>
	<th>Código</th>
	<th>Login</th>
	<th>Senha</th>
	<th>Ativo</th>
	<th>Data de Criação</th>
	<th>Data de Modificação</th>
	</tr>";
	
while ($linha  = mysql_fetch_array($resultado)) {
	$codigo = $linha['id'];
	$login = $linha['login'];
	$senha = $linha['senha'];
	$ativo = $linha['ativo'];
	$dataC = $linha['data_criacao'];
	$dataM = $linha['data_modificacao'];
	
	echo "<tr><td><input type='radio' name='alterar' value='$codigo'></td>";
	echo "<td>$codigo</td><td>$login</td><td>$senha</td><td>$ativo</td><td>$dataC</td><td>$dataM</td></tr>";
}
echo  "</table>";

echo "<input type='submit' value='Alterar' /> </form>";
?>