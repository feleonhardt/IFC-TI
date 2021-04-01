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
<div id="borda1">
	<img src="img/borda2.jpg">
</div>
<div id="corpo">
	<form action="exRes2.php" method="post">
		<br><br><br>
		<fieldset>
			<legend>Resolução 02</legend>
				<br>
				<label>Inclinação da torre em Graus: </label>
				<input type="number" name="graus" id="n" step="0.0001" /> 
				<br><br>  
				<label>Altura da torre em metros: </label>
				<input type="number" name="metros" id="n" step="0.0001" /> 
				<br><br>  
				<center><input type="submit" value="Resultado"></center>
				<br>
		</fieldset>
	</form>
</div>
<div id="borda2">
	<img src="img/borda2.jpg">
</div>
</body>
</html>