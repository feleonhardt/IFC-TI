<!DOCTYPE html>
<?php
	$nota= isset($_POST['nota']) ? $_POST['nota'] : 0;
	$titulo = "Nota";
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
		Nota: <input type="text" name="nota" id="nota" value=""><br>
		<input type="submit" name="acao" id="acao" value="ENVIAR">
	</form>
		<?php
			if ($nota>=0 and $nota<=10) {
				echo "<br>OK!";
			}else {
				echo "<br>Nota inválida!";
			}
		?>
</body>
</html>