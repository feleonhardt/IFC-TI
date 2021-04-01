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
	$temp = 0;
		if(isset($_POST['temp'])){
			$temp = $_POST['temp'];
		}
?>
<body>
	<div id="box">
	<form action="" method="post">
		<br><br>
		<fieldset>
			<legend>Exercicio 18</legend>
			<center>
				<label>Temperaturas (separe com " , "): </label><br>
                <textarea rows="6" name="temp" required><?php echo $temp; ?></textarea>
                <br><br>
                <center><input type="submit" value="Verificar"></center>
                <br>
				<?php 
					$cont = 0;
					$soma = 0;
					$maiorMedia = 0;
					$temperatura = explode (",", $temp);
					for ($i = 0; $i < count($temperatura); $i++) { 
						$soma = $soma + $temperatura[$i];
						$cont++;
					}
					$media = $soma/$cont;
					for ($i = 0; $i < count($temperatura); $i++) { 
						if($temperatura[$i] > $media){
							$maiorMedia++;
						}
					}
					echo "Quantidade de temperatura acima da média (".number_format($media,2)."): ".$maiorMedia;
				?>
			</center>
		</fieldset>
	</form>
	</div>
</body>
</html>