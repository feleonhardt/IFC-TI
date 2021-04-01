<!DOCTYPE html>
<?php
	$inicio= isset($_POST['inicio']) ? $_POST['inicio'] : 1;
	$fim= isset($_POST['fim']) ? $_POST['fim'] : 50;
	$titulo = "Números ímpares";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>	
	<h1><?php echo $titulo;?></h1>
	<form action="" method="post">
		Inicio: <input type="text" name="inicio" id="inicio" value="1">
		Fim: <input type="text" name="fim" id="fim" value="50"><br>
		<input type="submit" name="acao" id="acao" value="ESCREVER">
	</form>
		<?php
			for ($i=$inicio; $i <= $fim ; $i++) { 
				if ($i%2!=0) {
					echo "<br>".$i;
				}
			}
		?>
</body>
</html>