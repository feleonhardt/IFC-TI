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
	<form action="" method="post">
		<br><br><br><br><br>
		<fieldset>
			<legend>Resposta 02</legend>
			<br>
				<?php
					$graus = 0;
					if(isset($_POST['graus'])){
					$graus = $_POST['graus'];
					}
					$metros = 0;
					if(isset($_POST['metros'])){
					$metros = $_POST['metros'];
					}
					$rad = deg2rad($graus);
					$tg = tan($rad);
					$lado = round($tg,2) * $metros;
					$area = round($lado,2) * round($lado,2);
					echo "A área da base dessa torre ocupa um espaço de ".round($area,2)." metros quadrados";
				?>
			<br>
		</fieldset>
		</form>
</div>
<div id="borda2">
	<img src="img/borda2.jpg">
</div>
</body>
</html>