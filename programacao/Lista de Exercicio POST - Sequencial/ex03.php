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
			$n1= $_POST['n1'];
		}
		$n2 = 0;
		if(isset($_POST['n2'])){
			$n2= $_POST['n2'];
		}
		$soma = $n1 + $n2;
	?>
<div id="borda1">
	<img src="img/borda2.jpg">
</div>
<div id="corpo">
	<form action="" method="post">
		<br><br><br>
		<fieldset>
			<legend>Exercício 03</legend>
				<br>
				<label>Número 1: </label>
                <input type="number" name="n1" id="n" step="0.0001" required value="<?php echo $n1 ?>"/>
                <br><br>
                <label>Número 2: </label>
                <input type="number" name="n2" id="n" step="0.0001" required value="<?php echo $n2 ?>"/>
                <br><br>
                <center><input type="submit" value="Somar"></center>
				<br>
					<?php
				   		echo "<h4>A soma (".$n1." + ".$n2.") é igual a ".$soma."</h4>";
					?>
		</fieldset>
	</form>
</div>
<div id="borda2">
	<img src="img/borda2.jpg">
</div>
</body>
</html>