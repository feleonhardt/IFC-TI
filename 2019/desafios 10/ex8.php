<!DOCTYPE html>
<?php
	$numero= isset($_POST['numero']) ? $_POST['numero'] : '';
	$divisores=0;
	$titulo = "Primos";
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
			for ($j=$numero; $j >= 1 ; $j--) { 
				if (($numero%$j)==0) {
					$divisores++;
				}
			}
			if ($divisores==2) {
				echo "<br>".$numero." é primo!";
			}
			else{
				echo "<br>".$numero." não é primo!";
			}
		}
		else{
			echo "<br>Informe um valor válido!";
		}
		?>
</body>
</html>