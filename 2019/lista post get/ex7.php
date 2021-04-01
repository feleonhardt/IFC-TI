<!DOCTYPE html>
<?php
	$Lado = isset($_GET['Lado']) ? $_GET['Lado'] : 0;
	$titulo = "EXERCÍCIO 7"
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<form action="" method="get">
		Lado: <input type="text" name="Lado" id="Lado" placeholder="Digite aqui...">
		<input type="submit" name="enviar" id="enviar" value="Calcular">
	</form>
		<?php $area = $Lado*$Lado;?>
	<h3><?php echo "Lado = ".$Lado." m | Área = ".$area." m²";?></h3>
	
</body>
</html>