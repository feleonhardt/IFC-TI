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
			<legend>Exercício 05</legend>
				<br>
				<label>Digite uma letra: </label>
                <input type="text" name="letra" id="n" required value="<?php echo $letra ?>"/>
                <br><br>
                <center><input type="submit" value="Verificar"></center>
				<br>
					<?php
				   		if($letra == "a" || $letra == "e" || $letra == "i" || $letra == "o" || $letra == "u" || $letra == "A" || $letra == "E" || $letra == "I" || $letra == "O" || $letra == "U"){
				   			echo "A letra é vogal";
				   		}
				   		else{
				   			echo "A letra não é uma vogal";
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