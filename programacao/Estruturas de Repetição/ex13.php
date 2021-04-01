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
	$n = 1;
		if(isset($_POST['n'])){
			$n = $_POST['n'];
		}
?>
<body>
	<form action="" method="post">
		<br>
		<fieldset>
			<legend>Exercício 13</legend>
			<label>Número: </label>
			<input type="number" name="n" id="n" required value="<?php echo $n ?>"/>
            <br><br>
            <center><input type="submit" value="Calcular"></center>
			<center><br>
				<?php 
					$fat = 1;
					echo $n." != ";
					for ($i = $n; $i >= 1; $i--) { 
						$fat = $fat * $i;
						if($i != 1){
							echo $i.".";
						}
						else{
							echo $i. " = ".$fat;
						}
					}
				?>
			</center>
		</fieldset>
	</form>
	<br><br>
</body>
</html>