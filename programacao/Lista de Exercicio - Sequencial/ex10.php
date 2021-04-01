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
			<legend>Exercício 10</legend>
				<br>
				<?php
					$num1 = 2;
					$num2 = 14;
					$num3 = 12.8;
					$a = ($num1*2) * ($num2/2);
					$b = ($num1*3) + $num3;
					$c = $num3*$num3*$num3;
					echo "a. (".$num1."*2) * (".$num2."/2) = ".$a;
					echo "<br>b. (".$num1."*3) + ".$num3." = ".$b;
					echo "<br>c. ".$num3."*".$num3."*".$num3." = ".$c;
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