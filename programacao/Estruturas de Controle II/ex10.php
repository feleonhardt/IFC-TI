<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo3.css" />
    <meta charset="UTF-8" />
    <link rel="shortcut icon" type="image/x-icon" href="img/php.png" />
    <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <title>Exercicios PHP</title>
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
			<legend>Exercício 10</legend>
				<br>
				<label>Número: </label>
                <input type="number" name="n" id="n" />
                <br><br>
                <center><input type="submit" value="Verificar"></center>
				<br>
					<?php
				   		if($n<1000){
				   			$aux = $n;
				   			$uni = $aux % 10; 
							$aux = $aux / 10;
							$dez = $aux % 10; 
							$c = $aux / 10;
							$cen = intval($c);
							if($cen != 0 && $dez != 0 && $uni != 0){
								echo $n." = ";
								if($cen>1){
									echo $cen." centenas";
								}
								elseif($cen == 1){
									echo " 1 centena";
								}

								if($dez>1){
									echo ", ".$dez." dezenas";
								}
								elseif($dez == 1){
									echo ", 1 dezena";
								}

								if($uni>1){
									echo " e ".$uni." unidades";
								}
								elseif($uni == 1){
									echo " e 1 unidade";
								}
							}

							if($cen != 0 && $dez != 0 && $uni == 0){
								echo $n." = ";
								if($cen>1){
									echo $cen." centenas";
								}
								elseif($cent == 1){
									echo " 1 centena";
								}

								if($dez>1){
									echo " e ".$dez." dezenas";
								}
								elseif($dez == 1){
									echo " e 1 dezena";
								}
							}

							if($cen == 0 && $dez != 0 && $uni != 0){
								echo $n." = ";
								if($dez>1){
									echo $dez." dezenas";
								}
								elseif($dez == 1){
									echo " 1 dezena";
								}

								if($uni>1){
									echo " e ".$uni." unidades";
								}
								elseif($uni == 1){
									echo " e 1 unidade";
								}
							}

							if($cen != 0 && $dez == 0 && $uni != 0){
								echo $n." = ";
								if($cen>1){
									echo $cen." centenas";
								}
								elseif($cen == 1){
									echo " 1 centena";
								}

								if($uni>1){
									echo " e ".$uni." unidades";
								}
								elseif($uni == 1){
									echo " e 1 unidade";
								}
							}

							if($cen == 0 && $dez == 0 && $uni != 0){
								echo $n." = ";
								if($uni>1){
									echo $uni." unidades";
								}
								elseif($uni == 1){
									echo "1 unidade";
								}
							}

							if($cen != 0 && $dez == 0 && $uni == 0){
								echo $n." = ";
								if($cen>1){
									echo $cen." centenas";
								}
								elseif($cen == 1){
									echo "1 centena";
								}
							}

							if($cen == 0 && $dez != 0 && $uni == 0){
								echo $n." = ";
								if($dez>1){
									echo $dez." dezenas";
								}
								elseif($dez == 1){
									echo "1 dezena";
								}
							}

							if($cen == 0 && $dez == 0 && $uni == 0){
								echo "O número não tem centenas nem dezenas nem unidades";
							}
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