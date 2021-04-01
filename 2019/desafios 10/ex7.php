<!DOCTYPE html>
<?php
	$numero= isset($_POST['numero']) ? $_POST['numero'] : '';
	$titulo = "Exercício 7";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>	
	<h1><?php echo $titulo;?></h1>
	<form action="" method="post">
		Informe o valor de 'n': <input type="number" name="numero" id="numero" value=""><br>
		<input type="submit" name="acao" id="acao" value="CALCULAR">
	</form>
		<?php
		if ($numero!="") {
			$valor=(($numero-1)*2)+1;
			echo "<br>".$numero." / ".$valor;
		}
		else{
			echo "<br>Informe um valor válido!";
		}
		?>
</body>
</html>