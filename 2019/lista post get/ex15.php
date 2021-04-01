<!DOCTYPE html>
<?php
	$tamanho = isset($_GET['tamanho']) ? $_GET['tamanho'] : 0;
	$titulo = "Exercício 15";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<form action="" method="get">
		Tamanho (m²): <input type="text" name="tamanho" id="tamanho" placeholder="Digite aqui...">
		<input type="submit" name="enviar" id="enviar" value="Calcular">
	</form>
		<?php 
			$litros = $tamanho/3;
			$latas = ceil($litros/18);
			$reais = $latas*80;
			echo "<br>m²: ".$tamanho;
			echo "<br>Latas: ".$latas;
			echo "<br>Reais: R$ ".$reais;
		?>
</body>
</html>