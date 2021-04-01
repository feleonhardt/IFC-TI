<!DOCTYPE html>
<?php
	$nume = array();
	for ($x=0; $x < 3; $x++) { 
		$nume[$x]= isset($_POST['n'.$x]) ? $_POST['n'.$x] : 0;
	}
	$titulo = "Exercício 7";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<form action="" method="post">
		Número 1<input type="number" name="n0" id="n0" value=""><br>
		Número 2<input type="number" name="n1" id="n1" value=""><br>
		Número 3<input type="number" name="n2" id="n2" value=""><br>
		<input type="submit" name="acao" id="acao" value="Verificar">
	</form>
		<h3><?php 
				sort($nume);
				for ($i=0; $i <3 ; $i++) { 
					echo $nume[$i]." | ";
				}
			 ?></h3>
</body>
</html>