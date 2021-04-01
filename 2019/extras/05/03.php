<!DOCTYPE html>
<?php
	$nome= isset($_POST['nome']) ? $_POST['nome'] : '';
	$idade= isset($_POST['idade']) ? $_POST['idade'] : 0;
	$salario= isset($_POST['salario']) ? $_POST['salario'] : 0;
	$sexo= isset($_POST['sexo']) ? $_POST['sexo'] : '';
	$estado= isset($_POST['estado']) ? $_POST['estado'] : '';
	$titulo = "Cadastro";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="shortcut icon" href="assets/img/icone_azul.png">
	<link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
</head>
<body>
	<center>


	<form action="" method="post" class="form">
		<h2><?php echo $titulo; ?></h2>
		<hr class="dividir">
	<div class="input">
	Informe o nome: <input type="text" name="nome" id="nome" required><br>
	Informe a idade: <input type="number" name="idade" id="idade" required><br>
	Informe o salário: <input type="text" name="salario" id="salario" required><br>
	</div>
	<div class="radio">
		Sexo:<br><br>
	<input type="radio" name="sexo" id="f" value="f" checked=""><label for="f">Feminino</label>
	<input type="radio" name="sexo" id="m" value="m"><label for="m">Masculino</label>
	</div>
	<div class="radio">
		Estado civíl:<br><br>
		<fieldset class="fieldset-alinhado-esquerda">
			<input type="radio" name="estado" id="s" value="s" checked=""><label for="s">Solteiro</label>
			<input type="radio" name="estado" id="c" value="c"><label for="c">Casado</label><br>
			<input type="radio" name="estado" id="v" value="v"><label for="v">Viúvo</label>
			<input type="radio" name="estado" id="d" value="d"><label for="d">Divorciado</label>
		</fieldset>
	</div>
	<div class="input">
	<input type="submit" name="acao" id="acao" value="Cadastrar">
	<input type="reset" name="reset" id="reset" value="Limpar">
	</div>

		<?php

		?>
	</form>
	</center>
</body>
</html>
