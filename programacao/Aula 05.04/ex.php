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
	$vet = array(10, 20, 30, 40, 50, 60, 70, 80, 90, 100);
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