<!DOCTYPE html>
<?php
	$preco = isset($_POST['preco']) ? $_POST['preco'] : 0.0;
	$qnt = isset($_POST['qnt']) ? $_POST['qnt'] : 0;
	$titulo = "Tabela de preços";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
</head>
<body>
	<form action="" method="post">
		Preço unitário:<input type="text" name="preco" id="preco"><br>
		Quantidade:<input type="text" name="qnt" id="qnt"><br>
		<input type="submit" name="enviar" id="enviar" value="CALCULAR">
	</form>
	<?php
	if ($preco>0) {
		if ($qnt>0) {
		echo "Preço unitário: ".$preco."<br>";
		echo "Quantidade: ".$qnt."<br><br>";
			for ($i=1; $i <= $qnt ; $i++) { 
				echo $i." - R$ ".($preco*$i)."<br>";
			}
		}
		else{
			echo "<br><br>Quantidade deve ser maior que 0!";
		}
	}
	else{
		echo "<br><br>Preço deve ser maior que 0!";
	}
	?>
</body>
</html>