<!DOCTYPE html>
<?php
	$num = isset($_POST['num']) ? $_POST['num'] : 0;
	$titulo = "TABUADA";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
</head>
<body>
	<form action="" method="post">
		Tabuada <input type="text" name="num" id="num" value="">
		<input type="submit" name="enviar" value="Calcular">
	</form>


	<?php
		if ($num%2==0) {
			$color='blue';
		}
		else{
			$color='red';
		}
		for ($i=0; $i<=10; $i++) { 
			$x = $num*$i;
			echo "<h3 style='color:$color'>".$num." x ".$i." = ".$x."</h3>";
		}	
	?>







	<!--<?php
	if ($num%2==0) {
		for ($i=0; $i<=10; $i++) { 
			$x = $num*$i;
			echo "<h3 style='color:blue'>".$num." x ".$i." = ".$x."</h3>";
		}
	}
	else{
			for ($i=0; $i<=10; $i++) { 
				$x = $num*$i;
				echo "<h3 style='color:red'>".$num." x ".$i." = ".$x."</h3>";
			}	
		}?>-->
</body>
</html>