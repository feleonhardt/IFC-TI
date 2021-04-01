<!DOCTYPE html>
<?php
	$l1= isset($_POST['l1']) ? $_POST['l1'] : 0;
	$l2= isset($_POST['l2']) ? $_POST['l2'] : 0;
	$l3= isset($_POST['l3']) ? $_POST['l3'] : 0;
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
		Nota 1<input type="text" name="l1" id="l1" value=""><br>
		Nota 2<input type="text" name="l2" id="l2" value=""><br>
		Nota 3<input type="text" name="l3" id="l3" value=""><br>
		<input type="submit" name="acao" id="acao" value="Verificar"><br>
	</form>
		<?php
		if ($l1!='' and $l2!='' and $l3!='') {
			$media=($l1+$l2+$l3)/3;
			if ($media==10) {
				echo "<br>".$media." - Aprovado com distinção!";
			}else if ($media>=7) {
				echo "<br>".$media." - Aprovado!";
			}else if ($media <7) {
				echo "<br>".$media." - Reprovado!";
			}else{
				echo "<br>ERRO!";
			}
		}
		?>
</body>
</html>