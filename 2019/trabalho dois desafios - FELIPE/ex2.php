<!DOCTYPE html>
<?php
	$n1 = isset($_POST['n1']) ? $_POST['n1'] : 0;
	$n2 = isset($_POST['n2']) ? $_POST['n2'] : 0;
	$n3 = isset($_POST['n3']) ? $_POST['n3'] : 0;
	$titulo = "Análise de resíduos";
?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
</head>
<body>
	<h1>Análise de resíduos</h1>
	<form action="" method="post">
		1º número:<input type="text" name="n1" id="n1"><br>
		2º número:<input type="text" name="n2" id="n2"><br>
		3º número:<input type="text" name="n3" id="n3"><br>
		<input type="submit" name="enviar" id="enviar" value="CALCULAR">
	</form>
	<?php
	if ($n1>$n2 and $n2>$n3) {
		echo "<br><br><h2>Contaminação acima dos limites permitidos!</h2>";
	}
	if ($n1<$n2 and $n2<$n3) {
		echo "<br><br><h2>Contaminação abaixo dos limites permitidos!</h2>";
	}
	if ($n1==$n2 and $n2==$n3) {
		echo "<br><br><h2>Sem contaminação!</h2>";
	}
	?>
</body>
</html>