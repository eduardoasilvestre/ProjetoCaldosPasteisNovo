        <?php
        
          function formata($numero)
{
	if(strpos($numero,'.')!='')
	{
		   $var=explode('.',$numero);
		   if(strlen($var[0])==4)
		   {
		     $parte1=substr($var[0],0,1);
		     $parte2=substr($var[0],1,3);
		     if(strlen($var[1])<2)
		     {
		     	$formatado=$parte1.'.'.$parte2.','.$var[1].'0';
		     }else
		     {
		     	$formatado=$parte1.'.'.$parte2.','.$var[1];
		     }
		   }
		   elseif(strlen($var[0])==5)
		   {
		     $parte1=substr($var[0],0,2);
		     $parte2=substr($var[0],2,3);
		     if(strlen($var[1])<2)
		     {
		     	$formatado=$parte1.'.'.$parte2.','.$var[1].'0';
		     }
		     else
		     {
		     	$formatado=$parte1.'.'.$parte2.','.$var[1];
		     }
		   }
		   elseif(strlen($var[0])==6)
		   {
		     $parte1=substr($var[0],0,3);
		     $parte2=substr($var[0],3,3);
		     if(strlen($var[1])<2)
		     {
		     	$formatado=$parte1.'.'.$parte2.','.$var[1].'0';
		     }
		     else
		     {
		     	$formatado=$parte1.'.'.$parte2.','.$var[1];
		     }
		   }
		   elseif(strlen($var[0])==7)
		   {
		     $parte1=substr($var[0],0,1);
		     $parte2=substr($var[0],1,3);
		     $parte3=substr($var[0],4,3);
		     if(strlen($var[1])<2)
		     {
		     	$formatado=$parte1.'.'.$parte2.'.'.$parte3.','.$var[1].'0';
		     }
		     else
		     {
		     $formatado=$parte1.'.'.$parte2.'.'.$parte3.','.$var[1];
		     }
		   }
		   elseif(strlen($var[0])==8)
		   {
		     $parte1=substr($var[0],0,2);
		     $parte2=substr($var[0],2,3);
		     $parte3=substr($var[0],5,3);
		     if(strlen($var[1])<2){
		     $formatado=$parte1.'.'.$parte2.'.'.$parte3.','.$var[1].'0';
		     }else{
		     $formatado=$parte1.'.'.$parte2.'.'.$parte3.','.$var[1];
		     }
		   }
		   elseif(strlen($var[0])==9)
		   {
		     $parte1=substr($var[0],0,3);
		     $parte2=substr($var[0],3,3);
		     $parte3=substr($var[0],6,3);
		     if(strlen($var[1])<2)
		     {
		     	$formatado=$parte1.'.'.$parte2.'.'.$parte3.','.$var[1].'0';
		     }
		     else
		     {
		     	$formatado=$parte1.'.'.$parte2.'.'.$parte3.','.$var[1];
		     }
		   }
		   elseif(strlen($var[0])==10)
		   {
		     $parte1=substr($var[0],0,1);
		     $parte2=substr($var[0],1,3);
		     $parte3=substr($var[0],4,3);
		     $parte4=substr($var[0],7,3);
		     if(strlen($var[1])<2)
		     {
		     	$formatado=$parte1.'.'.$parte2.'.'.$parte3.'.'.$parte4.','.$var[1].'0';
		     }
		     else
		     {
		     	$formatado=$parte1.'.'.$parte2.'.'.$parte3.'.'.$parte4.','.$var[1];
		     }
		   }
		   else
		   {
		     if(strlen($var[1])<2)
		     {
		    	 $formatado=$var[0].','.$var[1].'0';
		     }
		     else
		     {
		    	 $formatado=$var[0].','.$var[1];
		     }
		   }
	  }
	  else
	  {
	     $var=$numero;
	   if(strlen($var)==4)
	   {
	     $parte1=substr($var,0,1);
	     $parte2=substr($var,1,3);
	     $formatado=$parte1.'.'.$parte2.','.'00';
	   }
	   elseif(strlen($var)==5)
	   {
	     $parte1=substr($var,0,2);
	     $parte2=substr($var,2,3);
	     $formatado=$parte1.'.'.$parte2.','.'00';
	   }
	   elseif(strlen($var)==6)
	   {
	     $parte1=substr($var,0,3);
	     $parte2=substr($var,3,3);
	     $formatado=$parte1.'.'.$parte2.','.'00';
	   }
	   elseif(strlen($var)==7)
	   {
	     $parte1=substr($var,0,1);
	     $parte2=substr($var,1,3);
	     $parte3=substr($var,4,3);
	     $formatado=$parte1.'.'.$parte2.'.'.$parte3.','.'00';
	   }
	   elseif(strlen($var)==8)
	   {
	     $parte1=substr($var,0,2);
	     $parte2=substr($var,2,3);
	     $parte3=substr($var,5,3);
	     $formatado=$parte1.'.'.$parte2.'.'.$parte3.','.'00';
	   }
	   elseif(strlen($var)==9)
	   {
	     $parte1=substr($var,0,3);
	     $parte2=substr($var,3,3);
	     $parte3=substr($var,6,3);
	     $formatado=$parte1.'.'.$parte2.'.'.$parte3.','.'00';
	   }
	   elseif(strlen($var)==10)
	   {
	     $parte1=substr($var,0,1);
	     $parte2=substr($var,1,3);
	     $parte3=substr($var,4,3);
	     $parte4=substr($var,7,3);
	     $formatado=$parte1.'.'.$parte2.'.'.$parte3.'.'.$parte4.','.'00';
	   }
	   else
	   {
	     $formatado=$var.','.'00';
	   }
	}
	  return "R$ " . $formatado;
}
        

          $pedido = $_GET["pedido"];
          $qtd = $_GET["qtd"];

          if (isset($pedido) && isset($qtd)) {

          $link =  mysql_connect("127.0.0.1","root", "")
              or die ("<p>Não foi possível conectar.</p>");
          //echo "<p>Conexão bem sucedida.</p>";


          mysql_select_db("caldos_pasteis")
              or die ("<p>Não foi conectar ao banco de dados selecionado.</p>");
          //echo "Banco de dados selecionado";
          
          $consulta = "SELECT * FROM produto where CODIGO_TIPO_PRODUTO = $pedido";

          $resultado = mysql_query($consulta)
                 or die ("<p>Falha na execução da consulta.</p>");

          while ($linha = mysql_fetch_assoc($resultado)) {
                $NOME_PRODUTO = $linha["NOME_PRODUTO"];
                $CODIGO_PRODUTO = $linha["CODIGO_PRODUTO"];
                $VALOR_PRODUTO = $linha["VALOR_PRODUTO"];
          }

          $DATA_PEDIDO = date("Y-m-d H:i:s");
          $TOTAL_PEDIDO = $VALOR_PRODUTO *   $qtd;
          //echo  "<p>   $qtd $CODIGO_PRODUTO $NOME_PRODUTO $TOTAL_PEDIDO  $VALOR_PRODUTO $DATA_PEDIDO</p>";
          
          $consulta = "INSERT INTO pedido (QUANTIDADE_PEDIDO, CODIGO_PRODUTO_FK, NOME_PRODUTO, TOTAL_PEDIDO, FLAG_PEDIDO_RECEBIDO, DATA_PEDIDO)
                       values ('$qtd','$CODIGO_PRODUTO','$NOME_PRODUTO',$TOTAL_PEDIDO,'NAO','$DATA_PEDIDO')";
          echo "<p style='height:10px;'> <p>";
          //echo $consulta;
          $resultado = mysql_query($consulta)
                 or die ("<p class='msgPedido'><a id='pedidoFracasso' href='pedido.php'>Pedido não realizado. Tente de novo AQUI ou contate o administrador sistema !!</a></p>");

          //echo "<p>Dados adicionados com sucesso.</p>";

          echo "<div>";
          echo "<p class='msgPedido'><a id='pedidoSucesso' href='pedido.php'>Pedido realizado com sucesso. Para um novo pedido CLIQUE AQUI !!</a></p>";
          echo "<p class='dTitulo'>Detalhes do pedido</p>";
          echo "<p class='dCorpo'>Nome do produto: $NOME_PRODUTO.<p>";
          echo "<p class='dCorpo'>Quantidade do produto: $qtd.</p>";
          echo "<p class='dCorpo'>Data do pedido: $DATA_PEDIDO.</p>";
          $VALOR_PRODUTO = formata($VALOR_PRODUTO);
          $TOTAL_PEDIDO = formata($TOTAL_PEDIDO);

          echo "<p class='dCorpo'>Valor unitário do produto: $VALOR_PRODUTO.</p>";
          echo "<p class='dCorpo'>Valor total do pedido: $TOTAL_PEDIDO.<p/> </div>";
          }
          ?>
