<!DOCTYPE html>
<?php
	$num = isset($_POST['num']) ? $_POST['num'] : 0;
	$preco = isset($_POST['preco']) ? $_POST['preco'] : 0;
	$titulo = "Produto";
?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
</head>
<body>
	<form action="" method="post">
		Preço de custo:<input type="text" name="preco" id="preco"><br>
		Código de origem:<input type="text" name="num" id="num"><br>
		<input type="submit" name="enviar" id="enviar" value="ENVIAR"><br>
	</form>
	<?php
		switch ($num) {
			case 1:
				echo "Preço de custo: ".$preco."<br>";
				echo "O produto veio do Sul!";
				break;
			case 2:
				echo "Preço de custo: ".$preco."<br>";
				echo "O produto veio do Norte!";
				break;
			case 3:
				echo "Preço de custo: ".$preco."<br>";
				echo "O produto veio do Leste!";
				break;
			case 4:
				echo "Preço de custo: ".$preco."<br>";
				echo "O produto veio do Oeste!";
				break;
			case 5:
				echo "Preço de custo: ".$preco."<br>";
				echo "O produto veio do Nordeste!";
				break;
			case 6:
				echo "Preço de custo: ".$preco."<br>";
				echo "O produto veio do Nordeste!";
				break;
			case 7:
				echo "Preço de custo: ".$preco."<br>";
				echo "O produto veio do Centro-oeste!";
				break;
			case 8:
				echo "Preço de custo: ".$preco."<br>";
				echo "O produto veio do Centro-oeste!";
				break;
			default:
				echo "Preço de custo: ".$preco."<br>";
				echo "O produto é importado!";
				break;
		}
	?>
</body>
</html>