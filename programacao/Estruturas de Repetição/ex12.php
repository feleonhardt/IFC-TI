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
			<legend>Exercício 12</legend>
			<label>n-ésimo termo: </label>
			<input type="number" name="n" id="n" required value="<?php echo $n ?>"/>
            <br><br>
            <center><input type="submit" value="Gerar"></center>
			<center><br>
				<?php 
				for ($i = 0; $i <= $n; $i++) { 
					$c1 = pow(1.618034, $i);
					$c2 = pow((1 - 1.618034), $i);
					$c3 = sqrt(5);
					$fib = ($c1 - $c2) / $c3;
					if($i == $n){
						echo round($fib);
					}
					else{
						echo round($fib).", ";
					}
				}
				?>
			</center>
		</fieldset>
	</form>
	<br><br>
</body>
</html>