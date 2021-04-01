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
	$n1 = 0;
	if(isset($_POST['n1'])){
		$n1 = $_POST['n1'];
	}
	$n2 = 0;
	if(isset($_POST['n2'])){
		$n2 = $_POST['n2'];
	}
	$n3 = 0;
	if(isset($_POST['n3'])){
		$n3 = $_POST['n3'];
	}
	$n4 = 0;
	if(isset($_POST['n4'])){
		$n4 = $_POST['n4'];
	}
	$media = ($n1+$n2+$n3+$n4)/4;
?>
<div id="borda1">
	<img src="img/borda2.jpg">
</div>
<div id="corpo">
	<form action="" method="post">
		<br>
		<fieldset>
			<legend>Exercício 04</legend>
				<br>
				<label>Nota 1: </label>
                <input type="number" name="n1" id="n" step="0.0001" required value="<?php echo $n1 ?>"/>
                <br><br>
                <label>Nota 2: </label>
                <input type="number" name="n2" id="n" step="0.0001" required value="<?php echo $n2 ?>"/>
                <br><br>
                <label>Nota 3: </label>
                <input type="number" name="n3" id="n" step="0.0001" required value="<?php echo $n3 ?>"/>
                <br><br>
                <label>Nota 4: </label>
                <input type="number" name="n4" id="n" step="0.0001" required value="<?php echo $n4 ?>"/>
                <br><br>
                <center><input type="submit" value="Calcular média"></center>
				<br>
					<?php
				   		echo "<h4>Com as notas: ".$n1.", ".$n2.", ".$n3." e ".$n4.". A média final é igual a ".$media."</h4>";
					?>
		</fieldset>
	</form>
</div>
<div id="borda2">
	<img src="img/borda2.jpg">
</div>
</body>
</html>