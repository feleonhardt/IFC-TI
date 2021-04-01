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
		$saque = 0;
		if(isset($_POST['saque'])){
			$saque = $_POST['saque'];
		}
	?>
<div id="borda1">
	<img src="img/borda2.jpg">
</div>
<div id="corpo">
	<form action="" method="post">
		<br><br><br><br>
		<fieldset>
			<legend>Exercício 13</legend>
				<br>
				<label>Valor do saque: R$ </label>
                <input type="number" name="saque" id="n" ste="0.0001"/>
                <br><br>
                <center><input type="submit" value="Calcular"></center>
				<br>
					<?php
				   		if($saque>=10 && $saque<=600){
				   			$aux = $saque;
				   			$uni = $aux % 10; 
							$aux = $aux / 10;
							$dez = $aux % 10; 
							$c = $aux / 10;
							$cen = intval($c);
							
							$n100 = $cen;
							if($dez>=5){
								$n50 = intval($dez/5);
								$n10 = $dez-5;
							}
							else{
								$n50 = 0;
								$n10 = $dez;
							}
							if($uni>=5){
								$n5 = intval($uni/5);
								$n1 = $uni-5;
							}
							else{
								$n5 = 0;
								$n1 = $uni;
							}

							if($n100 != 0 && $n50 != 0 && $n10 != 0 && $n5 != 0 && $n1 != 0){
								echo "Para sacar a quantia de ".$saque." reais, serão necessárias ";
								if($n100>1){
									echo $n100." notas de 100, ";
								}
								elseif($n100 == 1){
									echo " 1 nota de 100, ";
								}

								if($n50>1){
									echo $n50." notas de 50, ";
								}
								elseif($n50 == 1){
									echo " 1 nota de 50, ";
								}

								if($n10>1){
									echo $n10." notas de 10, ";
								}
								elseif($n10 == 1){
									echo " 1 nota de 10, ";
								}

								if($n5>1){
									echo $n5." notas de 5 e ";
								}
								elseif($n5 == 1){
									echo " 1 nota de 5 e ";
								}

								if($n1>1){
									echo $n1." notas de 1";
								}
								elseif($n1 == 1){
									echo " 1 nota de 1";
								}
							}

							if($n100 != 0 && $n50 != 0 && $n10 != 0 && $n5 != 0 && $n1 == 0){
								echo "Para sacar a quantia de ".$saque." reais, serão necessárias ";
								if($n100>1){
									echo $n100." notas de 100, ";
								}
								elseif($n100 == 1){
									echo " 1 nota de 100, ";
								}

								if($n50>1){
									echo $n50." notas de 50, ";
								}
								elseif($n50 == 1){
									echo " 1 nota de 50, ";
								}

								if($n10>1){
									echo $n10." notas de 10 e ";
								}
								elseif($n10 == 1){
									echo " 1 nota de 10 e ";
								}

								if($n5>1){
									echo $n5." notas de 5";
								}
								elseif($n5 == 1){
									echo " 1 nota de 5";
								}
							}

							if($n100 != 0 && $n50 != 0 && $n10 != 0 && $n5 == 0 && $n1 != 0){
								echo "Para sacar a quantia de ".$saque." reais, serão necessárias ";
								if($n100>1){
									echo $n100." notas de 100, ";
								}
								elseif($n100 == 1){
									echo " 1 nota de 100, ";
								}

								if($n50>1){
									echo $n50." notas de 50, ";
								}
								elseif($n50 == 1){
									echo " 1 nota de 50, ";
								}

								if($n10>1){
									echo $n10." notas de 10 e ";
								}
								elseif($n10 == 1){
									echo " 1 nota de 10 e ";
								}

								if($n1>1){
									echo $n1." notas de 1";
								}
								elseif($n1 == 1){
									echo " 1 nota de 1";
								}
							}

							if($n100 != 0 && $n50 != 0 && $n10 == 0 && $n5 != 0 && $n1 != 0){
								echo "Para sacar a quantia de ".$saque." reais, serão necessárias ";
								if($n100>1){
									echo $n100." notas de 100, ";
								}
								elseif($n100 == 1){
									echo " 1 nota de 100, ";
								}

								if($n50>1){
									echo $n50." notas de 50, ";
								}
								elseif($n50 == 1){
									echo " 1 nota de 50, ";
								}

								if($n5>1){
									echo $n5." notas de 5 e ";
								}
								elseif($n5 == 1){
									echo " 1 nota de 5 e ";
								}

								if($n1>1){
									echo $n1." notas de 1";
								}
								elseif($n1 == 1){
									echo " 1 nota de 1";
								}
							}

							if($n100 != 0 && $n50 == 0 && $n10 != 0 && $n5 != 0 && $n1 != 0){
								echo "Para sacar a quantia de ".$saque." reais, serão necessárias ";
								if($n100>1){
									echo $n100." notas de 100, ";
								}
								elseif($n100 == 1){
									echo " 1 nota de 100, ";
								}

								if($n10>1){
									echo $n10." notas de 10, ";
								}
								elseif($n10 == 1){
									echo " 1 nota de 10, ";
								}

								if($n5>1){
									echo $n5." notas de 5 e ";
								}
								elseif($n5 == 1){
									echo " 1 nota de 5 e ";
								}

								if($n1>1){
									echo $n1." notas de 1";
								}
								elseif($n1 == 1){
									echo " 1 nota de 1";
								}
							}

							if($n100 == 0 && $n50 != 0 && $n10 != 0 && $n5 != 0 && $n1 != 0){
								echo "Para sacar a quantia de ".$saque." reais, serão necessárias ";
								if($n50>1){
									echo $n50." notas de 50, ";
								}
								elseif($n50 == 1){
									echo " 1 nota de 50, ";
								}

								if($n10>1){
									echo $n10." notas de 10, ";
								}
								elseif($n10 == 1){
									echo " 1 nota de 10, ";
								}

								if($n5>1){
									echo $n5." notas de 5 e ";
								}
								elseif($n5 == 1){
									echo " 1 nota de 5 e ";
								}

								if($n1>1){
									echo $n1." notas de 1";
								}
								elseif($n1 == 1){
									echo " 1 nota de 1";
								}
							}
							
							if($n100 != 0 && $n50 != 0 && $n10 == 0 && $n5 == 0 && $n1 != 0){
								echo "Para sacar a quantia de ".$saque." reais, serão necessárias ";
								if($n100>1){
									echo $n100." notas de 100, ";
								}
								elseif($n100 == 1){
									echo " 1 nota de 100, ";
								}

								if($n50>1){
									echo $n50." notas de 50 e ";
								}
								elseif($n50 == 1){
									echo " 1 nota de 50 e ";
								}

								if($n1>1){
									echo $n1." notas de 1";
								}
								elseif($n1 == 1){
									echo " 1 nota de 1";
								}
							}

							if($n100 != 0 && $n50 == 0 && $n10 != 0 && $n5 != 0 && $n1 == 0){
								echo "Para sacar a quantia de ".$saque." reais, serão necessárias ";
								if($n100>1){
									echo $n100." notas de 100, ";
								}
								elseif($n100 == 1){
									echo " 1 nota de 100, ";
								}

								if($n10>1){
									echo $n10." notas de 10 e ";
								}
								elseif($n10 == 1){
									echo " 1 nota de 10 e ";
								}

								if($n5>1){
									echo $n5." notas de 5";
								}
								elseif($n5 == 1){
									echo " 1 nota de 5";
								}
							}

							if($n100 != 0 && $n50 == 0 && $n10 == 0 && $n5 != 0 && $n1 != 0){
								echo "Para sacar a quantia de ".$saque." reais, serão necessárias ";
								if($n100>1){
									echo $n100." notas de 100, ";
								}
								elseif($n100 == 1){
									echo " 1 nota de 100, ";
								}

								if($n5>1){
									echo $n5." notas de 5 e ";
								}
								elseif($n5 == 1){
									echo " 1 nota de 5 e ";
								}

								if($n1>1){
									echo $n1." notas de 1";
								}
								elseif($n1 == 1){
									echo " 1 nota de 1";
								}
							}

							if($n100 != 0 && $n50 == 0 && $n10 != 0 && $n5 == 0 && $n1 != 0){
								echo "Para sacar a quantia de ".$saque." reais, serão necessárias ";
								if($n100>1){
									echo $n100." notas de 100, ";
								}
								elseif($n100 == 1){
									echo " 1 nota de 100, ";
								}

								if($n10>1){
									echo $n10." notas de 10 e ";
								}
								elseif($n10 == 1){
									echo " 1 nota de 10 e ";
								}

								if($n1>1){
									echo $n1." notas de 1";
								}
								elseif($n1 == 1){
									echo " 1 nota de 1";
								}
							}

							if($n100 != 0 && $n50 != 0 && $n10 == 0 && $n5 != 0 && $n1 == 0){
								echo "Para sacar a quantia de ".$saque." reais, serão necessárias ";
								if($n100>1){
									echo $n100." notas de 100, ";
								}
								elseif($n100 == 1){
									echo " 1 nota de 100, ";
								}

								if($n50>1){
									echo $n50." notas de 50 e ";
								}
								elseif($n50 == 1){
									echo " 1 nota de 50 e ";
								}

								if($n5>1){
									echo $n5." notas de 5";
								}
								elseif($n5 == 1){
									echo " 1 nota de 5";
								}
							}

							if($n100 == 0 && $n50 == 0 && $n10 != 0 && $n5 == 0 && $n1 != 0){
								echo "Para sacar a quantia de ".$saque." reais, serão necessárias ";
								if($n10>1){
									echo $n10." notas de 10 e ";
								}
								elseif($n10 == 1){
									echo " 1 nota de 10 e ";
								}

								if($n1>1){
									echo $n1." notas de 1";
								}
								elseif($n1 == 1){
									echo " 1 nota de 1";
								}
							}

							if($n100 == 0 && $n50 == 0 && $n10 != 0 && $n5 != 0 && $n1 == 0){
								echo "Para sacar a quantia de ".$saque." reais, serão necessárias ";
								if($n10>1){
									echo $n10." notas de 10 e ";
								}
								elseif($n10 == 1){
									echo " 1 nota de 10 e ";
								}

								if($n5>1){
									echo $n5." notas de 5";
								}
								elseif($n5 == 1){
									echo " 1 nota de 5";
								}
							}

							if($n100 == 0 && $n50 == 0 && $n10 != 0 && $n5 != 0 && $n1 != 0){
								echo "Para sacar a quantia de ".$saque." reais, serão necessárias ";
								if($n10>1){
									echo $n10." notas de 10, ";
								}
								elseif($n10 == 1){
									echo " 1 nota de 10, ";
								}

								if($n5>1){
									echo $n5." notas de 5 e ";
								}
								elseif($n5 == 1){
									echo " 1 nota de 5 e ";
								}

								if($n1>1){
									echo $n1." notas de 1";
								}
								elseif($n1 == 1){
									echo " 1 nota de 1";
								}
							}

							if($n100 == 0 && $n50 != 0 && $n10 == 0 && $n5 == 0 && $n1 != 0){
								echo "Para sacar a quantia de ".$saque." reais, serão necessárias ";
								if($n50>1){
									echo $n50." notas de 50 e ";
								}
								elseif($n50 == 1){
									echo " 1 nota de 50 e ";
								}

								if($n1>1){
									echo $n1." notas de 1";
								}
								elseif($n1 == 1){
									echo " 1 nota de 1";
								}
							}

							if($n100 == 0 && $n50 != 0 && $n10 == 0 && $n5 != 0 && $n1 == 0){
								echo "Para sacar a quantia de ".$saque." reais, serão necessárias ";
								if($n50>1){
									echo $n50." notas de 50 e ";
								}
								elseif($n50 == 1){
									echo " 1 nota de 50 e ";
								}

								if($n5>1){
									echo $n5." notas de 5";
								}
								elseif($n5 == 1){
									echo " 1 nota de 5";
								}
							}

							if($n100 == 0 && $n50 != 0 && $n10 != 0 && $n5 != 0 && $n1 == 0){
								echo "Para sacar a quantia de ".$saque." reais, serão necessárias ";
								if($n50>1){
									echo $n50." notas de 50, ";
								}
								elseif($n50 == 1){
									echo " 1 nota de 50, ";
								}

								if($n10>1){
									echo $n10." notas de 10 e ";
								}
								elseif($n10 == 1){
									echo " 1 nota de 10 e ";
								}

								if($n5>1){
									echo $n5." notas de 5";
								}
								elseif($n5 == 1){
									echo " 1 nota de 5";
								}
							}

							if($n100 == 0 && $n50 != 0 && $n10 != 0 && $n5 == 0 && $n1 != 0){
								echo "Para sacar a quantia de ".$saque." reais, serão necessárias ";
								if($n50>1){
									echo $n50." notas de 50, ";
								}
								elseif($n50 == 1){
									echo " 1 nota de 50, ";
								}

								if($n10>1){
									echo $n10." notas de 10 e ";
								}
								elseif($n10 == 1){
									echo " 1 nota de 10 e ";
								}

								if($n1>1){
									echo $n1." notas de 1";
								}
								elseif($n1 == 1){
									echo " 1 nota de 1";
								}
							}

							if($n100 == 0 && $n50 != 0 && $n10 == 0 && $n5 != 0 && $n1 != 0){
								echo "Para sacar a quantia de ".$saque." reais, serão necessárias ";
								if($n50>1){
									echo $n50." notas de 50, ";
								}
								elseif($n50 == 1){
									echo " 1 nota de 50, ";
								}

								if($n5>1){
									echo $n5." notas de 5 e ";
								}
								elseif($n5 == 1){
									echo " 1 nota de 5 e ";
								}

								if($n1>1){
									echo $n1." notas de 1";
								}
								elseif($n1 == 1){
									echo " 1 nota de 1";
								}
							}

							if($n100 == 0 && $n50 == 0 && $n10 != 0 && $n5 == 0 && $n1 == 0){
								echo "Para sacar a quantia de ".$saque." reais, serão necessárias ";
								if($n10>1){
									echo $n10." notas de 10";
								}
								elseif($n10 == 1){
									echo " 1 nota de 10";
								}
							}

							if($n100 != 0 && $n50 == 0 && $n10 == 0 && $n5 == 0 && $n1 == 0){
								echo "Para sacar a quantia de ".$saque." reais, serão necessárias ";
								if($n100>1){
									echo $n100." notas de 100";
								}
								elseif($n100 == 1){
									echo " 1 nota de 100";
								}
							}

							if($n100 != 0 && $n50 == 0 && $n10 == 0 && $n5 == 0 && $n1 != 0){
								echo "Para sacar a quantia de ".$saque." reais, serão necessárias ";
								if($n100>1){
									echo $n100." notas de 100 e ";
								}
								elseif($n100 == 1){
									echo " 1 nota de 100 e ";
								}

								if($n1>1){
									echo $n1." notas de 1";
								}
								elseif($n1 == 1){
									echo " 1 nota de 1";
								}
							}

							if($n100 != 0 && $n50 == 0 && $n10 == 0 && $n5 != 0 && $n1 == 0){
								echo "Para sacar a quantia de ".$saque." reais, serão necessárias ";
								if($n100>1){
									echo $n100." notas de 100 e ";
								}
								elseif($n100 == 1){
									echo " 1 nota de 100 e ";
								}

								if($n5>1){
									echo $n5." notas de 5";
								}
								elseif($n5 == 1){
									echo " 1 nota de 5";
								}
							}

							if($n100 != 0 && $n50 == 0 && $n10 != 0 && $n5 == 0 && $n1 == 0){
								echo "Para sacar a quantia de ".$saque." reais, serão necessárias ";
								if($n100>1){
									echo $n100." notas de 100 e ";
								}
								elseif($n100 == 1){
									echo " 1 nota de 100 e ";
								}

								if($n10>1){
									echo $n10." notas de 10";
								}
								elseif($n10 == 1){
									echo " 1 nota de 10";
								}
							}

							if($n100 == 0 && $n50 != 0 && $n10 == 0 && $n5 == 0 && $n1 == 0){
								echo "Para sacar a quantia de ".$saque." reais, serão necessárias ";
								if($n50>1){
									echo $n50." notas de 50";
								}
								elseif($n50 == 1){
									echo " 1 nota de 50";
								}
							}

							if($n100 == 0 && $n50 != 0 && $n10 != 0 && $n5 == 0 && $n1 == 0){
								echo "Para sacar a quantia de ".$saque." reais, serão necessárias ";
								if($n50>1){
									echo $n50." notas de 50 e ";
								}
								elseif($n50 == 1){
									echo " 1 nota de 50 e ";
								}

								if($n10>1){
									echo $n10." notas de 10";
								}
								elseif($n10 == 1){
									echo " 1 nota de 10";
								}
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