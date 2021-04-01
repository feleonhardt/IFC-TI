<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo.css" />
    <meta charset="UTF-8" />
    <link rel="shortcut icon" type="image/x-icon" href="img/php.png" />
    <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <title>Exercicios PHP</title>
</head>
<body>
<div id="borda1">
	<img src="img/borda2.jpg">
</div>
<div id="corpo">
	<form>
		<br><br><br><br><br>
		<fieldset>
			<legend>Exercício 14</legend>
				<br>
				<?php
					$ganhoHr = 10;
					$totalHr = 160;
					$salarioBruto = $ganhoHr*$totalHr;
					$imposto = $salarioBruto*0.11;
					$inss = $salarioBruto*0.08;
					$sindicato = $salarioBruto*0.05;
					$descontos = $imposto + $inss + $sindicato;
					$salarioLiquido = $salarioBruto - $descontos;
					echo "+ Salário Bruto: R$ ".$salarioBruto;
					echo "<br>- IR (11%): R$ ".$imposto;
					echo "<br>- INSS (8%): R$ ".$inss;
					echo "<br>- Sindicato (5%): R$ ".$sindicato;
					echo "<br>= Salário Líquido: R$ ".$salarioLiquido;
				?>	
				<br><br>
		</fieldset>
	</form>
</div>
<div id="borda2">
	<img src="img/borda2.jpg">
</div>
</body>
</html>