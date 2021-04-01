<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo.css"/>
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <meta charset="UTF-8"/>
    <title>Vetor</title>
</head>
<?php
	for ($i = 0; $i < 4; $i++) {
		$n[$i] = isset($_POST['n'.$i])?$_POST['n'.$i]:7;
	}
?>
<body>
	<div id="box">
	<form action="" method="post">
		<br><br>
		<fieldset>
			<legend>Exercicio 03</legend>
			<center>
				<?php 
				$x = 1;
					for ($i = 0; $i < 4; $i++) {
						echo "<label>Nota ".$x.": </label>";
                		echo "<input type='number' name='n".$i."' step='0.001' required value='".$n[$i]."'/><br><br>";
                		$x++;
					}
				?>
				<br><input type="submit" value="Calcular"><br><br>
				<?php 
					$soma = 0;
					for ($i = 0; $i < 4; $i++) {
						$soma = $soma + $n[$i];
					}
					$media = $soma/4;
					echo "A média das notas ";
					for ($i = 0; $i < 4; $i++) {
						echo $n[$i].", ";
					}
					echo " é igual a ".$media;
				?>
			</center>
		</fieldset>
	</form>
	</div>
</body>
</html>