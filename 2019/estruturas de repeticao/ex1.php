<!DOCTYPE html>
<?php
	$num= isset($_POST['num']) ? $_POST['num'] : 0;
	//$jogada= isset($_POST['jogada']) ? $_POST['jogada'] : '';
	$titulo = "For";
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
		Número: <input type="text" name="num" id="num" value=""><br>
		<input type="submit" name="acao" id="acao" value="ENVIAR">
	</form>
		<?php
			for ($x=1; $x <=$num ; $x++) { 
				echo $x."<br>";
			}
		?>
</body>
</html>