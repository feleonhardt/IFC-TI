<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo.css"/>
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <meta charset="UTF-8"/>
    <title>Vetor</title>
</head>
<?php
	$texto = "";
		if(isset($_POST['texto'])){
			$texto = $_POST['texto'];
		}
?>
<body>
	<div id="box">
	<form action="" method="post">
		<br><br>
		<fieldset>
			<legend>Exercicio 10</legend>
			<center>
				<label>Texto: </label><br>
                <textarea rows="6" name="texto" required><?php echo $texto; ?></textarea>
                <br><br>
                <center><input type="submit" value="Verificar"></center>
                <br>
				<?php 
					$x = 1;
					$vet = str_split($texto);
					foreach ($vet as $letra) {
						if($letra == " "){
							echo $x."ª posição: "."&nbsp; <br>";
						}else{
							echo $x."ª posição: ".$letra."<br>";
						}
						$x++;
					}
				?>
			</center>
		</fieldset>
	</form>
	</div>
</body>
</html>