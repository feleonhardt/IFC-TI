<!DOCTYPE html>
<?php
	$porHora = 14.5;
	$trabalhadas = 220;
	$titulo = "Exercício 14";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
		<?php $bruto = $porHora*$trabalhadas;
			$inss = ($bruto*8)/100;
			$ir = ($bruto*11)/100;
			$sind = ($bruto*5)/100;
			$liquido = $bruto - $inss - $ir - $sind;
			
			echo "+ Salário bruto: R$ ".$bruto;
			echo "<br>- IR (11%): R$  ".$ir;
			echo "<br>- INSS (8%): R$  ".$inss;
			echo "<br>- Sindicato (5%): R$  ".$sind;
			echo "<br>= Salário líquido: R$  ".$liquido;
		?>
</body>
</html>