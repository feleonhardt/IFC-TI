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
		$litros = 0;
		if(isset($_POST['litros'])){
			$litros = $_POST['litros'];
		}
		$tipo = "";
		if(isset($_POST['tipo'])){
			$tipo = $_POST['tipo'];
		}
	?>
<div id="borda1">
	<img src="img/borda2.jpg">
</div>
<div id="corpo">
	<form action="" method="post">
		<br><br><br>
		<fieldset>
			<legend>Exercício 18</legend>
				<br>
				<label>Litros:</label>
                <input type="number" name="litros" id="n" step="0.0001" />
                <br><br>
                <label for="tipo">Tipo de combustível:</label>
		        <select name="tipo" id="n">
		          <option value=""></option>
		          <option value="G">Gasolina</option>
		          <option value="A">Álcool</option>
		        </select>
		        <br><br>
                <center><input type="submit" value="Calcular"></center>
				<br>
					<?php
						switch ($tipo) {
							case 'G':
								$custo = $litros*2.5;
								break;
							case 'A':
								$custo = $litros*1.9;
								break;
						}
						if($tipo == "G"){
							if($litros<=20){
								$desconto = $custo*(0.04*$litros);
							}
							else{
								$desconto = $custo*(0.06*$litros);
							}
							echo "O valor a ser pago por ".$litros." litros de gasolina é R$ ".($custo-$desconto);
						}
						elseif($tipo == "A"){
							if($litros<=20){
								$desconto = $custo*(0.03*$litros);
							}
							else{
								$desconto = $custo*(0.05*$litros);
							}
							echo "O valor a ser pago por ".$litros." litros de álcool é R$ ".($custo-$desconto);
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