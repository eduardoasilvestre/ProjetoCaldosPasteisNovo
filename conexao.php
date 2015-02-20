<?php

$host = "127.0.0.1";	//servidor sendo utilizado
$user = "root";		//nome de usuario
$password = "";		//senha do banco de dados
$banco = "caldos_pasteis";
//faz a conexao com o banco de dados
$link =  mysql_connect($host, $user, $password)
	or die ("<p class='msgErro'>Não foi possível conectar.</p>");

mysql_select_db($banco)
	or die ("<p class='msgErro'>Não foi conectar ao banco de dados selecionado.</p>");
?>