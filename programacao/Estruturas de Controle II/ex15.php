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
		$n = 0;
		if(isset($_POST['n'])){
			$n = $_POST['n'];
		}
	?>
<div id="borda1">
	<img src="img/borda2.jpg">
</div>
<div id="corpo">
	<form action="" method="post">
		<br><br><br><br>
		<fieldset>
			<legend>Exercício 15</legend>
				<br>
				<label>Número:</label>
                <input type="number" name="n" id="n" step="0.0000001" />
                <br><br>
                <center><input type="submit" value="Verificar"></center>
				<br>
					<?php
						$verifica = floor($n);
						$resto = $n - $verifica;
						if($resto == 0){
							echo "O número é inteiro";
						}
						else{
							echo "O número é decimal";
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