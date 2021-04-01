<!DOCTYPE html>
<?php
	$porHora = isset($_POST['porHora']) ? $_POST['porHora'] : 0;
	$trabalhadas = isset($_POST['trabalhadas']) ? $_POST['trabalhadas'] : 0;
	$titulo = "Exercício 14";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<form action="" method="post">
		Horas trabalhadas: <input type="text" name="trabalhadas" id="trabalhadas" placeholder="Digite aqui...">
		<br>Valor por hora trabalhada: <input type="text" name="porHora" id="porHora" placeholder="Digite aqui...">
		<input type="submit" name="enviar" id="enviar" value="Calcular">
	</form>

		<?php $bruto = $porHora*$trabalhadas;
			$inss = ($bruto*8)/100;
			$ir = ($bruto*11)/100;
			$sind = ($bruto*5)/100;
			$liquido = $bruto - $inss - $ir - $sind;
			
			echo "<br>+ Salário bruto: R$ ".$bruto;
			echo "<br>- IR (11%): R$  ".$ir;
			echo "<br>- INSS (8%): R$  ".$inss;
			echo "<br>- Sindicato (5%): R$  ".$sind;
			echo "<br>= Salário líquido: R$  ".$liquido;
		?>
</body>
</html>