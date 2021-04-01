<!DOCTYPE html>
<?php
	$altura= isset($_POST['altura']) ? $_POST['altura'] : 0;
	$peso= isset($_POST['peso']) ? $_POST['peso'] : 0;
	$sexo= isset($_POST['sexo']) ? strtoupper($_POST['sexo']) : '';
	$titulo = "Exercício 9";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<form action="" method="post">
		Altura<input type="text" name="altura" id="altura" value=""><br>
		Peso<input type="text" name="peso" id="peso" value=""><br>
		Sexo<input type="text" name="sexo" id="sexo" maxlength="1" value=""><br>
		<input type="submit" name="acao" id="acao" value="Calcular">
	</form>
		<h3><?php
				switch ($sexo) {
					case 'M':
						$peso_ideal=(72.7*$altura) - 58;
						if ($peso<$peso_ideal) {
							echo "<h2>Altura: ".$altura."<br>Sexo: ".$sexo."<br>Peso: ".$peso."<br>Peso ideal: ".$peso_ideal."<br>Abaixo do peso!</h2>";
						}elseif ($peso>$peso_ideal) {
							echo "<h2>Altura: ".$altura."<br>Sexo: ".$sexo."<br>Peso: ".$peso."<br>Peso ideal: ".$peso_ideal."<br>Acima do peso!</h2>";
						}else{
							echo "<h2>Altura: ".$altura."<br>Sexo: ".$sexo."<br>Peso: ".$peso."<br>Peso ideal: ".$peso_ideal."<br>No peso ideal!</h2>";
						}
						break;
					case 'F':
						$peso_ideal=(62.1*$altura) - 44.7;
						if ($peso<$peso_ideal) {
							echo "<h2>Altura: ".$altura."<br>Sexo: ".$sexo."<br>Peso: ".$peso."<br>Peso ideal: ".$peso_ideal."<br>Abaixo do peso!</h2>";
						}elseif ($peso>$peso_ideal) {
							echo "<h2>Altura: ".$altura."<br>Sexo: ".$sexo."<br>Peso: ".$peso."<br>Peso ideal: ".$peso_ideal."<br>Acima do peso!</h2>";
						}else{
							echo "<h2>Altura: ".$altura."<br>Sexo: ".$sexo."<br>Peso: ".$peso."<br>Peso ideal: ".$peso_ideal."<br>No peso ideal!</h2>";
						}
						break;
					default:
						echo "<h2>Erro...</h2>";
						break;
				}
			 ?></h3>
</body>
</html>