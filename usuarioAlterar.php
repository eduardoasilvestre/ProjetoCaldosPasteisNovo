<?php
include "conexao.php";

$elementoASerAlterado =  $_POST['alterar'];

$query = "SELECT * FROM usuario where id = '$elementoASerAlterado'"; 

$resultado = mysql_query($query);

$linha  = mysql_fetch_array($resultado);
$codigo = $linha['id'];
$login = $linha['login'];
$senha = $linha['senha'];
$ativo = $linha['ativo'];
$dataC = $linha['data_criacao'];
$dataM = $linha['data_modificacao'];

?>

<form id="formUsuario" method="post" action="index.php?iftm=721">
<fieldset>

<legend> Formulário de cadastro de usuario</legend>

<label for="login">Login:</label> <input type="text" id="login" name="login" value='<?php echo $login?>' />
<br /> <br />

<label for="senha">Senha:</label> <input type="password" id="senha" name="senha" value='<?php echo $senha?>' />
<br /> <br />

<label for="ativo">Ativo ?</label>
<select name="ativo">
<?php if ($ativo == 1) {
	echo "<option selected='selected' value='1'>SIM</option>";
	echo "<option value='0'>NÃO</option>";
} else {
	echo "<option value='1'>SIM</option>";
	echo "<option selected='selected' value='0'>NÃO</option>";
}
?>
	
</select>
<br /> <br />

<input type="submit" value="Salvar" />
<input type="reset" value="Limpar" />

<input type="hidden" name="id" value='<?php echo $codigo?>' />

</fieldset>
</form>
