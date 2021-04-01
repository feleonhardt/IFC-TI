<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo.css" />
    <meta charset="UTF-8" />
    <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <title>Exercicios PHP</title>
</head>
<style type="text/css">
	body{
		background-color: #90EE90;
	}
</style>
<body>
	<form action="" method="post">
		<br>
		<fieldset>
			<legend>Exercício 15</legend>
				<?php 
					echo "S = ";
					$contA = 37;
					$contB = 38;
					$soma = 0;
					for ($i = 1; $i <= 37 ; $i++) { 
						if($i != 37){
							echo "(".$contA."*".$contB.")/".$i." + ";
							$soma = (($contA*$contB)/$i) + $soma;
							$contA--;
							$contB--;	
						}
						else{
							echo "(".$contA."*".$contB.")/".$i;
							$soma = (($contA*$contB)/$i) + $soma;
							$contA--;
							$contB--;
						}
					}
					echo "<br><br>Soma = ".$soma;
				?>
		</fieldset>
	</form>
	<br>
	<br>
</body>
</html>