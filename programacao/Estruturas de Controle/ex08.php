<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo.css" />
    <meta charset="UTF-8" />
    <link rel="shortcut icon" type="image/x-icon" href="img/php.png" />
    <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <title>Exercicio</title>
</head>
<body>
	<?php
		$n1 = 0;
		if(isset($_POST['n1']))
			$n1 = $_POST['n1'];
		$n2 = 0;
		if(isset($_POST['n2']))
			$n2 = $_POST['n2'];
		$media = ($n1+$n2)/2
	?>
<div id="borda1">
	<img src="img/borda2.jpg">
</div>
<div id="corpo">
	<form action="" method="post">
		<br>
		<fieldset>
			<legend>Exercício 08</legend>
				<br><center>
				<label>Nota 1:</label>
                <input type="number" name="n1" id="n" step="0.001" required value="<?php echo $n1 ?>"/>
                <br><br>
                <label>Nota 2:</label>
                <input type="number" name="n2" id="n" step="0.001" required value="<?php echo $n2 ?>"/>
                <br><br>
                <center><input type="submit" value="Calcular média"></center>
				<br></center>
					<?php
						if ($media>=7)
							echo "APROVADO!";
						else
							echo "REPROVADO!";
					?>
		</fieldset>
	</form>
</div>
<div id="borda2">
	<img src="img/borda2.jpg">
</div>
</body>
</html>