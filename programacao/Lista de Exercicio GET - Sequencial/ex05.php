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
		$metro = 0;
		if(isset($_GET['metro'])){
			$metro = $_GET['metro'];
		}
		$cm = $metro*100;
	?>
<div id="borda1">
	<img src="img/borda2.jpg">
</div>
<div id="corpo">
	<form action="" method="get">
		<br><br><br>
		<fieldset>
			<legend>Exercício 05</legend>
				<br>
				<label>Valor em metros: </label>
                <input type="number" name="metro" id="n" step="0.0001" required value="<?php echo $metro ?>"/>
                <br><br>
                <center><input type="submit" value="Converter"></center>
				<br>
					<?php
				   		echo "<h4>".$metro." metros equivale a ".$cm." centímetros</h4>";
					?>
		</fieldset>
	</form>
</div>
<div id="borda2">
	<img src="img/borda2.jpg">
</div>
</body>
</html>