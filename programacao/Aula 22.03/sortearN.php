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
	img{
		width: 200px;
		height: 100px;
	}
	body{
		background-color: #90EE90;
	}
</style>
<?php 
	define("NUMEROS", 20);
	define("MINIMO", 1);
	define("MAXIMO", 60);
?>
<body>
	<form action="" method="post">
		<br>
		<fieldset>
			<legend>Números Aleatórios (de 0 a 19)</legend>
			<center>
				<?php 
					mt_srand((double) microtime()*1000000);

					for ($i = 0; $i < NUMEROS; $i++)
						echo mt_rand(MINIMO, MAXIMO)."<br>";
				?>
			</center>
		</fieldset>
		<fieldset>
			<legend>Números Aleatórios (de 20 a 1)</legend>
			<center>
				<?php 
					mt_srand((double) microtime()*1000000);

					for ($i = NUMEROS; $i > 0; $i--)
						echo mt_rand(MINIMO, MAXIMO)."<br>";
				?>
			</center>
		</fieldset>
	</form>
	<br><br>
</body>
</html>