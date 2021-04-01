<!DOCTYPE html>
<?php
	$n1= isset($_POST['n1']) ? $_POST['n1'] : 0;
	$n2= isset($_POST['n2']) ? $_POST['n2'] : 0;
	$titulo = "Média";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<form action="" method="post">
		Nota 1<input type="text" name="n1" id="n1" value=""><br>
		Nota 2<input type="text" name="n2" id="n2" value=""><br>
		<input type="submit" name="acao" id="acao" value="Verificar">
	</form>
		<?php
		$media=($n1+$n2)/2;
		if ($media >= 0 and $media <=3) {
			echo "<br>Reprovado!";
		}else if ($media > 3 and $media <=6.9) {
			echo "<br>Em exame!";
		}
		else if ($media >= 7 and $media <=10) {
			echo "<br>Aprovado!";
		}
		?>
</body>
</html>