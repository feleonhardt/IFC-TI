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
		$salario = "0";
		if(isset($_POST['salario'])){
			$salario = $_POST['salario'];
		}
	?>
<div id="borda1">
	<img src="img/borda2.jpg">
</div>
<div id="corpo">
	<form action="" method="post">
		<br><br><br>
		<fieldset>
			<legend>Exercício 12</legend>
				<br>
				<label>Salário R$: </label>
                <input type="number" name="salario" id="n" step="0.0001" required/>
                <br><br>
                <center><input type="submit" value="Calcular"></center>
				<br>
					<?php
						if($salario<=280){
							$percentual = 20;
							$aumento = $salario*0.2;
							$novo = $salario + $aumento;
						}
						elseif($salario>280 && $salario<=700){
							$percentual = 15;
							$aumento = $salario*0.15;
							$novo = $salario + $aumento;
						}
						elseif($salario>700 && $salario<=1500){
							$percentual = 10;
							$aumento = $salario*0.10;
							$novo = $salario + $aumento;
						}
						elseif($salario>1500){
							$percentual = 5;
							$aumento = $salario*0.05;
							$novo = $salario + $aumento;
						}
						echo "Salário antes do reajuste: R$ ".$salario."<br>Percentual de aumento aplicado: ".$percentual."% <br> Valor do aumento: R$ ".$aumento."<br>Novo salário R$: ".$novo;
					?>
		</fieldset>
	</form>
</div>
<div id="borda2">
	<img src="img/borda2.jpg">
</div>
</body>
</html>