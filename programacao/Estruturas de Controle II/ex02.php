<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo3.css" />
    <meta charset="UTF-8" />
    <link rel="shortcut icon" type="image/x-icon" href="img/php.png" />
    <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <title>Exercicios PHP</title>
</head>
<body>
	<?php
		$n = "0";
		if(isset($_POST['n'])){
			$n = $_POST['n'];
		}
	?>
<div id="borda1">
	<img src="img/borda2.jpg">
</div>
<div id="corpo">
	<form action="" method="post">
		<br><br><br>
		<fieldset>
			<legend>Exercício 02</legend>
				<br>
				<label>Número: </label>
                <input type="number" name="n" id="n" step="0.0001"/>
                <br><br>
                <center><input type="submit" value="Verificar"></center>
				<br>
					<?php
				   		switch ($n){
				   			case '1':
				   				echo "1 - Domingo";
				   				break;
				   			case '2':
				   				echo "2 - Segunda";
				   				break;
				   			case '3':
				   				echo "3 - Terça";
				   				break;
				   			case '4':
				   				echo "4 - Quarta";
				   				break;
				   			case '5':
				   				echo "5 - Quinta";
				   				break;
				   			case '6':
				   				echo "6 - Sexta";
				   				break;
				   			case '7':
				   				echo "7 - Sábado";
				   				break;
				   			default:
				   				echo "Valor inválido";
				   				break;
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