<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo3.css" />
    <meta charset="UTF-8" />
    <link rel="shortcut icon" type="image/x-icon" href="img/php.png" />
    <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <title>Exercicios PHP</title>
</head>
<body>
	<?php
		$porHora = "0";
		if(isset($_POST['hora'])){
			$porHora = $_POST['hora'];
		}
		$qtHora = "0";
		if(isset($_POST['valor'])){
			$qtHora = $_POST['valor'];
		}
	?>
<div id="borda1">
	<img src="img/borda2.jpg">
</div>
<div id="corpo">
	<form action="" method="post">
		<br>
		<fieldset>
			<legend>Exercício 01</legend>
				<br>
				<label>Ganho por hora: R$ </label>
                <input type="number" name="hora" id="n" step="0.0001"/>
                <br><br>
                <label>Horas trabalhadas: </label>
                <input type="number" name="valor" id="n" step="0.0001"/>
                <br><br>
                <center><input type="submit" value="Calcular"></center>
				<br>
					<?php
				   		$salario = $porHora*$qtHora;
				   		if($salario<=900){
				   			$ir = 0;
				   		}
				   		elseif($salario>900 && $salario<=1500){
				   			$ir = $salario*0.05;
				   		}
				   		elseif($salario>1500 && $salario<=2500){
				   			$ir = $salario*0.10;
				   		}
				   		elseif($salario>2500){
				   			$ir = $salario*0.20;
				   		}
				   		$inss = $salario*0.10;
				   		$sindicato = $salario*0.03;
				   		$fgts = $salario*0.11;
				   		$total = $ir + $sindicato + $inss;
				   		$liquido = $salario - $total;

				   		echo "Salário Bruto :R$".$salario."<br>IR :R$".$ir."<br>INSS :R$".$inss."<br>Sindicato :R$".$sindicato."<br>FGTS :R$".$fgts."<br>Total de Descontos :R$".$total."<br>Salário Liquido :R$".$liquido;
					?>
		</fieldset>
	</form>
</div>
<div id="borda2">
	<img src="img/borda2.jpg">
</div>
</body>
</html>