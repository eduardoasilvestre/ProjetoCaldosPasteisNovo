<?php
include "conexao.php";

$elementoASerExcluido =  $_POST['excluir'];

$query = "DELETE FROM usuario where id = '$elementoASerExcluido'"; 

$resultado = mysql_query($query) or  
	die("<p>Houve problemas na exclus�o do usu�rio.</p>");

echo "<p>Usu�rio selecionado foi exclu�do definitivamente.</p>";
?>