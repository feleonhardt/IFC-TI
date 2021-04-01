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
	$n = 0;
		if(isset($_POST['n'])){
			$n = $_POST['n'];
		}
?>
<body>
	<form action="" method="post">
		<br>
		<fieldset>
			<legend>Exercício 09</legend>
			<label>Tabuada de: </label>
			<input type="number" name="n" id="n" required value="<?php echo $n ?>"/>
            <br><br>
            <center><input type="submit" value="Gerar"></center>
			<center><br><br>
				<?php 
					echo "Tabuada de ".$n.": <br>";
					for ($i = 1; $i <= 10; $i++) { 
						$tab = $i * $n;
						echo $n." x ".$i." = ".$tab."<br>";
					}
				?>
			</center>
		</fieldset>
	</form>
	<br><br>
</body>
</html>