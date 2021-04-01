<!DOCTYPE html>
<?php
	$numero = isset($_POST['numero']) ? $_POST['numero'] : '0';
	$titulo = "EXERCÍCIO 2";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
</head>
<body>
	<form action="" method="post">
		Digite um número: <input type="text" name="numero" id="numero" placeholder="Digite aqui...">
		<input type="submit" name="enviar" id="enviar" value="Enviar">
	</form>
	<?php
		echo "<h1>O número informado foi ".$numero."</h1>";
	?>
</body>
</html>