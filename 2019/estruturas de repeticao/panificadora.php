<!DOCTYPE html>
<?php
	$preco= isset($_POST['preco']) ? $_POST['preco'] : 0;
	define("INICIO", 1);
	define("FIM", 50);
	$titulo = "preco";
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
		Preço unitário: <input type="text" name="preco" id="preco" value=""><br>
		<input type="submit" name="acao" id="acao" value="ENVIAR">
	</form>
		<?php
		echo "<br>Preço do Pão: R$ ".$preco."<br>";
		echo "Panificadora Pão de Ontem - Tabela de preços:<br>";
		for ($x=INICIO; $x <= FIM ; $x++) { 
			$valor=$preco*$x;
			$valor=number_format($valor, 2,',','.');
			echo "<br>".$x." - R$ ".$valor;
		}

			//echo $preco."<br>";
			//echo INICIO."<br>";
			//echo FIM."<br>";
		?>
</body>
</html>