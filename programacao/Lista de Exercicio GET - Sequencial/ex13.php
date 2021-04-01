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
		$peso = 0;
		if(isset($_GET['peso'])){
			$peso = $_GET['peso'];
		}
		if($peso>50){
			$excedente = $peso - 50;
			$multa = $excedente*4;
		}
		else{
			$excedente = 0;
			$multa = 0;
		}	
	?>
<div id="borda1">
	<img src="img/borda2.jpg">
</div>
<div id="corpo">
	<form action="" method="get">
		<br><br><br>
		<fieldset>
			<legend>Exercício 13</legend>
				<br>
				<label>Peso de peixes: </label>
                <input type="number" name="peso" id="n" step="0.0001" required value="<?php echo $peso ?>"/>
                <br><br>
                <center><input type="submit" value="Verificar"></center>
				<br>
					<?php
				   		if($multa>0){
   							echo "<h4>O excedente foi igual a ".$excedente." kg, sendo assim, o valor da multa é igual a R$ ".$multa."</h4>";
   						}
   						else{
   							echo "<h4>Não houve excedente, portanto não haverá multa</h4>";
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