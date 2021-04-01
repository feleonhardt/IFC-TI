<!DOCTYPE html>
<?php
	$peso = isset($_GET['peso']) ? $_GET['peso'] : 0;
	$titulo = "Exercício 13";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<form action="" method="get">
		Peso: <input type="text" name="peso" id="peso" placeholder="Digite aqui...">
		<input type="submit" name="enviar" id="enviar" value="Calcular">
	</form>
		<?php
			$excesso =  $peso - 50;
			$multa = $excesso*4;?>
	<h3><?php echo "Peso = ".$peso." Kg<br>";?></h3>
	<h3><?php echo "Excesso = ".$excesso." Kg<br>";?></h3>
	<h3><?php echo "Multa = R$ ".$multa."<br>";?></h3>
</body>
</html>