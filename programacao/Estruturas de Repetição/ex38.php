<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo.css" />
    <meta charset="UTF-8" />
    <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <title>Exercicios PHP</title>
</head>
<style type="text/css">
	body{
		background-color: #90EE90;
	}
</style>
<?php 
	$x= 0;
		if(isset($_POST['x'])){
			$x = $_POST['x'];
		}
	$y = 0;
		if(isset($_POST['y'])){
			$y = $_POST['y'];
		}
	$z = 0;
		if(isset($_POST['z'])){
			$z = $_POST['z'];
		}
?>
<body>
	<form action="" method="post">
		<br>
		<fieldset>
			<legend>Exercício 38</legend>
			<label>Número inicial: </label>
			<input type="number" name="x" id="n" required value="<?php echo $x ?>"/>
            <br><br>
            <label>Número final: </label>
			<input type="number" name="y" id="n" required value="<?php echo $y ?>"/>
            <br><br>
            <label>Intervalo: </label>
			<input type="number" name="z" id="n" required value="<?php echo $z ?>"/>
            <br><br>
            <center><input type="submit" value="Gerar"></center>
			<center><br><br>
				<?php 
					$soma = 0;
					$cont = 0;
					echo "Números da série: ";
					if($x < $y){
						for ($i = $x; $i <= $y ; $i = $i + $z) { 
							if($i == $y){
								echo $i;
							}
							else{
								echo $i.", ";
							}
							$cont++;
							$soma = $soma + $i;
						}
						$media = $soma/$cont;
						echo "<br>Quantidade de números da série = ".$cont;
						echo "<br>Soma = ".$soma;
						echo "<br>Média = ".$media;
					}
					elseif($x > $y){
						for ($i = $x; $i >= $y; $i = $i - $z) { 
							if($i == $y){
								echo $i;
							}
							else{
								echo $i.", ";
							}
							$cont++;
							$soma = $soma + $i;
						}
						$media = $soma/$cont;
						echo "<br>Quantidade de números da série = ".$cont;
						echo "<br>Soma = ".$soma;
						echo "<br>Média = ".$media;
					}
				?>
			</center>
		</fieldset>
	</form>
	<br><br>
</body>
</html>