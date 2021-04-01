<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo3.css" />
    <meta charset="UTF-8" />
    <link rel="shortcut icon" type="image/x-icon" href="img/php.png" />
    <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <title>Exercicio</title>
</head>
<body>
	<?php
		$n1 = 0;
		if(isset($_POST['n1'])){
			$n1 = $_POST['n1'];
		}
		$n2 = 0;
		if(isset($_POST['n2'])){
			$n2 = $_POST['n2'];
		}
	?>
<div id="borda1">
	<img src="img/borda2.jpg">
</div>
<div id="corpo">
	<form action="" method="post">
		<br><br><br>
		<fieldset>
			<legend>Exercício 04</legend>
				<br>
				<label>Nota 1:</label>
                <input type="number" name="n1" id="n" step="0.001" />
                <br><br>
                <label>Nota 2:</label>
                <input type="number" name="n2" id="n" step="0.001" />
                <br><br>
                <center><input type="submit" value="Verificar situação"></center>
				<br>
					<?php
						$media = ($n1+$n2)/2;
						if ($media>=0 && $media<3){
							echo "Reprovado";
						}
						elseif($media>=3 && $media<=6.9){
							echo "Em exame";
						}
						elseif($media>=7 && $media<=10){
							echo "Aprovado";
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