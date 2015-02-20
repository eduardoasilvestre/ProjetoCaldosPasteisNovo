function processaPedido(codigo) {
	var tentativas = 0;
	var qtd = prompt("Entre com a quantidade do produto:");
	while (!numeroValido(qtd)) {
		tentativas++;
		if (tentativas == 3) {
			alert("O n�mero de tentativas foi encerrado.");
			return;
		}
		qtd = prompt("Entre com a quantidade do produto:");
	}
	/*var url = "http://127.0.0.1:8888/ProjetoCaldosPasteisNovo/processaPedido.php?pedido="
	+ 	codigo + "&qtd=" + parseInt(qtd);*/
	var url = "http://127.0.0.1:8888/ProjetoCaldosPasteisNovo/index.php?iftm=12?pedido="
		+ 	codigo + "&qtd=" + parseInt(qtd);
	
	
	
	location.href=url;
	//window.open(url,  "pp");
	
}

function numeroValido(qtd) {
	if (qtd == null || qtd == '') {
		alert("Valor Inv�lido!\n Tente outra vez.");
		return false
	}
	for (i = 0; i < qtd.length; i++) {
		if (isNaN(qtd[i])) {
			alert("Valor Inv�lido!\n Apenas n�meros s�o v�lidos.");
			return false;
		}
	}
	
	if (parseInt(qtd) > 10) {
		alert("A quantidade de pedidos n�o pode ser superior a 10!");
		return false;
	}
	return true;
}

function abreFotoParticipantes() {
	var screenW = screen.width;
	var screenH = screen.height;

	window.open('participantes.html', '', 'height='+screenH +', width='+screenW + ', scrollbars=no, resizable=no');
}

function abreMuralRecados() {
	var screenW = screen.width;
	var screenH = screen.height;

	window.open('http://127.0.0.1:8888/Dia22/MessageBoards/home.php', '', 'height='+screenH +', width='+screenW + ', scrollbars=no, resizable=no');
}


function validaSatisfacao() {
	var nome = document.getElementById("element_1").value.length < 5;
	var opiniao = document.getElementById("element_2").value.length < 5;
	//Esta faltando codigo
	
	if (nome || opiniao) {
		alert('Preencha todos os campos do formul�rio.\nO nome e a opini�o devem ter no m�nimo 5 caracteres.');
	}
}