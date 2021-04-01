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
			<legend>Exercício 09</legend>
				<br>
				<?php
					$farenheit = 35;
					$celsius = (5*($farenheit-32)/9);
					echo $farenheit."° Farenheit equivalem a ".$celsius."° Celsius";
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