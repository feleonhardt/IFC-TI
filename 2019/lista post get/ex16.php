<!DOCTYPE html>
<?php
	$tamanho = isset($_POST['tamanho']) ? $_POST['tamanho'] : 0;
	$titulo = "Exercício 16";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<form action="" method="post">
		Tamanho (m²): <input type="text" name="tamanho" id="tamanho" placeholder="Digite aqui...">
		<input type="submit" name="enviar" id="enviar" value="Calcular">
	</form>
		<?php 
			$litros = $tamanho/6;
			$latas = ceil($litros/18);
			$reaislata = $latas*80;

			$galoes = ceil($litros/3.6);
			$reaisgalao = $galoes*25;

			echo "<br>m²: ".$tamanho;
			echo "<br><br><br>Latas: ".$latas;
			echo "<h3>Reais: R$ ".$reaislata."</h3>";
			echo "<br><br>Galões: ".$galoes;
			echo "<h3>Reais: R$ ".$reaisgalao."</h3>";
		?>
</body>
</html>