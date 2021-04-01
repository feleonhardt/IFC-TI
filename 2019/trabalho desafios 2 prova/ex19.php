<!DOCTYPE html>
<?php
	
	$maca= isset($_POST['maca']) ? $_POST['maca'] : 0;
	$morango= isset($_POST['morango']) ? $_POST['morango'] : 0;
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
		Kg de maçã: <input type="text" name="maca" id="maca" value=""><br>
		Kg de morango: <input type="text" name="morango" id="morango" value=""><br>
		<input type="submit" name="acao" id="acao" value="Verificar"><br>
	</form>
	<?php
		if ($maca<=5) {
			$preco_maca=$maca*1.8;
		}else{
			$preco_maca=$maca*1.5;
		}
		if ($morango<=5) {
			$preco_morango=$morango*2.5;
		}else{
			$preco_morango=$morango*2.2;
		}
		$kg=$maca+$morango;
		$preco_total=$preco_maca+$preco_morango;
		if ($kg>8) {
			$desconto=$preco_total*0.1;
		}elseif ($preco_total>25) {
			$desconto=$preco_total*0.1;
		}else{
			$desconto=0;
		}
		$preco=$preco_total-$desconto;
		$preco=number_format($preco, 2,',','.');
		echo "<br>Total a pagar: R$ ".$preco;
	?>
</body>
</html>