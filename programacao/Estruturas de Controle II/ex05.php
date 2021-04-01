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
	?>
<div id="borda1">
	<img src="img/borda2.jpg">
</div>
<div id="corpo">
	<form action="" method="post">
		<br><br><br>
		<fieldset>
			<legend>Exercício 05</legend>
				<br>
				<label>Nota 1:</label>
                <input type="number" name="n1" id="n" step="0.001" />
                <br><br>
                <label>Nota 2:</label>
                <input type="number" name="n2" id="n" step="0.001" />
                <br><br>
                <center><input type="submit" value="verificar situação"></center>
				<br>
					<?php
						$media = ($n1+$n2)/2;
						if ($media>=9 && $media<=10){
							echo "Tendo as notas ".$n1." e ".$n2.", a média de aproveitamento é igual a ".$media.". O conceito do aluno é A, sendo assim, está APROVADO!";
						}
						elseif ($media>=7.5 && $media<9){
							echo "Tendo as notas ".$n1." e ".$n2.", a média de aproveitamento é igual a ".$media.". O conceito do aluno é B, sendo assim, está APROVADO!";
						}
						elseif ($media>=6.0 && $media<7.5){
							echo "Tendo as notas ".$n1." e ".$n2.", a média de aproveitamento é igual a ".$media.". O conceito do aluno é C, sendo assim, está APROVADO!";
						}
						elseif ($media>=4.0 && $media<6.0){
							echo "Tendo as notas ".$n1." e ".$n2.", a média de aproveitamento é igual a ".$media.". O conceito do aluno é D, sendo assim, está REPROVADO!";
						}
						elseif ($media>=0 && $media<4.0){
							echo "Tendo as notas ".$n1." e ".$n2.", a média de aproveitamento é igual a ".$media.". O conceito do aluno é E, sendo assim, está REPROVADO!";
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