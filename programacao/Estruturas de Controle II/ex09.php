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
		$ano = "0/0/0";
		if(isset($_POST['ano'])){
			$ano = $_POST['ano'];
		}
	?>
<div id="borda1">
	<img src="img/borda2.jpg">
</div>
<div id="corpo">
	<form action="" method="post">
		<br><br><br>
		<fieldset>
			<legend>Exercício 09</legend>
				<br>
				<label>Ano (dd/mm/aaaa):</label>
                <input type="text" name="ano" id="n" />
                <br><br>
                <center><input type="submit" value="Verificar"></center>
				<br>
					<?php
						$vet = explode('/', $ano, 3);
						$dia = $vet[0];
						$mes = $vet[1];
						$ano = $vet[2];
						
						$validade = "true";
						
							if($ano<=0){
								$validade = "false";
							}
							else{
								if ($ano%4 == 0){
									$bissexto = "sim";
								}
								else{
									$bissexto = "nao";
								}
							}

							if ($mes < 01 || $mes > 12){
								$validade = "false";
							}

							if ($dia < 1 || $dia > 31){
       							$validade = "false";
							}

							if(($mes == 4 || $mes == 6 || $mes == 9 || $mes == 11) && ($dia < 1 || $dia > 30)){
								$validade = "false";
							}

    						if (($mes == 2 && $bissexto == "nao" && ($dia < 1 || $dia > 28)) || ($mes == 2 && $bissexto == "sim" && ($dia < 1 || $dia  > 29))){
						        $validade = "false";
						    }
						
    					if ($validade == "true"){
    						echo $dia."/".$mes."/".$ano." --> Data Válida";
    					}
    					else{
    						echo $dia."/".$mes."/".$ano." --> Data Inválida";
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