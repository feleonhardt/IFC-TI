<!DOCTYPE html>
<?php
	$numero1 = isset($_GET['numero1']) ? $_GET['numero1'] : 0;
	$numero2 = isset($_GET['numero2']) ? $_GET['numero2'] : 0;
	$titulo = "EXERCÍCIO 3";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
</head>
<body>
	<form action="" method="get">
		Digite o 1° número: <input type="text" name="numero1" id="numero1" placeholder="Digite aqui...">
		<br>Digite o 2° número: <input type="text" name="numero2" id="numero2" placeholder="Digite aqui...">
		<input type="submit" name="enviar" id="enviar" value="Enviar">
	</form>
	<?php
		$soma=$numero1+$numero2;
		echo "<h1>A soma dos números informados é ".$soma."</h1>";
	?>
</body>
</html>