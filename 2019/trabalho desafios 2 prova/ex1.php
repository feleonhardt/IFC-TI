<!DOCTYPE html>
<?php
	$horas = isset($_POST['horas']) ? $_POST['horas'] : 0;
	$preco = isset($_POST['preco']) ? $_POST['preco'] : 0;
	$titulo = "Salário";
?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
</head>
<body>
	<form action="" method="post">
		Horas de trabalho:<input type="text" name="horas" id="horas"><br>
		Ganho por hora trabalhada:<input type="text" name="preco" id="preco"><br>
		<input type="submit" name="enviar" id="enviar" value="CALCULAR">
	</form>
	<?php
		$salario_bruto=$horas*$preco;
		//desconto IR
		if ($salario_bruto<=900) {
			$descontoIR=0;
			$ir='isento';
		}
		elseif ($salario_bruto<=1500) {
			$descontoIR=$salario_bruto*0.05;
			$ir='5%';
		}
		elseif ($salario_bruto<=2500) {
			$descontoIR=$salario_bruto*0.1;
			$ir='10%';	
		}
		elseif ($salario_bruto>2500) {
			$descontoIR=$salario_bruto*0.2;
			$ir='20%';		
		}
		$inss=$salario_bruto*0.1;
		$fgts=$salario_bruto*0.11;
		$sindicato=$salario_bruto*0.03;
		$totaldescontos=$descontoIR+$inss+$sindicato;
		$salario_liquido=$salario_bruto-$totaldescontos;
		echo "<br>Salário bruto: (".$preco."*".$horas."): R$ ".$salario_bruto;
		echo "<br>(-) IR (".$ir."): R$ ".$descontoIR;
		echo "<br>(-) INSS (10%): R$ ".$inss;
		echo "<br>(-) Sindicato (3%): R$ ".$sindicato;
		echo "<br>FGTS (11%): R$ ".$fgts;
		echo "<br>Total de descontos: R$ ".$totaldescontos;
		echo "<br>Salário líquido: R$ ".$salario_liquido;

	?>
</body>
</html>