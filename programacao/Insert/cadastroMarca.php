<!DOCTYPE html>
<?php
	$title = "Lista de Marcas";
?>
<html>
<head>
    <meta charset="UTF-8" />
    <title><?php echo $title; ?></title>
</head>
<body>
<form action="acao.php" id="form" method="post">
	<fieldset>
		<legend>Cadastro de Marcas</legend>
		<center>
		Descrição: <input type="text" name="descricao" id="descricao" placeholder="Descrição" required="true"><br><br>
		<button name="acao" value="salvar" id="acao" type="submit">Salvar</button>
		</center>
	</fieldset>
</form>
</body>
</html>