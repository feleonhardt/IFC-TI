<!DOCTYPE html>
<?php
	$peso = 8;
	$titulo = "Exercício 13";
	$excesso = 0;
	$multa = 0;
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
		<?php
			$excesso =  $peso - 50;
			$multa = $excesso*4;?>
	<h3><?php echo "Peso = ".$peso." Kg<br>";?></h3>
	<h3><?php echo "Excesso = ".$excesso." Kg<br>";?></h3>
	<h3><?php echo "Multa = R$ ".$multa."<br>";?></h3>
</body>
</html>