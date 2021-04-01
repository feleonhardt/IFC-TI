<!DOCTYPE html>
<?php
	$base= isset($_POST['base']) ? $_POST['base'] : 0;
	$potencia= isset($_POST['potencia']) ? $_POST['potencia'] : 0;
	$resul=1;
	$titulo = "Potenciação";
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
		Base: <input type="text" name="base" id="base" value="">
		Potência: <input type="text" name="potencia" id="potencia" value=""><br>
		<input type="submit" name="acao" id="acao" value="CALCULAR">
	</form>
		<?php
		if ($base!="" and $potencia!="") {
			for ($i=1; $i <= $potencia ; $i++) { 
				$resul=$resul*$base;
			}
			echo "<br>".$base."^".$potencia." = ".$resul;
		}
		else{
			echo "<br>Informe dois valores válidos!";
		}
		?>
</body>
</html>