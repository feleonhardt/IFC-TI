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
		$a = 0;
		if(isset($_POST['a'])){
			$a = $_POST['a'];
		}
		$b = 0;
		if(isset($_POST['b'])){
			$b = $_POST['b'];
		}
		$c = 0;
		if(isset($_POST['c'])){
			$c = $_POST['c'];
		}
	?>
<div id="borda1">
	<img src="img/borda2.jpg">
</div>
<div id="corpo">
	<form action="" method="post">
		<br>
		<fieldset>
			<legend>Exercício 07</legend>
				<br>
				<label>Valor de A:</label>
                <input type="number" name="a" id="n" step="0.0001" />
                <br><br>
                <label>Valor de B:</label>
                <input type="number" name="b" id="n" step="0.0001" />
                <br><br>
                <label>Valor de C:</label>
                <input type="number" name="c" id="n" step="0.0001" />
                <br><br>
                <center><input type="submit" value="Calcular"></center>
				<br>
					<?php
						if($a == 0){
							echo "A equação não é do 2° Grau";
						}
						else{
							$delta = ($b*$b) - (4*$a*$c);
							if($delta < 0){
								echo "Tendo os valores: <br>a = ".$a."<br>b = ".$b."<br>c = ".$c.". <br>O delta é negativo, então a equação não possui raízes reais";
							}
							elseif($delta == 0){
								$raiz = -$b/(2*$a);
								echo "Tendo os valores: <br>a = ".$a."<br>b = ".$b."<br>c = ".$c.". <br>O delta é zero, então a equação possui apenas uma raíz real que é igual a ".$raiz;
							}
							elseif($delta >0){
								$raizdelta = sqrt ($delta);
								$raiz1 = (-$b + $raizdelta) /(2*$a);
								$raiz2 = (-$b - $raizdelta) /(2*$a);
								echo "Tendo os valores: <br>a = ".$a."<br>b = ".$b."<br>c = ".$c.". <br>O delta é positivo, então a equação possui 2 raízes reais: <br>Raiz 1 = ".$raiz1."<br>Raiz 2 = ".$raiz2;
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