<!DOCTYPE html>
<?php
	$turno= isset($_GET['turno']) ? strtoupper($_GET['turno']) : '';
	$titulo = "Exercício 11";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<form action="" method="get">
		<h3>Digite: <br>
			M - matutino<br>
			V - verpertino<br>
			N - noturno</h3>
		Turno<input type="text" name="turno" id="turno" maxlength="1" placeholder="Digite a letra aqui..." value=""><br>
		<input type="submit" name="acao" id="acao" value="Verificar">
	</form>
		<h3><?php 
				switch ($turno) {
					case 'M':
						echo "<h3> Bom dia! </h3>";
						break;
					case 'V':
						echo "<h3> Boa tarde! </h3>";
						break;
					case 'N':
						echo "<h3> Boa noite! </h3>";
						break;
					default:
						echo "<h3> Erro... </h3>";
						break;
				}
			 ?></h3>
</body>
</html>