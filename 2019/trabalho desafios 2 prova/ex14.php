<!DOCTYPE html>
<?php
	$num= isset($_POST['num']) ? $_POST['num'] : 0;
	$titulo = "Número";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<form action="" method="post">
		Número: <input type="text" name="num" id="num" value=""><br>
		<input type="submit" name="acao" id="acao" value="Verificar"><br>
		
	</form>
		<?php
			if ($num==0) {
				echo "<br>".$num." é zero!";
			}else if ($num%2==0) {
				echo "<br>".$num." é par!";
			}else {
				echo "<br>".$num." é ímpar!";
			}
		?>
</body>
</html>