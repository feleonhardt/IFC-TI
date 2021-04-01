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
			<legend>Exercício 06</legend>
			<center>
				<?php 
					for ($i = 1; $i <= 50; $i++) { 
						if($i % 2 != 0){
							echo $i. "  ";
						}
					}
				?>
			</center>
		</fieldset>
	</form>
	<br><br>
</body>
</html>