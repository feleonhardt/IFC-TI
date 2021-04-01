<!DOCTYPE html>
<?php
	$letra= isset($_POST['letra']) ? strtoupper($_POST['letra']) : '';
	$titulo = "Exercício 5";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<form action="" method="post">
		Letra<input type="text" name="letra" id="letra" maxlength="1" value=""><br>
		<input type="submit" name="acao" id="acao" value="Verificar">
	</form>
		<h3><?php 
				switch ($letra) {
					case 'A':
						echo "<h3>".$letra." é vogal </h3>";
						break;
					case 'E':
						echo "<h3>".$letra." é vogal </h3>";
						break;
					case 'I':
						echo "<h3>".$letra." é vogal </h3>";
						break;
					case 'O':
						echo "<h3>".$letra." é vogal </h3>";
						break;
					case 'U':
						echo "<h3>".$letra." é vogal </h3>";
						break;
					default:
						echo "<h3>".$letra." não é vogal </h3>";
						break;
				}
			 ?></h3>
</body>
</html>