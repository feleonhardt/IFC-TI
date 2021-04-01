<!DOCTYPE html>
<?php
	$tabuada= isset($_POST['tabuada']) ? $_POST['tabuada'] : 0;
	define("INICIO", 0);
	define("FIM", 10);
	$titulo = "Tabuada";
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
		Tabuada: <input type="text" name="tabuada" id="tabuada" value=""><br>
		<input type="submit" name="acao" id="acao" value="ENVIAR">
	</form>
		<?php
		for ($x=INICIO; $x <= FIM ; $x++) { 
			echo "<h4>".$tabuada." X ".$x." = ".($tabuada*$x)."</h4>";
		}

			//echo $tabuada."<br>";
			//echo INICIO."<br>";
			//echo FIM."<br>";
		?>
</body>
</html>