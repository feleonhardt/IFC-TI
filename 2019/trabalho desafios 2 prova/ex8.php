<!DOCTYPE html>
<?php
	$a= isset($_POST['a']) ? $_POST['a'] : 0;
	$titulo = "Anos";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<form action="" method="post">
		Ano: <input type="text" name="a" id="a" value=""><br>
		<input type="submit" name="acao" id="acao" value="Verificar"><br>
		
	</form>
		<?php
			if ($a %4==0) {
				echo "<br>O ano é bissexto!";
			}
			else{
				echo "<br>O ano não é bissexto!";
			}
		?>
</body>
</html>