<!DOCTYPE html>
<?php
	//$num= isset($_POST['num']) ? $_POST['num'] : 0;
	//$jogada= isset($_POST['jogada']) ? $_POST['jogada'] : '';
	$titulo = "While";
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
			while ($num>=0) {
				echo "Teste: ".$num."<br>";
				if ($num==20) {
					echo "Erro: X = 20<br>";	
					break;
				}
				$num++;
			}
		?>
</body>
</html>