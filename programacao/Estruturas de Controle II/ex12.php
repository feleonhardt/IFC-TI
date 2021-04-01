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
		$n3 = 0;
		if(isset($_POST['n3'])){
			$n3 = $_POST['n3'];
		}
		$media = ($n1+$n2+$n3)/3;
	?>
<div id="borda1">
	<img src="img/borda2.jpg">
</div>
<div id="corpo">
	<form action="" method="post">
		<br>
		<fieldset>
			<legend>Exercício 12</legend>
				<br>
				<label>Nota 1:</label>
                <input type="number" name="n1" id="n" step="0.0001"/>
                <br><br>
                <label>Nota 2:</label>
                <input type="number" name="n2" id="n" step="0.0001"/>
                <br><br>
                <label>Nota 3:</label>
                <input type="number" name="n3" id="n" step="0.0001"/>
                <br><br>
                <center><input type="submit" value="Verificar"></center>
				<br>
					<?php
						if($media>=7){
							if($media==10){
								echo "Tendo a média igual a 10, o aluno está APROVADO COM DISTINÇÃO";
							}
							else{
								echo "Tendo a média ".$media.", o aluno está APROVADO";
							}
						}
						elseif($media<7){
							echo "Tendo a média ".$media.", o aluno está REPROVADO";
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