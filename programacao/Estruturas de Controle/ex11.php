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
		$letra = " ";
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
			<legend>Exercício 11</legend>
				<br>
				<label>M-Matutino <br>
				       V-Vespertino <br>
				       N- Noturno<br>
				   	   Digite uma letra: </label>
                <input type="text" name="letra" id="n" required/>
                <br><br>
                <center><input type="submit" value="Verificar"></center>
				<br>
					<?php
				   			if($letra == "M" || $letra == "m"){
				   				echo "Bom dia!";
				   			}
				   			elseif ($letra == "V" || $letra == "v") {
				   				echo "Boa tarde!";
				   			}
				   			elseif($letra == "N" || $letra == "n"){
				   				echo "Boa noite!";
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