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
			<legend>Exercício 04</legend>
				<br>
				<?php
					$nota1 = 7.5;
					$nota2 = 8.2;
					$nota3 = 9.7;
					$nota4 = 6.5;
					$media = ($nota1+$nota2+$nota3+$nota4)/4;
					echo "Com as notas ".$nota1.", ".$nota2.", ".$nota3." e ".$nota4.", a média final é igual a ".$media;
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