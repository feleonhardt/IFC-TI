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
	for ($i = 0; $i < 5; $i++) {
		$num[$i] = isset($_POST['n'.$i])?$_POST['n'.$i]:7;
	}
?>
<body>
	<div id="box">
	<form action="" method="post">
		<br><br>
		<fieldset>
			<legend>Exercicio 08</legend>
			<center>
				<?php 
					$x = 1;
					for ($i = 0; $i < 5; $i++) {
						echo "<label>Número ".$x.": </label>";
                		echo "<input type='number' name='n".$i."' step='0.001' required value='".$num[$i]."'/><br><br>";
                		$x++;
					}
				?>
				<br><input type="submit" value="Calcular"><br><br>
				<?php 
					$soma = 0;
					$multiplicacao = 1;
					echo "Números: <br>";
					for ($i = 0; $i < 5; $i++) {
						$soma = $soma + $num[$i];
						$multiplicacao = $multiplicacao * $num[$i];
						echo $num[$i]."<br>";
					}
					echo "Soma = ".$soma;
					echo "<br>Multiplicação = ".$multiplicacao;
				?>
			</center>
		</fieldset>
	</form>
	</div>
</body>
</html>