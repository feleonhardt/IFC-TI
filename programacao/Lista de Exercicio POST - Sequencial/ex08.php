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
		$porhora = 0;
		if(isset($_POST['porhora'])){
			$porhora = $_POST['porhora'];
		}
		$horas = 0;
		if(isset($_POST['horas'])){
			$horas = $_POST['horas'];
		}
		$salario = $porhora*$horas;
	?>
<div id="borda1">
	<img src="img/borda2.jpg">
</div>
<div id="corpo">
	<form action="" method="post">
		<br><br><br>
		<fieldset>
			<legend>Exercício 08</legend>
				<br>
				<label>Ganho por hora: R$</label>
                <input type="number" name="porhora" id="n" step="0.001" required value="<?php echo $porhora ?>"/>
                <br><br>
                <label>Horas trabalhadas: </label>
                <input type="number" name="horas" id="n" step="0.1" required value="<?php echo $horas ?>"/>
                <br><br>
                <center><input type="submit" value="Calcular salário"></center>
				<br>
					<?php
				   		echo "<h4>O salário de quem trabalhou ".$horas." horas no mês, e cujo ganho por hora é ".$porhora.", é equivalente a R$ ".$salario."</h4>";
					?>
		</fieldset>
	</form>
</div>
<div id="borda2">
	<img src="img/borda2.jpg">
</div>
</body>
</html>