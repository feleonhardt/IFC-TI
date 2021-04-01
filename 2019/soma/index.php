<!DOCTYPE html>
<?php
	$n1 = 100;
	$n2 = 20.9;
	$titulo = "PHP básico";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
</head>
<body>

	<h1><?php echo $titulo;?> </h1>
		<?php $soma = $n1 + $n2;?>
	<h3><?php echo $n1." + ".$n2." = ".$soma;?></h3>
	
</body>
</html>