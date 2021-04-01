<!DOCTYPE html>
<?php
	
	$carne= isset($_POST['carne']) ? $_POST['carne'] : '';
	$pagamento= isset($_POST['pagamento']) ? $_POST['pagamento'] : '';
	$kg= isset($_POST['kg']) ? $_POST['kg'] : 0;
	$titulo = "Frutas";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<form action="" method="post">
		Tipo de carne:<input type="radio" name="carne" id="carne" value="f" checked="">Filé duplo
		<input type="radio" name="carne" id="carne" value="a">Alcatra
		<input type="radio" name="carne" id="carne" value="p">Picanha<br>
		Quantidade (kg):<input type="text" name="kg" id="kg"><br>
		Tipo de pagamento:<input type="radio" name="pagamento" id="pagamento" value="dinheiro" checked="">Dinheiro
		<input type="radio" name="pagamento" id="pagamento" value="cartao">Cartão
		<input type="radio" name="pagamento" id="pagamento" value="tabajara">Cartão Tabajara<br>
		<input type="submit" name="acao" id="acao" value="Comprar">
	</form>
	<?php
	if ($kg>0) {
		if ($kg<=5) {
			switch ($carne) {
				case 'f':
					$preco=$kg*4.9;
					$tipo='Filé duplo';
					break;
				case 'a':
					$preco=$kg*5.9;
					$tipo='Alcatra';
					break;
				case 'p':
					$preco=$kg*6.9;
					$tipo='Picanha';
					break;
				default:
					$preco=0;
					$tipo='ERRO';
					break;
			}
		}else {
			switch ($carne) {
				case 'f':
					$preco=$kg*5.8;
					$tipo='Filé duplo';
					break;
				case 'a':
					$preco=$kg*6.8;
					$tipo='Alcatra';
					break;
				case 'p':
					$preco=$kg*7.8;
					$tipo='Picanha';
					break;
				default:
					$preco=0;
					$tipo='ERRO';
					break;
			}
		}
		if ($pagamento=='tabajara') {
			$desconto=$preco*0.05;		
		}else{
			$desconto=$preco*0;	
		}
		$preco_total=$preco-$desconto;

		$preco=number_format($preco,2,',','.');
		$desconto=number_format($desconto,2,',','.');
		$preco_total=number_format($preco_total,2,',','.');
		echo "<br>---NOTA FISCAL---";
		echo "<br>Produto - - - Qnt.";
		echo "<br>".$tipo." - - ".$kg;
		echo "<br>Preço: R$ ".$preco;
		echo "<br>Desconto: R$ ".$desconto;
		echo "<br>------------------";
		echo "<br>Valor total: R$ ".$preco_total;
	}else{
		echo "<br>ERRO";
	}
	?>
</body>
</html>