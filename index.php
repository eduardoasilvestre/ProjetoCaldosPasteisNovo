<?php include "validaLogin.php"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script src="js/scripts.js" type="text/javascript"></script>
    <script src="js/jquery-1.6.1.min.js" type="text/javascript"></script>
    <title>IFTM - Segunda Noite de Caldos e Primeira Noite de Pastéis</title>
</head>

<body>
<div id="container">
		<div id="header">
             <img src="img/logoptc250x85.jpg" width="960px" height="85px" />
        </div>   
        
        <div id="menu">
        	<ul>
            	<li class="menuitem"><a href="index.php?iftm=1">Home</a></li>
                <li class="menuitem"><a href="index.php?iftm=2">IFTM Patrocínio</a></li>
                <li class="menuitem"><a href="index.php?iftm=3">IFTM - Processo Seletivo 2011-2</a></li>
                <li class="menuitem"><a href="index.php?iftm=4">Festival de arte e cultura do: quem canta um conto</a></li>
				<li class="menuitem"><a href="index.php?iftm=5">Contato</a></li>
            </ul>
        </div>
        <?php 
        $loginUsuario = $_SESSION['loginUsuario'];
        $idUsuario = $_SESSION['idUsuario'];
        
        if ($loginUsuario != false && $idUsuario != false) {
        	echo "<p id='usuarioLogado'> Olá <span style='text-decoration:underline'> $loginUsuario" . "</span>, seja bem vindo !!!</div>";        	        
        }        
        ?>
        
        <div id="leftmenu">

        <div id="leftmenu_top"></div>

				<div id="leftmenu_main">    
                
                <h3>Sobre o Evento</h3>
                        
                <ul>
					<li><a href="index.php?iftm=6">PEDIDO</a></li>
                    <li><a href="index.php?iftm=70">Cadastro Usuário</a></li>
                    <li><a href="index.php?iftm=71">Listar Usuário</a></li>
                    <li><a href="index.php?iftm=72">Editar Usuário</a></li>
                    <li><a href="index.php?iftm=73">Excluir Usuário</a></li>
                    <li><a href="index.php?iftm=8">Informações Nutricionais</a></li>
                    <li><a href="index.php?iftm=9">Receitas dos Produtos</a></li>
                    <li><a href="index.php?iftm=10">Pesquisa Satisfação</a></li>
                    <li><a onclick="abreFotoParticipantes();" href="#">Fotos dos Participantes</a></li>
                    <li><a onclick="alert('Em construção');" href="#">Mural de Recados</a></li>
                    <li><a href="index.php?iftm=11">Relatório de Vendas</a></li>
					<li><a href="index.php?iftm=12">Sair</a></li>
                </ul>
</div>
              <div id="leftmenu_bottom"></div>
        </div>
		<div id="content">
        <div id="content_top"></div>
        <div id="content_main">
        <?php 
        	$paginas[0] = "erro.php";
        	$paginas[1] = "home.php";
        	$paginas[2] = "iftmPtc.php";
        	$paginas[3] = "iftmVestiblar.php";
        	$paginas[4] = "arteECultura.php";
        	$paginas[5] = "contato.php";
        	$paginas[6] = "pedido.php";
        	$paginas[70] = "usuarioAbrir.php"; ////////
        	$paginas[700] = "usuario.php";
        	$paginas[71] = "usuarioListar.php"; ////////
        	$paginas[72] = "usuarioAlterarAbrir.php"; ////////
        	$paginas[720] = "usuarioAlterar.php";
        	$paginas[721] = "usuarioAlterarFazer.php";
        	$paginas[73] = "usuarioExcluirAbrir.php"; ////////
        	$paginas[730] = "usuarioExcluir.php";
        	$paginas[8] = "infoNutricionais.php";
        	$paginas[9] = "receitas.php";
        	$paginas[10] = "satisfacao.php";
        	$paginas[11] = "relatorioVendas.php";
        	$paginas[12] = "logout.php";

        	
        	if (isset($_GET["iftm"])) {
        		$link = $_GET["iftm"];
        	    if (!file_exists($paginas[$link])) {
        	    	$link = "0";
       			}
        		
        	} else {
        		$link = "1";
        	}
        	include $paginas[$link];
       		
        ?>
        	
        </div>
        <div id="content_bottom"></div>
   
      </div>
   </div>
</body>
</html>
