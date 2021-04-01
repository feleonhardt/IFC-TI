<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo.css"/>
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet"/>
    <meta charset="UTF-8"/>
    <title>Vetor</title>
</head>
<?php
	for ($i = 0; $i < 5; $i++) {
		$v[$i] = isset($_POST['v'.$i])?$_POST['v'.$i]:1;
	}
?>
<body>
	<div id="box">
		<form action="ex06.php" method="post">
		<br><br>
			<fieldset>
				<legend>Exemplo checkboX</legend>
					<br>
	                <center>
	                <?php 
						for ($i = 0; $i < $x; $i++) {
							echo "<input type= 'checkbox' value='".$v[$i]."'>".$v[$i]."<br>";
						}
					?>
					</center>
			</fieldset>
		</form>
	</div>
</body>
</html>