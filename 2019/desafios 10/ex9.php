<!DOCTYPE html>
<?php
	$numero= isset($_POST['numero']) ? $_POST['numero'] : '';
	$inicio= isset($_POST['inicio']) ? $_POST['inicio'] : 0;
	$fim= isset($_POST['fim']) ? $_POST['fim'] : 10;
	$divisores=0;
	$titulo = "Tabuada";
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
		Iniciar em: <input type="number" name="inicio" id="inicio" value="0"> Terminar em: <input type="number" name="fim" id="fim" value="10"><br>
		<input type="submit" name="acao" id="acao" value="CALCULAR">
	</form>
		<?php
		if ($numero!="") {
			if ($inicio>$fim) {
				$aux=$inicio;
				$inicio=$fim;
				$fim=$aux;
			}
			echo "<br>Tabuada de: ".$numero."<br>";
			for ($j=$inicio; $j <= $fim ; $j++) { 
				echo $numero." x ".$j." = ".($numero*$j)."<br>";
			}
		}
		else{
			echo "<br>Informe um valor válido!";
		}
		?>
</body>
</html>