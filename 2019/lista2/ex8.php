<!DOCTYPE html>
<?php
	$n1= isset($_POST['n1']) ? $_POST['n1'] : 0;
	$n2= isset($_POST['n2']) ? $_POST['n2'] : 0;
	$titulo = "Exercício 8";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<form action="" method="post">
		Nota 1<input type="text" name="n1" id="n1" value=""><br>
		Nota 2<input type="text" name="n2" id="n2" value=""><br>
		<input type="submit" name="acao" id="acao" value="Verificar">
	</form>
		<h3><?php 
		$med = ($n1 + $n2)/2;
				if ($med>=7) {
					echo "<h2>Aprovado</h2>";
				}else {
					echo "<h2>Reprovado</h2>";
				}
			 ?></h3>
</body>
</html>