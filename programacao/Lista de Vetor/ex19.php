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
			<legend>Exercicio 19</legend>
			<center>
				<label>Números (separe com ";"): </label><br>
                <textarea rows="6" name="n" required><?php echo $n; ?></textarea>
                <br><br>
                <center><input type="submit" value="Verificar"></center>
                <br>
				<?php 
					$pare = "false";
					$numeros = explode (";", $n);
					for ($i = 0; $i < count($numeros); $i++) { 
						if($numeros[$i] < 0 || $numeros[$i] > 20){
							$pare = "true";
							break;
						}
					}
					if($pare == "true"){
						echo "Os números devem estar entre 0 e 20";
					}
					else{
						for ($i = 0; $i < count($numeros); $i++) { 
							echo $numeros[$i].": ";
							for ($j = 0; $j <= $numeros[$i]; $j++) { 
								if($j != $numeros[$i]){
									echo "#";
								}
								else{
									echo "<br>";
								}
							}
						}
					}
					
				?>
			</center>
		</fieldset>
	</form>
	</div>
</body>
</html>