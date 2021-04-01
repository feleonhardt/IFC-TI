<!DOCTYPE html>
<?php
	$n1 = 9;
	$n2 = 6;
	$n3 = 1.1;
	$titulo = "Exercício 10";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
		<?php $a = ($n1*2)*($n2/2);
		echo "1°: ".$n1;
		echo "<br>2°: ".$n2;
		echo "<br>3°: ".$n3;
		?>
	<h3><?php echo "a. O produto do dobro do primeiro com metade do segundo = ".$a;?></h3>
		<?php $b = ($n1*3)+$n3;?>
	<h3><?php echo "b. A soma do triplo do primeiro com o terceiro = ".$b;?></h3>
		<?php $c = ($n3*$n3*$n3);?>
	<h3><?php echo "c. O terceiro elevado ao cubo = ".$c;?></h3>
</body>
</html>