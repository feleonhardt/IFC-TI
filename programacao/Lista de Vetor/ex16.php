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
	$mod = 1;
		if(isset($_POST['mod'])){
			$mod = $_POST['mod'];
		}
	$cons = 1;
		if(isset($_POST['cons'])){
			$cons = $_POST['cons'];
		}
?>
<body>
	<div id="box">
	<form action="" method="post">
		<br><br>
		<fieldset>
			<legend>Exercicio 16</legend>
			<center>
				<label>Modelo (separe com ";"): </label><br>
                <textarea rows="6" name="mod" required><?php echo $mod; ?></textarea>
                <br><br>
                <label>Consumo (separe com ";" e na mesma ordem do campo anterior): </label><br>
                <textarea rows="6" name="cons" required><?php echo $cons; ?></textarea>
                <br><br>
                <center><input type="submit" value="Verificar"></center>
                <br>
				<?php 
					$modelo = explode (";", $mod);
					$consumo = explode (";", $cons);
					$count1 = count($modelo);
					$count2 = count($consumo);
					if($count1 != $count2){
						if($count1 > $count2){
							$diferenca = $count1 - $count2;
							echo "Insira mais ".$diferenca." valor(es) de consumo";
						}elseif($count2 > $count1){
							$diferenca = $count2 - $count1;
							echo "Insira mais ".$diferenca." modelo(s)";
						}
					}
					else{
						$economico = 0;
						for ($i = 0; $i < count($consumo); $i++) { 
							if($consumo[$i] > $economico){
								$economico = $consumo[$i];
								$modeloEc = $modelo[$i];
							}
						}
						for ($i = 0; $i < count($consumo); $i++) { 
							$litro = 1000/$consumo[$i];
							$litros[] = number_format($litro,2,",",".");
						}

						echo "Modelo mais econômico: ".$modeloEc;
						echo "<br><br>Para percorrer 1000 km: <br>";
						for ($i = 0; $i < $count1; $i++) { 
							echo " - ".$modelo[$i]." consome ".$litros[$i]." litros<br>";
						}
					}
				?>
			</center>
		</fieldset>
	</form>
	</div>
</body>
</html>