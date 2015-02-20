<?php

$resultado = isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['ativo']) && !empty($_POST['senha']) && isset($_POST['senha']);

if (!$resultado) {
	//adicionar mensagem de erro aqui
	header("location: index.php?iftm=70");
	return;
}
	
include "conexao.php";

$login = $_POST['login'];
$senha = $_POST['senha'];
$ativo = $_POST['ativo'];
$data_criacao =  date ("Y-m-d H:i:s");
$data_modificacao =  date ("Y-m-d H:i:s");

$query = "INSERT INTO usuario(login,senha,ativo,data_criacao,data_modificacao) 
	VALUES ('$login','$senha','$ativo','$data_criacao','$data_modificacao')";

$resultado = mysql_query($query)
	or die ("<p>Falha na execução da consulta.</p>");

header("location: index.php?iftm=71");


?>