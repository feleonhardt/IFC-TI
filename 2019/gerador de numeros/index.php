<!DOCTYPE html>
<?php
	$num = isset($_POST['num']) ? $_POST['num'] : 0;
	$titulo = "GERADOR";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
</head>
<body>
	<form action="" method="post">
		Quantidade <input type="text" name="num" id="num" value="">
		<input type="submit" name="enviar" value="Calcular">
	</form>
	<?php
		for ($i=0; $i<$num; $i++) { 
			echo "<br>";
			echo mt_rand(0,100);
			
		}	
	?>
</body>
</html>