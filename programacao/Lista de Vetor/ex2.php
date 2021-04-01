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
			<legend>Exercicio 02</legend>
			<center>
				<label>Números inteiros (separe com espaço): </label><br>
                <textarea rows="6" name="n" required><?php echo $n; ?></textarea>
                <br><br>
                <center><input type="submit" value="Verificar"></center>
                <br>
				<?php 
					$cont = 1;
					$numeros = explode (";", $n);
					for ($i = count($numeros) - 1; $i >= 0; $i--) { 
						echo $cont."ª posição: ".$numeros[$i]."<br>";
						$cont++;
					}
				?>
			</center>
		</fieldset>
	</form>
	</div>
</body>
</html>