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
	$vet = array("primeiro" => 123, "segundo" => "Objeto", "terceiro" => true, "quarto" => 2.45);
?>
<body>
	<div id="box">
	<form action="" method="post">
		<br><br>
		<fieldset>
			<legend>Vetor</legend>
			<center>
				<?php 
					echo $vet["primeiro"]."<br><br>";
					var_dump($vet); //mostra o vetor 
				?>
			</center>
		</fieldset>
	</form>
	</div>
</body>
</html>