<!DOCTYPE html>
<?php
	//$num= isset($_POST['num']) ? $_POST['num'] : 0;
	//$jogada= isset($_POST['jogada']) ? $_POST['jogada'] : '';
	$titulo = "Do while";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>	
		<?php
		$num=0;
			do{
				echo "Teste: ".$num."<br>";
				$num++;
			}while ($num<=5) 
		?>
</body>
</html>