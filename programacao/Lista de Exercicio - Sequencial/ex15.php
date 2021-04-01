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
			<legend>Exercício 15</legend>
				<br>
				<?php
					$area = 200;
					$litros = $area/3;
					$latas = ceil($litros/18);
					$preco = $latas*80;
					echo "Para pintar ".$area." metros quadrados, a quantidade de latas que precisam ser compradas é ".$latas.", o que custará R$ ".$preco;
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