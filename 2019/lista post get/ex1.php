<!DOCTYPE html>
<?php
	$mensagem = isset($_GET['mensagem']) ? $_GET['mensagem'] : 'Alo mundo';
	$titulo = "EXERCÍCIO 1";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
</head>
<body>
	<form action="" method="get">
		<input type="text" name="mensagem" id="mensagem" placeholder="Digite aqui...">
		<input type="submit" name="enviar" id="enviar" value="Escrever">
	</form>
	<?php
		echo "<h1>".$mensagem."</h1>";
	?>
</body>
</html>