<!DOCTYPE html>
<?php
	$n1 = isset($_POST['n1']) ? $_POST['n1'] : 0;
	$n2 = isset($_POST['n2']) ? $_POST['n2'] : 0;
	$n3 = isset($_POST['n3']) ? $_POST['n3'] : 0;
	$n4 = isset($_POST['n4']) ? $_POST['n4'] : 0;
	$titulo = "EXERCÍCIO 4"
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<form action="" method="post">
		1° nota: <input type="text" name="n1" id="n1" placeholder="Digite aqui...">
		<br>2° nota: <input type="text" name="n2" id="n2" placeholder="Digite aqui...">
		<br>3° nota: <input type="text" name="n3" id="n3" placeholder="Digite aqui...">
		<br>4° nota: <input type="text" name="n4" id="n4" placeholder="Digite aqui...">
		<input type="submit" name="enviar" id="enviar" value="Enviar">
	</form>
		<?php $media = ($n1 + $n2 + $n3 + $n4)/4;?>
	<h3><?php
		echo "Nota 1: ".$n1;
		echo "<br>Nota 2: ".$n2;
		echo "<br>Nota 3: ".$n3;
		echo "<br>Nota 4: ".$n4;
		echo "<br><br>Média: ".$media; ?></h3>
	
</body>
</html>