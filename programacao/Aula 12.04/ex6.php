<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo.css"/>
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet"/>
    <meta charset="UTF-8"/>
    <title>Vetor</title>
</head>
<body>
	<div id="box">
		<form action="ex06.php" method="post">
		<br><br>
			<fieldset>
				<legend>Exemplo checkboX</legend>
				<br>
	                <center>
	                <?php 
						for ($i = 0; $i < 5; $i++) {
							echo "<input type='text' name='v".$i."' required/><br><br>";
							$x++;
						}
					?>
					<br><br><input type="submit" value="Enviar">
				</center>
			</fieldset>
		</form>
	</div>
</body>
</html>