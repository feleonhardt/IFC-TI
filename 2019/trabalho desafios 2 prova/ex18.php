<!DOCTYPE html>
<?php
	
	$litros= isset($_POST['litros']) ? $_POST['litros'] : 0;
	$tipo= isset($_POST['tipo']) ? strtoupper($_POST['tipo']) : '';
	$titulo = "Combustível";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<form action="" method="post">
		Litros: <input type="text" name="litros" id="litros" value=""><br>
		Tipo (A/G): <input type="text" name="tipo" id="tipo" maxlength="1" value=""><br>
		<input type="submit" name="acao" id="acao" value="Verificar"><br>
	</form>
	<?php
	if ($tipo=='A' or $tipo=='G') {
		if ($tipo=='A') {
			$preco=$litros*1.9;
			if ($litros<=20) {
				$desconto=(1.9*0.03)*$litros;
			}else{
				$desconto=(1.9*0.05)*$litros;
			}
		}else if ($tipo=='G') {
			$preco=$litros*2.5;
			if ($litros<=20) {
				$desconto=(1.9*0.04)*$litros;
			}else{
				$desconto=(1.9*0.06)*$litros;
			}
		}
		$total=$preco-$desconto;
		echo "<br>".$litros." Litros de ";
		if ($tipo=='A') {
			echo "Álcool";
		}else{
			echo "Gasolina";
		}
		echo " custarão: R$ ".$total;
	}else{
		echo "<br>Tipo inválido!";
	}
	?>
</body>
</html>