<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo3.css" />
    <meta charset="UTF-8" />
    <link rel="shortcut icon" type="image/x-icon" href="img/php.png" />
    <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <title>Exercicio</title>
</head>
<body>
	<?php
		$l1 = 0;
		if(isset($_POST['l1'])){
			$l1 = $_POST['l1'];
		}
		$l2 = 0;
		if(isset($_POST['l2'])){
			$l2 = $_POST['l2'];
		}
		$l3 = 0;
		if(isset($_POST['l3'])){
			$l3 = $_POST['l3'];
		}
	?>
<div id="borda1">
	<img src="img/borda2.jpg">
</div>
<div id="corpo">
	<form action="" method="post">
		<br>
		<fieldset>
			<legend>Exercício 06</legend>
				<br>
				<label>Lado 1:</label>
                <input type="number" name="l1" id="n" step="0.001" />
                <br><br>
                <label>Lado 2:</label>
                <input type="number" name="l2" id="n" step="0.001" />
                <br><br>
                <label>Lado 3:</label>
                <input type="number" name="l3" id="n" step="0.001" />
                <br><br>
                <center><input type="submit" value="Verificar"></center>
				<br>
					<?php
						if((($l1+$l2)>$l3) && (($l1+$l3)>$l2) && (($l2+$l3)>$l1)){
							if(($l1 == $l2 && $l2 == $l3) || ($l1 == $l3 && $l3 == $l2) || ($l2 == $l1 && $l1 == $l3) || ($l2 == $l3 && $l3 == $l1) || ($l3 == $l1 && $l1 == $l2) || ($l3 == $l2 && $l2 == $l1)){
								echo "Os valores inseridos correspondem a um triângulo e pode ser classificado como equilátero";
							}
							elseif(($l1 == $l2 && $l2 != $l3) || ($l1 == $l3 && $l3 != $l2) || ($l2 == $l1 && $l1 != $l3) || ($l2 == $l3 && $l3 != $l1) || ($l3 == $l1 && $l1 != $l2) || ($l3 == $l2 && $l2 != $l1)){
								echo "Os valores inseridos correspondem a um triângulo e pode ser classificado como isósceles";
							}
							else{
								echo "Os valores inseridos correspondem a um triângulo e pode ser classificado como escaleno";
							}
						}
						else{
							echo "Os valores inseridos não correspondem a um triângulo";
						}
					?>
		</fieldset>
	</form>
</div>
<div id="borda2">
	<img src="img/borda2.jpg">
</div>
</body>
</html>