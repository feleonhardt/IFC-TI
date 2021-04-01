<!DOCTYPE html>
<?php
	//$jogada= isset($_POST['jogada']) ? $_POST['jogada'] : '';
	$titulo = "For";
	//$num= isset($_POST['num']) ? $_POST['num'] : 0;
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>	
		<?php
			for ($x=0; $x <=5 ; $x++) { 
				echo "Teste: ".$x."<br>";
			}
		?>
</body>
</html>