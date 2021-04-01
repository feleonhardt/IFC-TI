<!DOCTYPE html>
<?php
	$numero= isset($_POST['numero']) ? $_POST['numero'] : '';
	$titulo = "Fatorial";
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
		Número: <input type="number" name="numero" id="numero" value=""><br>
		<input type="submit" name="acao" id="acao" value="CALCULAR">
	</form>
		<?php
		if ($numero!="") {
			echo "<br>Fatorial de ".$numero.": ";
			echo $numero;
			$resul=$numero;
			for ($i=($numero-1); $i > 0; $i--) { 
				echo " x ".$i;
				$resul=$resul*$i;
			}
			echo " = ".$resul;
		}
		else{
			echo "<br>Informe um valor válido!";
		}
		?>
</body>
</html>