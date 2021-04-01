<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Aula PHP 22.02</title>
</head>
<body>
	<?php
		$x = 10;
		$y = 10;
		$z = 20;
		$n = "10";
		echo $x.' == '.$y.' resposta('.($x == $y).')<br>';
		echo $x.' == '.$n.' resposta('.($x == $n).')<br>';
		echo $x.' === '.$n.' resposta('.($x === $n).')<br>';
		echo $x.' != '.$z.' resposta('.($x != $z).')<br>';
		echo $x.' <> '.$z.' resposta('.($x <> $z).')<br>';
		echo $x.' !== '.$n.' resposta('.($x !== $n).')<br>';
		echo $x.' > '.$z.' resposta('.($x > $z).')<br>';
		echo $x.' < '.$z.' resposta('.($x < $z).')<br>';
		echo $x.' <= '.$y.' resposta('.($x <= $y).')<br>';
		echo $x.' >= '.$z.' resposta('.($x >= $z).')<br>';
		//1 = V e Nada = F 
	?>
</body>
</html>
