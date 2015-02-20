        <?php

   $flag = $_POST['flag'];
   
   $nome = $_POST['element_1'];
   $comentarios = $_POST['element_2'];
   $avaliacao =  $_POST['element_3'];

   $link =  mysql_connect("127.0.0.1","root", "")
          or die ("<p>Não foi possível conectar.</p>");
   echo "teste caramba";
   $msg = $nome . $comentarios . $avaliacao;

   mysql_select_db("caldos_pasteis")
          or die ("<p>Não foi conectar ao banco de dados selecionado.</p>");


   $consulta = "INSERT INTO satisfacao (NOME_CLIENTE_SATISFACAO, COMENTARIOS_SATISFACAO, TIPO_SATISFACAO, TIPO_DESCRICAO_SATISFACAO)
                       values ('$nome','$comentarios','$avaliacao','Comentario qualquer')";
	echo "<p style='height:10px;'> <p>";
	//echo $consulta;
	$resultado = mysql_query($consulta)
		 or die ("<p class='msgPedido'><a id='pedidoFracasso' href='satisfacao.php'>Problemas com a opinião. Clique aqui para tentar de novo !!</a></p>");

	//echo "<p>Dados adicionados com sucesso.</p>";


	echo "<p class='msgPedido'><a id='pedidoSucesso' href='satisfacao.php'>Obrigado pela opinião. Cadastre uma nova opinião aqui !!</a></p>";


?>
