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
			<legend>Exercício 16</legend>
				<br>
				<?php
					$area = 200;
					$litros = $area/6;
					$latas = ceil($litros/18);
					$galoes = ceil($litros/3.6);  
					$precoLatas = $latas*80;
					$precoGaloes = $galoes*25;
					echo "Para pintar ".$area." metros quadrados, tem-se duas opções: <br>- ".$latas." latas de 18 litros, o que custará R$ ".$precoLatas.". <br>- ".$galoes." galões de 3.6 litros, o que custará R$ ".$precoGaloes;
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