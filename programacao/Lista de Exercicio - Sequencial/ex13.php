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
			<legend>Exercício 13</legend>
				<br>
				<?php
					$peso = 50;
					if($peso>50){
						$excesso = $peso - 50;
						$multa = $excesso*4;
						echo "O excedente foi igual a ".$excesso." kg, sendo assim, o valor da multa é igual a R$ ".$multa;
					}
					else{
						$excesso = 0;
						$multa = 0;
						echo "O excedente foi igual a ".$excesso." kg, sendo assim, não haverá multa.";
					}	
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