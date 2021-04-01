<!DOCTYPE html>
<?php
	$l1= isset($_POST['l1']) ? $_POST['l1'] : 0;
	$l2= isset($_POST['l2']) ? $_POST['l2'] : 0;
	$l3= isset($_POST['l3']) ? $_POST['l3'] : 0;
	$titulo = "Triângulos";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<form action="" method="post">
		Lado 1<input type="text" name="l1" id="l1" value=""><br>
		Lado 2<input type="text" name="l2" id="l2" value=""><br>
		Lado 3<input type="text" name="l3" id="l3" value=""><br>
		<input type="submit" name="acao" id="acao" value="Verificar"><br>
	</form>
		<?php
			$soma1_2=$l1+$l2;
			$soma1_3=$l1+$l3;
			$soma3_2=$l3+$l2;
			if ($soma1_2 > $l3 and $soma1_3>$l2 and $soma3_2 > $l1) {
				echo "<br>É um triângulo!";
				if ($l1 == $l2 and $l2==$l3) {
					echo "<br>Tipo: Equilátero!";
				}
				else if ($l1 == $l2 and $l2 != $l3 or $l1 == $l2 and $l1 != $l3 or $l1 == $l3 and $l3 != $l2 or $l1 == $l3 and $l1 != $l2 or $l2 == $l3 and $l2 != $l1 or $l3 == $l2 and $l3 != $l1) {
					echo "<br>Tipo: Isósceles!";
				}else if ($l1 != $l2 and $l2 != $l3 and $l1 != $l3) {
					echo "<br>Tipo: Escaleno!";
				}
			}
			else{
				echo "<br>Não é um triângulo!";
			}
		?>
</body>
</html>