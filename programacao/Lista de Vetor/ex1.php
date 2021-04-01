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
	$n = "";
		if(isset($_POST['n'])){
			$n = $_POST['n'];
		}
?>
<body>
	<div id="box">
	<form action="" method="post">
		<br><br>
		<fieldset>
			<legend>Exercicio 01</legend>
			<center>
				<label>Informações separadas por ";" </label><br>
                <textarea rows="6" name="n" required></textarea>
                <br><br>
                <center><input type="submit" value="Verificar"></center>
                <br>
				<?php 
					$numeros = explode (";", $n);
					for ($i = 0; $i < count($numeros); $i++) { 
						echo ($i+1)."ª posição: ".$numeros[$i]."<br>";
					}
				?>
			</center>
		</fieldset>
	</form>
	</div>
</body>
</html>