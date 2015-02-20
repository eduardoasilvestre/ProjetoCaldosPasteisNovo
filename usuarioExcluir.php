<?php
include "conexao.php";

$elementoASerExcluido =  $_POST['excluir'];

$query = "DELETE FROM usuario where id = '$elementoASerExcluido'"; 

$resultado = mysql_query($query) or  
	die("<p>Houve problemas na exclusão do usuário.</p>");

echo "<p>Usuário selecionado foi excluído definitivamente.</p>";
?>