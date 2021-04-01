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
		$morangos = 0;
		if(isset($_POST['morangos'])){
			$morangos = $_POST['morangos'];
		}
		$macas = 0;
		if(isset($_POST['macas'])){
			$macas = $_POST['macas'];
		}
	?>
<div id="borda1">
	<img src="img/borda2.jpg">
</div>
<div id="corpo">
	<form action="" method="post">
		<br><br><br>
		<fieldset>
			<legend>Exercício 19</legend>
				<br>
				<label>Qtd. Morangos (Kg):</label>
                <input type="number" name="morangos" id="n" step="0.0001" />
                <br><br>
                <label>Qtd. Maçãs (Kg):</label>
                <input type="number" name="macas" id="n" step="0.0001" />
                <br><br>
                <center><input type="submit" value="Calcular"></center>
				<br>
					<?php
						if($morangos<=5){
							$totalMo = $morangos*2.50;
						}
						else{
							$totalMo = $morangos*2.20;
						}

						if($macas<=5){
							$totalMa = $macas*1.80;
						}
						else{
							$totalMa = $macas*1.50;
						}
						
						$total = $totalMo + $totalMa;

						if(($morangos + $macas)>8 || $total > 25){
							$desconto = $total * 0.10;
							$pagar = $total - $desconto;
							echo "O valor a ser pago pelo cliente é R$ ".$pagar;
						}
						else{
							echo "O valor a ser pago pelo cliente é R$ ".$total;
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