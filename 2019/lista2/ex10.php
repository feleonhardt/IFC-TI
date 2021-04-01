<!DOCTYPE html>
<?php
	$num = array(); 
	for ($x=0; $x < 3; $x++) { 
		$num[$x]= isset($_POST['n'.$x]) ? $_POST['n'.$x] : 0;
	}
	$titulo = "Exercício 10";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<form action="" method="post">
		Número 1<input type="text" name="n0" id="n0" value=""><br>
		Número 2<input type="text" name="n1" id="n1" value=""><br>
		Número 3<input type="text" name="n2" id="n2" value=""><br>
		<input type="submit" name="acao" id="acao" value="Verificar">
	</form>
		<h3><?php
			sort($num);
			echo $num[0]." é o menor número!<br>".$num[2]." é o maior número!";
			 ?></h3>
</body>
</html>