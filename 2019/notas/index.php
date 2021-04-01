<!DOCTYPE html>
<?php
	$n1 = isset($_POST['n1']) ? $_POST['n1'] : 0;
	$n2 = isset($_POST['n2']) ? $_POST['n2'] : 0;
	$n3 = isset($_POST['n3']) ? $_POST['n3'] : 0;
	$n4 = isset($_POST['n4']) ? $_POST['n4'] : 0;
	$title = "NOTAS";
	?>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title><?php echo $title;?></title>
</head>
<body>
	<form action="" method="post">
		Nota 1:<input type="text" name="n1" id="n1" value=""><br>
		Nota 2:<input type="text" name="n2" id="n2" value=""><br>
		Nota 3:<input type="text" name="n3" id="n3" value=""><br>
		Nota 4:<input type="text" name="n4" id="n4" value=""><br><br>
		<input type="submit" value="Calcular">
	</form>
	<?php
		
		echo "<h3>Nota 1: ".$n1."</h3>";
		echo "<h3>Nota 2: ".$n2."</h3>";
		echo "<h3>Nota 3: ".$n3."</h3>";
		echo "<h3>Nota 4: ".$n4."</h3>";

		$media = ($n1+$n2+$n3+$n4)/4.0;
		echo "<h3>Média: ".$media."</h3>";

		if ($media >= 7) {
			echo "<h3 style='color:blue'>Você está APROVADO!</h3>";
		}
		else{
			echo "<h3 style='color:red'>Você está REPROVADO!</h3>";
		}
	?>
</body>
</html>