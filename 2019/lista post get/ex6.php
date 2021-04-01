<!DOCTYPE html>
<?php
	$raio = isset($_POST['raio']) ? $_POST['raio'] : 0;
	$titulo = "EXERCÍCIO 6"
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<form action="" method="post">
		Raio: <input type="text" name="raio" id="raio" placeholder="Digite aqui...">
		<input type="submit" name="enviar" id="enviar" value="Calcular">
	</form>
		<?php $area = 3.14*($raio*$raio);?>
	<h3><?php echo "Raio = ".$raio." m | Área = ".$area." m²";?></h3>
	
</body>
</html>