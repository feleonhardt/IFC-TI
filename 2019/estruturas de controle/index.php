<!DOCTYPE html>
<?php
	$titulo = "Estruturas de controle";
	//$n1 = 0;
	//if (isset($_POST["n1"])) 
	//	$n1 = $_POST["n1"];
	$n1= isset($_POST['n1']) ? $_POST['n1'] : 0;
	//$n2 = 0;
	//if (isset($_POST["n2"])) 
	//	$n2 = $_POST["n2"];
	//$n2= isset($_POST['n2']) ? $_POST['n2'] : 0;
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<h1><?php echo $titulo;?></h1>
	
		<?php
			if ($n1>0)
				echo "<h3>".$n1." é Positivo </h3>";
			elseif ($n1<0)
				echo "<h3>".$n1." é Negativo </h3>";
			else
				echo "<h3> Zero </h3>";
		?>
		<hr>
		<?php
			$sexo=isset($_POST['sexo']) ? strtoupper($_POST['sexo']) : '';
		?>
		<form action="" method="post">
			Número 1:<input type="text" name="n1" id="n1" value=""><br>
			Sexo:<input type="text" name="sexo" id="sexo" maxlength="1" value=""><br>
			<input type="submit" name="enviar" id="enviar" value="Enviar">
		</form>
			<?php 
				switch ($sexo) {
					case 'F':
						echo "<h3> Feminino </h3>";
						break;
					case 'M':
						echo "<h3> Masculino </h3>";
						break;
					default:
						echo "<h3> Erro </h3>";
						break;
				}
			 ?>

</body>
</html>