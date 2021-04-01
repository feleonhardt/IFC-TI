<!DOCTYPE html>
<?php
	
	$p1= isset($_POST['p1']) ? $_POST['p1'] : '';
	$p2= isset($_POST['p2']) ? $_POST['p2'] : '';
	$p3= isset($_POST['p3']) ? $_POST['p3'] : '';
	$p4= isset($_POST['p4']) ? $_POST['p4'] : '';
	$p5= isset($_POST['p5']) ? $_POST['p5'] : '';
	$titulo = "Caso";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<form action="" method="post">
		Telefonou para a vítima?<input type="radio" name="p1" id="p1" value="1" checked="">Sim
		<input type="radio" name="p1" id="p1" value="0">Não<br>

		Esteve no local do crime?<input type="radio" name="p2" id="p2" value="1" checked="">Sim
		<input type="radio" name="p2" id="p2" value="0">Não<br>

		Mora perto da vítima?<input type="radio" name="p3" id="p3" value="1" checked="">Sim
		<input type="radio" name="p3" id="p3" value="0">Não<br>

		Devia para a vítima?<input type="radio" name="p4" id="p4" value="1" checked="">Sim
		<input type="radio" name="p4" id="p4" value="0">Não<br>

		Já trabalhou com a vítima? <input type="radio" name="p5" id="p5" value="1" checked="">Sim
		<input type="radio" name="p5" id="p5" value="0">Não<br>

		<input type="submit" name="acao" id="acao" value="Verificar"><br>
	</form>
	<?php
	if ($p1!='') {
		$resultado=$p1+$p2+$p3+$p4+$p5;
		if ($resultado==2) {
			echo "<br>SUSPEITO!";
		}else if ($resultado==3 or $resultado==4) {
			echo "<br>CÚMPLICE!";
		}else if ($resultado==5) {
			echo "<br>ASSASSINO!";
		}else{
			echo "<br>INOCENTE!";
		}
	}
	?>
</body>
</html>