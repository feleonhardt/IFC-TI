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
			<legend>Exercício 12</legend>
				<br>
				<?php
					$altura = 1.78;
					$pesoH = (72.2*$altura) - 58;
					$pesoM = (62.1*$altura) - 44.7;
					echo "Para a altura de ".$altura." metros: <br>- Peso ideal para homem: ".$pesoH." kg <br>- Peso ideal para mulher: ".$pesoM." kg";
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