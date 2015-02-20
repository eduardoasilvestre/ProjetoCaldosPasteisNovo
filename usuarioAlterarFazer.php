<?php


$resultado = isset($_POST['login']) && !empty($_POST['login']) && !empty($_POST['senha']) && isset($_POST['senha']);

if (!$resultado) {
	//adicionar mensagem de erro aqui
	header("location:index.php?iftm=70");
	return;
}
	
include "conexao.php";

$id = $_POST['id'];

$login = $_POST['login'];
$senha = $_POST['senha'];
$ativo = $_POST['ativo'];
$data_modificacao =  date ("Y-m-d H:i:s");

$query = "UPDATE usuario SET login = '$login', senha = '$senha', ativo = '$ativo', data_modificacao = '$data_modificacao' WHERE id = '$id'";

//echo $query;
$resultado = mysql_query($query)
	or die ("<p>Falha na execução da consulta.</p>");

header("location:index.php?iftm=71");
//echo "<p>Sucesso</p>";

?>