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
			<legend>Exercício 04</legend>
				<?php 
					$popA = 80000;
					$popB = 200000;
					$anos = 0;
					$crescA = 0.03;
					$crescB = 0.015;

					while ($popA <= $popB){
						$popA = $popA + ($popA * $crescA);
						$popB = $popB + ($popB * $crescB);
						$anos++;
					}

					echo "Após ".$anos." anos o país A ultrapassará ou igualará o país B em números de habitantes";
					echo "<br>País A: ".$popA;
					echo "<br>País B: ".$popB;
				?>
			</center>
		</fieldset>
	</form>
	<br><br>
</body>
</html>