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
	$n1 = "";
		if(isset($_POST['n1'])){
			$n1 = $_POST['n1'];
		}
	$n2 = "";
		if(isset($_POST['n2'])){
			$n2 = $_POST['n2'];
		}
?>
<body>
	<form action="" method="post">
		<br>
		<fieldset>
			<legend>Exercício 07</legend>
			<label>Número 1: </label>
			<input type="number" name="n1" id="n" required value="<?php echo $n1 ?>"/>
            <br><br>
            <label>Número 2: </label>
			<input type="number" name="n2" id="n" required value="<?php echo $n2 ?>"/>
            <br><br>
            <center><input type="submit" value="Gerar"></center>
			<center><br><br>
				<?php 
					if($n1 > $n2){
						for ($i = $n2; $i <= $n1; $i++) { 
							echo $i." ";
						}
					}
					elseif ($n2 > $n1) {
						for ($i = $n1; $i <= $n2; $i++) { 
							echo $i." ";
						}
					}
				?>
			</center>
		</fieldset>
	</form>
	<br><br>
</body>
</html>