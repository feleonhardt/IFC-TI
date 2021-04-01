<!DOCTYPE html>
<?php
	$l1= isset($_POST['l1']) ? $_POST['l1'] : 0;
	$l2= isset($_POST['l2']) ? $_POST['l2'] : 0;
	$l3= isset($_POST['l3']) ? $_POST['l3'] : 0;
	$titulo = "Idades";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<form action="" method="post">
		Idade 1<input type="text" name="l1" id="l1" value=""><br>
		Idade 2<input type="text" name="l2" id="l2" value=""><br>
		Idade 3<input type="text" name="l3" id="l3" value=""><br>
		<input type="submit" name="acao" id="acao" value="Verificar"><br>
	</form>
		<?php
			$media=($l1+$l2+$l3)/3;
			if ($media<25) {
				echo "<br>Turma Jovem!";
			}else if ($media>=25 and $media <=40) {
				echo "<br>Turma Adulta!";
			}else if ($media >40) {
				echo "<br>Turma Idosa!";
			}else{
				echo "<br>ERRO!";
			}
		?>
</body>
</html>