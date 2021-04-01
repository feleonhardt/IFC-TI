<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo.css"/>
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <meta charset="UTF-8"/>
    <title>Vetor</title>
</head>
<?php
	$caracteres = "";
		if(isset($_POST['caracteres'])){
			$caracteres = $_POST['caracteres'];
		}
?>
<body>
	<div id="box">
	<form action="" method="post">
		<br><br>
		<fieldset>
			<legend>Exercicio 04</legend>
			<center>
				<label>Caracteres (separe com vírgula): </label><br>
                <textarea rows="6" name="caracteres" required><?php echo $caracteres; ?></textarea>
                <br><br>
                <center><input type="submit" value="Verificar"></center>
                <br>
				<?php 
					$contConsoante = 0;
					$maiuscula = strtoupper($caracteres);
					$nCaracteres = explode (",", $maiuscula);
					for ($i = 0; $i < count($nCaracteres); $i++) { 
						if($nCaracteres[$i] != "A" && $nCaracteres[$i] != "E" && $nCaracteres[$i] != "I" && $nCaracteres[$i] != "O" && $nCaracteres[$i] != "U"){
							$contConsoante++;
							echo $nCaracteres[$i];
						}
					}
					echo "<br>Total de Consoantes lidas: ".$contConsoante;
				?>
			</center>
		</fieldset>
	</form>
	</div>
</body>
</html>