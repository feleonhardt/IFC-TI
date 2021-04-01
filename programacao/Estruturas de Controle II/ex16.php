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
		$op = 1;
		if(isset($_POST['op'])){
			$op = $_POST['op'];
		}
	?>
<div id="borda1">
	<img src="img/borda2.jpg">
</div>
<div id="corpo">
	<form action="" method="post">
		<br><br>
		<fieldset>
			<legend>Exercício 16</legend>
				<br>
				<label>Número 1:</label>
                <input type="number" name="n1" id="n" step="0.0001" />
                <br><br>
                <label>Número 2:</label>
                <input type="number" name="n2" id="n" step="0.0001" />
                <br><br>
                <label for="op">Selecione a operação:</label>
		        <select name="op" id="n">
		          <option value=""></option>
		          <option value="1">Adição</option>
		          <option value="2">Subtração</option>
		          <option value="3">Multiplicação</option>
		          <option value="4">Divisão</option>
		        </select>
		        <br><br>
                <center><input type="submit" value="Calcular"></center>
				<br>
					<?php
						switch ($op) {
							case '1':
								$ope = $n1 + $n2;
								echo $n1." + ".$n2." = ".$ope;
								break;
							case '2':
								$ope = $n1 - $n2;
								echo $n1." - ".$n2." = ".$ope;
								break;
							case '3':
								$ope = $n1 * $n2;
								echo $n1." * ".$n2." = ".$ope;
								break;
							case '4':
								$ope = $n1 / $n2;
								echo $n1." / ".$n2." = ".$ope;
								break;
						}
						echo " --> O resultado é um número ";
						$verifica = floor($ope);
						$resto = $ope - $verifica;
						if($resto == 0){
							echo "inteiro ";
						}
						else{
							echo "decimal ";
						}

						if($ope>0){
							echo "positivo";
						}
						else{
							echo "negativo";
						}

						if($ope%2 == 0){
							echo " e par";
						}
						else{
							echo " e impar";
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