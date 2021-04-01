<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo3.css" />
    <meta charset="UTF-8" />
    <link rel="shortcut icon" type="image/x-icon" href="img/php.png" />
    <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <title>Exercicios PHP</title>
    <style type="text/css">
    	img{
    		width: 200px;
    	}
    </style>
</head>
<body>
	<?php
		$n1 = "0";
		if(isset($_POST['n1'])){
			$n1 = $_POST['n1'];
		}
		$escolha = "";
		if(isset($_POST['escolha'])){
			$escolha = $_POST['escolha'];
		}
	?>
	<form action="" method="post">
		<br>
		<fieldset>
			<legend>Exercício</legend>
				<br>
				<label>Par ou Impar? </label><br>
				<input type="radio" name="escolha" <?php echo ($escolha == "Par")?'checked':''?> value="Par"> Par<br>
  				<input type="radio" name="escolha" <?php echo ($escolha == "Impar")?'checked':''?> value="Impar"> Impar<br>
                <br>
                <label>Número: </label>
                <select name="n1">
                  <option <?php if ($n1 == 0) {echo "selected";};?> value="0">0</option>
				  <option <?php if ($n1 == 1) {echo "selected";};?> value="1">1</option>
				  <option <?php if ($n1 == 2) {echo "selected";};?> value="2">2</option>
				  <option <?php if ($n1 == 3) {echo "selected";};?> value="3">3</option>
				  <option <?php if ($n1 == 4) {echo "selected";};?> value="4">4</option>
				  <option <?php if ($n1 == 5) {echo "selected";};?> value="5">5</option>
				  <option <?php if ($n1 == 6) {echo "selected";};?> value="6">6</option>
				  <option <?php if ($n1 == 7) {echo "selected";};?> value="7">7</option>
				  <option <?php if ($n1 == 8) {echo "selected";};?> value="8">8</option>
				  <option <?php if ($n1 == 9) {echo "selected";};?> value="9">9</option>
				  <option <?php if ($n1 == 10) {echo "selected";};?> value="10">10</option>
				</select>
                <br><br>
                <input type="submit" value="Jogar">
				<br><br>
					<?php
				   		if($escolha == "Par"){
				   			$escolhaC = "Impar";
				   		}
				   		else{
				   			$escolhaC = "Par";
				   		}
				   		$n2 = rand (0, 10);

				   		$soma = $n1 + $n2;

				   		if($soma%2 == 0){
				   			$vence = "Par";
				   		}
				   		else{
				   			$vence = "Impar";
				   		}

				   		echo "O número do usuário é ".$n1;
				   		echo "<br>A escolha do usuário é ".$escolha;
				   		echo "<br>O número do computador é ".$n2;
				   		echo "<br>A escolha do computador é ".$escolhaC;
				   		echo "<br>A soma foi ".$soma;
				   		if($escolha == $vence){
				   			echo "<br>O usuário venceu";
				   		}
				   		else{
				   			echo "<br>O computador venceu";
				   		}
				   	?>
		</fieldset>
	</form>
</html>
</body>