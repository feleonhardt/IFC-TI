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
		$litros = $area/3;
		$latas = ceil($litros/18);
		$preco = $latas*80;
	?>
<div id="borda1">
	<img src="img/borda2.jpg">
</div>
<div id="corpo">
	<form action="" method="post">
		<br><br><br>
		<fieldset>
			<legend>Exercício 15</legend>
				<br>
				<label>Área: </label>
                <input type="number" name="area" id="n" step="0.001" required value="<?php echo $area ?>"/>
                <br><br>
                <center><input type="submit" value="Verificar"></center>
				<br>
					<?php
   						echo "<h4>Para pintar ".$area." metros quadrados, a quantidade de latas que precisam ser compradas é ".$latas.", o que custará R$ ".$preco."</h4>";		
					?>
		</fieldset>
	</form>
</div>
<div id="borda2">
	<img src="img/borda2.jpg">
</div>
</body>
</html>