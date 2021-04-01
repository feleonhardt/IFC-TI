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
		<br><br><br>
		<fieldset>
			<legend>Exercício 06</legend>
				<br>
				<label>Digite um número: </label>
                <input type="number" name="n" id="n" required value="<?php echo $n ?>"/>
                <br><br>
                <center><input type="submit" value="Verificar"></center>
				<br>
					<?php
				   		if($n%2 == 0){
				   			++$n;
				   			echo "Sendo um número par, transformado para um número impar: ".$n;
				   		}
				   		else{
				   			--$n;
				   			echo "Sendo um número impar, transformado para um número par: ".$n;
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