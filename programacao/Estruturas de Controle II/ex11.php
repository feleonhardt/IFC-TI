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
		$id1 = 0;
		if(isset($_POST['id1'])){
			$id1 = $_POST['id1'];
		}
		$id2 = 0;
		if(isset($_POST['id2'])){
			$id2 = $_POST['id2'];
		}
		$id3 = 0;
		if(isset($_POST['id3'])){
			$id3 = $_POST['id3'];
		}
		$media = ($id1+$id2+$id3)/3;
	?>
<div id="borda1">
	<img src="img/borda2.jpg">
</div>
<div id="corpo">
	<form action="" method="post">
		<br>
		<fieldset>
			<legend>Exercício 11</legend>
				<br>
				<label>Idade 1:</label>
                <input type="number" name="id1" id="n" />
                <br><br>
                <label>Idade 2:</label>
                <input type="number" name="id2" id="n" />
                <br><br>
                <label>Idade 3:</label>
                <input type="number" name="id3" id="n" />
                <br><br>
                <center><input type="submit" value="Verificar"></center>
				<br>
					<?php
						if($media<25){
							echo "Turma Jovem";
						}
						elseif($media>=25 && $media<=40){
							echo "Turma Adulta";
						}
						elseif($media>40){
							echo "Turma Idosa";
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