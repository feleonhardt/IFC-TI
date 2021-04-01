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
	$palavras = "";
		if(isset($_POST['palavras'])){
			$palavras = $_POST['palavras'];
		}
?>
<body>
	<div id="box">
	<form action="" method="post">
		<br><br>
		<fieldset>
			<legend>Exercicio 06</legend>
			<center>
				<label>Palavras (separe com ";"): </label><br>
                <textarea rows="6" name="palavras" required><?php echo $palavras; ?></textarea>
                <br><br>
                <center><input type="submit" value="Verificar"></center>
                <br>
				<?php 
					$cadaPalavra = explode (";", $palavras);
					for ($i = 0; $i < count($cadaPalavra); $i++) { 
						echo ($i+1)."ª posição: ".$cadaPalavra[$i]."<br>";
					}
				?>
			</center>
		</fieldset>
	</form>
	</div>
</body>
</html>