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
	<?php
		$ganhoHr = 0;
		if(isset($_POST['ganhoHr'])){
			$ganhoHr = $_POST['ganhoHr'];
		}
		$totalHr = 0;
		if(isset($_POST['totalHr'])){
			$totalHr = $_POST['totalHr'];
		}
		$salarioBruto = $ganhoHr*$totalHr;
		$imposto = $salarioBruto*0.11;
		$inss = $salarioBruto*0.08;
		$sindicato = $salarioBruto*0.05;
		$descontos = $imposto + $inss + $sindicato;
		$salarioLiquido = $salarioBruto - $descontos;
	?>
<div id="borda1">
	<img src="img/borda2.jpg">
</div>
<div id="corpo">
	<form action="" method="post">
		<br>
		<fieldset>
			<legend>Exercício 14</legend>
				<br>
				<label>Ganho por hora: R$</label>
                <input type="number" name="ganhoHr" id="n" step="0.001" required value="<?php echo $ganhoHr ?>"/>
                <br><br>
                <label>Horas trabalhadas: </label>
                <input type="number" name="totalHr" id="n" step="0.1" required value="<?php echo $totalHr ?>"/>
                <br><br>
                <center><input type="submit" value="Calcular"></center>
				<br>
					<?php
   						echo "<h4>+ Salário Bruto: R$ ".$salarioBruto."<br>- IR (11%): R$ ".$imposto."<br>- INSS (8%): R$ ".$inss."<br>- Sindicato (5%): R$ ".$sindicato."<br>= Salário Líquido: R$ ".$salarioLiquido."</h4>";		
					?>
		</fieldset>
	</form>
</div>
<div id="borda2">
	<img src="img/borda2.jpg">
</div>
</body>
</html>