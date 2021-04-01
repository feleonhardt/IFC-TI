<!DOCTYPE html>
<?php
	$n1= isset($_POST['n1']) ? $_POST['n1'] : 0;
	$titulo = "Exercício 2";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<form action="" method="post">
		Número<input type="text" name="n1" id="n1" value=""><br>
		<input type="submit" name="acao" id="acao" value="Verificar">
	</form>
		<h3><?php 
			if ($n1>0)
				echo $n1." é Positivo";
			elseif ($n1<0) 
				echo $n1." é Negativo";
			else
				echo $n1." é zero";
	 	?></h3>
</body>
</html>