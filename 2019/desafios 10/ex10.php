<!DOCTYPE html>
<?php
	$z= isset($_POST['numero']) ? $_POST['numero'] : '';
	$x= isset($_POST['inicio']) ? $_POST['inicio'] : '';
	$y= isset($_POST['fim']) ? $_POST['fim'] : '';
	$soma=0;
	$cont=0;
	$titulo = "Gerador";
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
		Gerar números de (X): <input type="number" name="inicio" id="inicio" value="">
		Até (Y): <input type="number" name="fim" id="fim" value=""> Com intervalos de (Z): <input type="number" name="numero" id="numero" value="1"><br>
		<input type="submit" name="acao" id="acao" value="CALCULAR">
	</form>
		<?php
		if ($z!="") {
			echo "<br>Série: ";
			for ($i=$x; $i <=$y ; $i=$i+$z) { 
				echo "<br>".$i;
				$soma+=$i;
				$cont++;
			}
			$media=$soma/$cont;
			echo "<br>Soma: ".$soma;
			echo "<br>Média: ".$media;
			echo "<br>Quantidade: ".$cont;
		}
		else{
			echo "<br>Informe valores válidos!";
		}
		?>
</body>
</html>