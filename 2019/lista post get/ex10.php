<!DOCTYPE html>
<?php
	$n1 =  isset($_POST['n1']) ? $_POST['n1'] : 0;
	$n2 =  isset($_POST['n2']) ? $_POST['n2'] : 0;
	$n3 =  isset($_POST['n3']) ? $_POST['n3'] : 0;
	$titulo = "EXERCÍCIO 10";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<form action="" method="post">
		Digite um número inteiro: <input type="text" name="n1" id="n1" placeholder="Digite aqui...">
		<br>Digite um número inteiro: <input type="text" name="n2" id="n2" placeholder="Digite aqui...">
		<br>Digite um número real: <input type="text" name="n3" id="n3" placeholder="Digite aqui...">
		<input type="submit" name="enviar" id="enviar" value="Calcular">
	</form>
		<?php 
		echo "<br>1°: ".$n1;
		echo "<br>2°: ".$n2;
		echo "<br>3°: ".$n3;
		$a = ($n1*2)*($n2/2);
		?>
	<h3><?php echo "a. O produto do dobro do primeiro com metade do segundo = ".$a;?></h3>
		<?php $b = ($n1*3)+$n3;?>
	<h3><?php echo "b. A soma do triplo do primeiro com o terceiro = ".$b;?></h3>
		<?php $c = ($n3*$n3*$n3);?>
	<h3><?php echo "c. O terceiro elevado ao cubo = ".$c;?></h3>
</body>
</html>