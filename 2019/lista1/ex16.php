<!DOCTYPE html>
<?php
	$tamanho = 22;
	$titulo = "Exercício 16";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
		<?php 
			$litros = $tamanho/6;
			$latas = ceil($litros/18);
			$reaislata = $latas*80;

			$galoes = ceil($litros/3.6);
			$reaisgalao = $galoes*25;

			echo "M²: ".$tamanho;
			echo "<br><br>Latas: ".$latas;
			echo "<br>Reais: R$ ".$reaislata;
			echo "<br><br>Galões: ".$galoes;
			echo "<br>Reais: R$".$reaisgalao;
		?>
</body>
</html>