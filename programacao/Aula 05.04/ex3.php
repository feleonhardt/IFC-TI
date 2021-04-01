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
	$times = array("Palmeiras", "São Paulo", "Santos");
?>
<body>
	<div id="box">
	<form action="" method="post">
		<br><br>
		<fieldset>
			<legend>Vetor</legend>
			<center>
				<select>
				<?php 
					for ($i = 0; $i < count($times); $i++) { 
						echo '<option value=" '.$times[$i].'">'.$times[$i].'</option>';
					}
				?>
				</select>
			</center>
		</fieldset>
	</form>
	</div>
</body>
</html>