<!DOCTYPE html>
<?php
	$n1 = 10;
	$n2 = 5;
	$n3 = 1;
	$n4 = 10;
	$titulo = "Exercício 4"
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
		<?php $media = ($n1 + $n2 + $n3 + $n4)/4;?>
	<h3><?php
		echo "Nota 1: ".$n1;
		echo "<br>Nota 2: ".$n2;
		echo "<br>Nota 3: ".$n3;
		echo "<br>Nota 4: ".$n4;
		echo "<br><br>Média: ".$media; ?></h3>
	
</body>
</html>