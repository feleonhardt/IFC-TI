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
		$letra = "";
		if(isset($_POST['letra'])){
			$letra = $_POST['letra'];
		}
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
				<label>Digite uma letra: </label>
                <input type="text" name="letra" id="n" required/>
                <br><br>
                <center><input type="submit" value="Verificar"></center>
				<br>
					<?php
				   			if($letra == "M" || $letra == "m" || $letra == "masculino" || $letra == "Masculino"){
				   				echo "M - Masculino";
				   			}
				   			elseif ($letra == "F" || $letra == "f" || $letra == "feminino" || $letra == "Feminino") {
				   				echo "F - Feminino";
				   			}
				   			elseif($letra != "M" && $letra != "F"){
				   				echo "A letra digitada não foi 'F' nem 'M'";
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