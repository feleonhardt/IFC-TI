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
	$n4 = 0;
		if(isset($_POST['n4'])){
			$n4 = $_POST['n4'];
		}
	$n5 = 0;
		if(isset($_POST['n5'])){
			$n5 = $_POST['n5'];
		}
	$n6 = 0;
		if(isset($_POST['n6'])){
			$n6 = $_POST['n6'];
		}
	$n7 = 0;
		if(isset($_POST['n7'])){
			$n7 = $_POST['n7'];
		}
	$n8 = 0;
		if(isset($_POST['n8'])){
			$n8 = $_POST['n8'];
		}
	$n9 = 0;
		if(isset($_POST['n9'])){
			$n9 = $_POST['n9'];
		}
	$n10 = 0;
		if(isset($_POST['n10'])){
			$n10 = $_POST['n10'];
		}
?>
<body>
	<form action="" method="post">
		<br>
		<fieldset>
			<legend>Exercício 11</legend>
			<br><br>
				<?php 
					$par = 0;
					$impar = 0;
					for ($i = 1; $i <= 10; $i++) { 
						echo "<label>Número $i: </label><input type='nber' name='n$i' id='n' required/><br><br>";
					}
					echo "<center><input type='submit' value='Verificar'></center>";
					if ($n1 % 2 == 0) {
				      $par++;
				    } else {
				      $impares =  $impares + 1;
				    }
				    if ($n2 % 2 == 0) {
				      $par++;
				    } else {
				      $impar++;
				    }
				    if ($n3 % 2 == 0) {
				      $par++;
				    } else {
				      $impar++;
				    }
				    if ($n4 % 2 == 0) {
				      $par++;
				    } else {
				      $impar++;
				    }
				    if ($n5 % 2 == 0) {
				      $par++;
				    } else {
				      $impar++;
				    }
				    if ($n6 % 2 == 0) {
				      $par++;
				    } else {
				      $impar++;
				    }
				    if ($n7 % 2 == 0) {
				      $par++;
				    } else {
				      $impar++;
				    }
				    if ($n8 % 2 == 0) {
				      $par++;
				    } else {
				      $impar++;
				    }
				    if ($n9 % 2 == 0) {
				      $par++;
				    } else {
				      $impar++;
				    }
				    if ($n10 % 2 == 0) {
				      $par++;
				    } else {
				      $impar++;
				    }
					echo "<br><br><center>Quantidade de números pares: ".$par."<br>Quantidade de números impares: ".$impar."<center>";
				?>
		</fieldset>
	</form>
	<br><br>
</body>
</html>