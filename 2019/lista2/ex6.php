<!DOCTYPE html>
<?php
	$num= isset($_POST['num']) ? $_POST['num'] : 0;
	$titulo = "Exercício 6";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<form action="" method="post">
		Número<input type="number" name="num" id="num" value=""><br>
		<input type="submit" name="acao" id="acao" value="Verificar">
	</form>
		<h3><?php 
				if ($num%2==0) {
					$num++;
					echo "<h2>Era par e virou impar</h2>";
				}else {
					$num++;
					echo "<h2>Era impar e virou par</h2>";
				}
			 ?></h3>
</body>
</html>