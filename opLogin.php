<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Faça seu login aqui !</title>
<style type="text/css">
	
	#formOpLogin fieldset {
	margin:100px auto;
	padding:30px;
	border:3px solid black;
}

#formOpLogin label {
	float: left;
	width:150px;
	display:block;
}

#formOpLogin fieldset {
	width:220px;
}
	
	
</style>

</head>
<body>
	<form id="formOpLogin" action="login.php" method="post">
	<fieldset>
		<legend>Preencha o seus dados para o login</legend>
		
		<label for="login">Nome de usuário:</label> 
		<input type="text" name="login" id="login" />
		<br /><br />
		<label for="senha">Senha:</label> 
		<input type="password" name="senha" />
		<br /> <br />
		<input type="submit" name="logar" value="Logar" />
		<input type="reset" value="Limpar" />
	</fieldset>
	</form>

</body>
</html>