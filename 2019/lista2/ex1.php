<!DOCTYPE html>
<?php
	$n1= isset($_POST['n1']) ? $_POST['n1'] : 0;
	$n2= isset($_POST['n2']) ? $_POST['n2'] : 0;
	$titulo = "Exercício 1";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<form action="" method="post">
		Número 1<input type="text" name="n1" id="n1" value=""><br>
		Número 2<input type="text" name="n2" id="n2" value=""><br>
		<input type="submit" name="acao" id="acao" value="Verificar">
	</form>
		<h3><?php 
			if ($n1>$n2)
				echo $n1." é o maior";
			elseif ($n1<$n2) 
				echo $n2." é o maior";
			else
				echo $n1." e ".$n2." são iguais";
	 	?></h3>
</body>
</html>