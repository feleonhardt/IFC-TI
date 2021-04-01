<!DOCTYPE html>
<?php
	$sexo= isset($_POST['sexo']) ? strtoupper($_POST['sexo']) : '';
	$titulo = "Exercício 3";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<form action="" method="post">
		Sexo<input type="text" name="sexo" id="sexo" maxlength="1" value=""><br>
		<input type="submit" name="acao" id="acao" value="Verificar">
	</form>
		<h3><?php 
				switch ($sexo) {
					case 'F':
						echo "<h3> Feminino </h3>";
						break;
					case 'M':
						echo "<h3> Masculino </h3>";
						break;
					default:
						echo "<h3> Erro </h3>";
						break;
				}
			 ?></h3>
</body>
</html>