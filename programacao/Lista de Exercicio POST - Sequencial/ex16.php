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
		$area = 0;
		if(isset($_POST['area'])){
			$area = $_POST['area'];
		}
		$litros = $area/6;
		$latas = ceil($litros/18);
		$galoes = ceil($litros/3.6);  
		$precoLatas = $latas*80;
		$precoGaloes = $galoes*25;
	?>
<div id="borda1">
	<img src="img/borda2.jpg">
</div>
<div id="corpo">
	<form action="" method="post">
		<br><br><br>
		<fieldset>
			<legend>Exercício 16</legend>
				<br>
				<label>Área: </label>
                <input type="number" name="area" id="n" step="0.001" required value="<?php echo $area ?>"/>
                <br><br>
                <center><input type="submit" value="Verificar"></center>
				<br>
					<?php
   						echo "<h4>Para pintar ".$area." metros quadrados, tem-se duas opções: <br>- Em latas de 18 litros, será necessário comprar ".$latas." latas, o que custará R$ ".$precoLatas."<br>- Em galões de 3.6 litros, será necessário comprar ".$galoes." galões, o que custará R$ ".$precoGaloes."</h4>";		
					?>
		</fieldset>
	</form>
</div>
<div id="borda2">
	<img src="img/borda2.jpg">
</div>
</body>
</html>