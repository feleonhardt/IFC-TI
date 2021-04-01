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
		$num1 = 0;
		if(isset($_POST['n1'])){
			$num1 = $_POST['n1'];
		}
		$num2 = 0;
		if(isset($_POST['n2'])){
			$num2 = $_POST['n2'];
		}
		$num3 = 0;
		if(isset($_POST['n3'])){
			$num3 = $_POST['n3'];
		}
		$a = ($num1*2) * ($num2/2);
		$b = ($num1*3) + $num3;
		$c = $num3*$num3*$num3;
	?>
<div id="borda1">
	<img src="img/borda2.jpg">
</div>
<div id="corpo">
	<form action="" method="post">
		<br>
		<fieldset>
			<legend>Exercício 10</legend>
				<br>
				<label>Número inteiro 1: </label>
                <input type="number" name="n1" id="n" required value="<?php echo $num1 ?>"/>
                <br><br>
                <label>Número inteiro 2: </label>
                <input type="number" name="n2" id="n" required value="<?php echo $num2 ?>"/>
                <br><br>
                <label>Número real: </label>
                <input type="number" name="n3" id="n" step="0.0001" required value="<?php echo $num3 ?>"/>
                <br><br>
                <center><input type="submit" value="Calcular"></center>
				<br>
					<?php
				   		echo "<h4>a. (".$num1."*2) * (".$num2."/2) = ".$a."<br>b. (".$num1."*3) + ".$num3." = ".$b."<br>c. ".$num3."*".$num3."*".$num3." = ".$c."</h4>";
					?>
		</fieldset>
	</form>
</div>
<div id="borda2">
	<img src="img/borda2.jpg">
</div>
</body>
</html>