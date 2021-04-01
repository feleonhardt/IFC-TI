<!DOCTYPE html>
<?php
	$metros = isset($_GET['metros']) ? $_GET['metros'] : 0;
	$titulo = "EXERCÍCIO 5"
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<form action="" method="get">
		Metros: <input type="text" name="metros" id="metros" placeholder="Digite aqui...">
		<input type="submit" name="enviar" id="enviar" value="Converter">
	</form>
		<?php $cm = $metros*100;?>
	<h3><?php echo $metros." m = ".$cm." cm";?></h3>
	
</body>
</html>