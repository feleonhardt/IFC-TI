<!DOCTYPE html>
<?php
	$num = isset($_POST['num']) ? $_POST['num'] : 0;
	$titulo = "Semana";
?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
</head>
<body>
	<form action="" method="post">
		Número do dia:<input type="text" name="num" id="num"><br>
		<input type="submit" name="enviar" id="enviar" value="ENVIAR">
	</form>
	<?php
		switch ($num) {
			case 1:
				echo "<br>Domingo!";
				break;
			case 2:
				echo "<br>Segunda-feira!";
				break;
			case 3:
				echo "<br>Terça-feira!";
				break;
			case 4:
				echo "<br>Quarta-feira!";
				break;
			case 5:
				echo "<br>Quinta-feira!";
				break;
			case 6:
				echo "<br>Sexta-feira!";
				break;
			case 7:
				echo "<br>Sábado!";
				break;
			
			default:
				echo "<br>Valor inválido!";
				break;
		}
	?>
</body>
</html>