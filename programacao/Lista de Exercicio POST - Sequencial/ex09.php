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
		$farenheit = 0;
		if(isset($_POST['farenheit'])){
			$farenheit = $_POST['farenheit'];
		}
		$celsius = (5*($farenheit-32)/9);
	?>
<div id="borda1">
	<img src="img/borda2.jpg">
</div>
<div id="corpo">
	<form action="" method="post">
		<br><br><br>
		<fieldset>
			<legend>Exercício 09</legend>
				<br>
				<label>Graus Farenheit: </label>
                <input type="number" name="farenheit" id="n" step="0.01" required value="<?php echo $farenheit ?>"/>
                <br><br>
                <center><input type="submit" value="Converter"></center>
				<br>
					<?php
				   		echo "<h4>".$farenheit."° Farenheit equivalem a ".$celsius."° Celsius"."</h4>";
					?>
		</fieldset>
	</form>
</div>
<div id="borda2">
	<img src="img/borda2.jpg">
</div>
</body>
</html>