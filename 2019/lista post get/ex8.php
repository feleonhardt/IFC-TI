<!DOCTYPE html>
<?php
	$porHora = isset($_POST['porHora']) ? $_POST['porHora'] : 0;
	$trabalhadas = isset($_POST['trabalhadas']) ? $_POST['trabalhadas'] : 0;
	$titulo = "EXERCÍCIO 8";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<form action="" method="post">
		Horas trabalhadas: <input type="text" name="trabalhadas" id="trabalhadas" placeholder="Digite aqui...">
		<br>Valor por hora trabalhada: <input type="text" name="porHora" id="porHora" placeholder="Digite aqui...">
		<input type="submit" name="enviar" id="enviar" value="Calcular">
	</form>
		<?php $total = $porHora*$trabalhadas;
		echo "<h3>Por Hora = R$ ".$porHora." | Horas Trabalhadas = ".$trabalhadas." | Total = R$ ".$total."</h3>";?>
	
</body>
</html>