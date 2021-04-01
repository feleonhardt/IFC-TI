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
		$km = "";
		if(isset($_POST['km'])){
			$km = $_POST['km'];
		}
	?>
<div id="borda1">
	<img src="img/borda2.jpg">
</div>
<div id="corpo">
	<form action="" method="post">
		<br>
		<fieldset>
			<legend>Resolução</legend>
				<br>
				<label>Km percorridos:</label>
                <input type="number" name="km" id="n" step="0.0001" />   
				<br><br><br>
				<?php
					$m = $km * 1000;
					$nVoltas = $m / 500;
					echo "500 m = 1 volta --> ".$m." m = ".$nVoltas." voltas";

					$graus = $nVoltas * 360;
					echo "<br>Voltas equivalente em graus --> ".$graus;

					$rad = deg2rad($graus);
					echo "<br>Voltas equivalente em radianos --> ".$rad;

					$angulo = $graus % 360;
					echo "<br>O ângulo correspondente é ".$angulo."°, cujo seno é ".sin($angulo).", cosseno é ".cos($angulo)." e tangente é ".tan($angulo);

					if($angulo>0 && $angulo<90){
						echo "<br>Localiza-se no I Quadrante ";
					}
					elseif ($angulo>90 && $angulo<180) {
						echo "<br>Localiza-se no II Quadrante ";
					}
					elseif ($angulo>180 && $angulo<270) {
						echo "<br>Localiza-se no III Quadrante ";
					}
					elseif ($angulo>270 && $angulo<360) {
						echo "<br>Localiza-se no IV Quadrante ";
					}
					
					$verifica =  ceil($nVoltas);
					$resto = $verifica - $nVoltas;
					if($resto != 0){
							$grausFalta = 360 * $resto;
							$distanciaFalta = 500 * $resto;
							echo "<br>Para percorrer a volta completa faltou ".$grausFalta."°, o que corresponde a ".$distanciaFalta." m";
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