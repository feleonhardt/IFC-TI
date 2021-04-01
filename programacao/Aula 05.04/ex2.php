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
	$inicio = 10;
	$vet = array();
	for ($i = 0; $i < 10; $i++) { 
		$vet[$i] = $inicio;
		$inicio = $inicio + 10;
	}
?>
<body>
	<div id="box">
	<form action="" method="post">
		<br><br>
		<fieldset>
			<legend>Vetor</legend>
			<center>
				<?php 
					for ($i = 0; $i < count($vet); $i++) { 
						echo $vet[$i]."<br>";
					}
				?>
			</center>
		</fieldset>
	</form>
	</div>
</body>
</html>