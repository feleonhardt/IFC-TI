<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo.css" />
    <meta charset="UTF-8" />
    <link rel="shortcut icon" type="image/x-icon" href="img/php.png" />
    <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <title>Exercicios PHP</title>
</head>
<body>
	<?php
		$raio = 0;
		if(isset($_POST['raio'])){
			$raio = $_POST['raio'];
		}
		$area = 3.14*($raio*$raio);
	?>
<div id="borda1">
	<img src="img/borda2.jpg">
</div>
<div id="corpo">
	<form action="" method="post">
		<br><br><br>
		<fieldset>
			<legend>Exercício 06</legend>
				<br>
				<label>Raio do círculo: </label>
                <input type="number" name="raio" id="n" step="0.00001" required value="<?php echo $raio ?>"/>
                <br><br>
                <center><input type="submit" value="Calcular área"></center>
				<br>
					<?php
				   		echo "<h4>A área de um círculo com raio de ".$raio." é igual a ".$area."</h4>";
					?>
		</fieldset>
	</form>
</div>
<div id="borda2">
	<img src="img/borda2.jpg">
</div>
</body>
</html>