<!DOCTYPE html>
<?php
	$ano= isset($_POST['ano']) ? $_POST['ano'] : 0000;
	$titulo = "Exercício 4";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<form action="" method="post">
		Ano<input type="number" name="ano" id="ano" maxlength="4" value=""><br>
		<input type="submit" name="acao" id="acao" value="Verificar">
	</form>
		<h3><?php 
				if ($ano%4==0) 
					echo $ano." é ano bissexto";
				else
					echo $ano." não é ano bissexto";
			 ?></h3>
</body>
</html>