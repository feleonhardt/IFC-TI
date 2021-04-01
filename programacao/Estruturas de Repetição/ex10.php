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
	$base = "";
		if(isset($_POST['base'])){
			$base = $_POST['base'];
		}
	$expoente = "";
		if(isset($_POST['expoente'])){
			$expoente = $_POST['expoente'];
		}
?>
<body>
	<form action="" method="post">
		<br>
		<fieldset>
			<legend>Exercício 10</legend>
			<label>Base: </label>
			<input type="number" name="base" id="n" required value="<?php echo $base ?>"/>
            <br><br>
            <label>Expoente: </label>
			<input type="number" name="expoente" id="n" required value="<?php echo $expoente ?>"/>
            <br><br>
            <center><input type="submit" value="Calcular"></center>
			<center><br><br>
				<?php 
					$pot = 1;
					for ($i = 1; $i <= $expoente; $i++) { 
						$pot = $pot * $base;
					}
					echo $base." elevado a ".$expoente." = ".$pot;
				?>
			</center>
		</fieldset>
	</form>
	<br><br>
</body>
</html>