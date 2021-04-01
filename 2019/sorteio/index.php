<!DOCTYPE html>
<?php
	$enviar = isset($_POST['enviar']) ? $_POST['enviar'] : 0;
	$min = 0;
	$max = 100;
	$num = 6;
	$cont= 0;
	$vet = array();
	for ($i=0; $i < $num ; $i++) { 
		$vet[$i]= mt_rand($min,$max);
	}
	$simbolo='';

	$titulo = "SORTEIO";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
</head>
<body>
	<form action="" method="post">
		<input type="submit" name="enviar" id="enviar" value="NOVO SORTEIO">
	</form>
	<?php
		sort($vet);
		echo "<h2>Sorteio: ";
		for ($i=0; $i<$num; $i++) { 
			echo $vet[$i]." | ";
		}
		echo "</h2>";
		echo "<h2>Cartelas:</h2>";
		for ($x=0; $x<10; $x++) { 
			$cartela = array();
			echo "<h3>";
			for ($y=0; $y<$num; $y++) 
				$cartela[$y]= mt_rand($min, $max);
				sort($cartela);
			for ($y=0; $y <$num; $y++) { 
				if (in_array($cartela[$y], $vet))
					echo $cartela[$y]."* | ";
				else
					echo $cartela[$y]." | ";
			}
			echo "</h3>";
		}
	?>
</body>
</html>