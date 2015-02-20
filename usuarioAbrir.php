<form id="formUsuario" method="post" action="usuario.php">
<fieldset>
	
	<legend> Formulário de cadastro de usuario</legend>
	
	<label for="login">Login:</label> <input type="text" id="login" name="login" />
	<br /> <br />
	
	<label for="senha">Senha:</label> <input type="password" id="senha" name="senha" />
	<br /> <br />
	
	<label for="ativo">Ativo ?</label>
	<select name="ativo">
		<option value="1">SIM</option>
		<option value="0">NÃO</option>
	</select>
	<br /> <br />
	
	<input type="submit" value="Salvar" />
	<input type="reset" value="Limpar" />

</fieldset>
</form>
