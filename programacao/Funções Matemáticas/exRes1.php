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
	<form action="ex2.php" method="post">
		<br><br><br><br><br>
		<fieldset>
			<legend>Resposta 01</legend>
			<br>
				<?php
				$lar = 0;
				if(isset($_POST['lar'])){
				$lar= $_POST['lar'];
				}
				$com = 0;
				if(isset($_POST['com'])){
				$com= $_POST['com'];
				}
				$hip = hypot ($com, $lar);
				$custo = $hip * 13;
				echo "Para construir uma cerca na diagonal em um terreno de ".$lar." metros de largura e ".$com." metros de comprimento, serão necessários ".$hip." metros de cerca, o que custará R$ ".$custo;
				?>
			<br>
		</fieldset>
		<br><br>  
			<center><input type="submit" value="Exercicio 2"></center>
	</form>
</div>
<div id="borda2">
	<img src="img/borda2.jpg">
</div>
</body>
</html>