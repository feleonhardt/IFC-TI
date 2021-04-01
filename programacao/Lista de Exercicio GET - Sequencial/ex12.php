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
		$altura = 0;
		if(isset($_GET['altura'])){
			$altura = $_GET['altura'];
		}			
		$pesoH = (72.2*$altura) - 58;
		$pesoM = (62.1*$altura) - 44.7;
	?>
<div id="borda1">
	<img src="img/borda2.jpg">
</div>
<div id="corpo">
	<form action="" method="get">
		<br><br><br>
		<fieldset>
			<legend>Exercício 12</legend>
				<br>
				<label>Altura: </label>
                <input type="number" name="altura" id="n" step="0.01" required value="<?php echo $altura ?>"/>
                <br><br>
                <center><input type="submit" value="Verificar peso ideal"></center>
				<br>
					<?php
				   		echo "<h4>Tendo a altura de ".$altura." metros: <br>- Peso ideal para homem: ".$pesoH." kg <br>- Peso ideal para mulher: ".$pesoM." kg </h4>";
					?>
		</fieldset>
	</form>
</div>
<div id="borda2">
	<img src="img/borda2.jpg">
</div>
</body>
</html>