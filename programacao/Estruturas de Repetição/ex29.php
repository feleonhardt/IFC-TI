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
	$nTab = 0;
		if(isset($_POST['nTab'])){
			$nTab = $_POST['nTab'];
		}
	$nIn = 0;
		if(isset($_POST['nIn'])){
			$nIn = $_POST['nIn'];
		}
	$nTe = 0;
		if(isset($_POST['nTe'])){
			$nTe = $_POST['nTe'];
		}
?>
<body>
	<form action="" method="post">
		<br>
		<fieldset>
			<legend>Exercício 29</legend>
			<label>Montar a tabuada de: </label>
			<input type="number" name="nTab" id="n" required value="<?php echo $nTab ?>"/>
            <br><br>
            <label>Começar por: </label>
			<input type="number" name="nIn" id="n" required value="<?php echo $nIn ?>"/>
            <br><br>
            <label>Terminar em: </label>
			<input type="number" name="nTe" id="n" required value="<?php echo $nTe ?>"/>
            <br><br>
            <center><input type="submit" value="Gerar"></center>
			<center><br><br>
				<?php 
					if($nTe < $nIn){
						echo "Você inseriu um número final menor que o número inicial...Tente novamente...";
					}
					else{
						echo "Tabuada de ".$nTab." começando em ".$nIn." e terminando em ".$nTe.": <br>";
						for ($i = $nIn; $i <= $nTe; $i++) { 
							$tab = $i * $nTab;
							echo $nTab." x ".$i." = ".$tab."<br>";
						}
					}
				?>
			</center>
		</fieldset>
	</form>
	<br><br>
</body>
</html>