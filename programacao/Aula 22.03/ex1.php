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
	$n = "";
		if(isset($_POST['n'])){
			$n = $_POST['n'];
		}
?>
<body>
	<form action="" method="post">
		<br>
		<fieldset>
			<legend>Exercício 01</legend>
			<center><label>Nota: </label>
			<input type="number" name="n" step="0.001" id="n" required value="<?php echo $n ?>"/>
            <br><br>
            <input type="submit" value="Verificar"></center>
			<br>
			<center>
				<?php 
					while($n < 0 || $n > 10){
						echo "Nota inválida...Insira outra nota ";
						break;
					}
					if($n >= 0 && $n <= 10){
						echo "Nota válida!";
					}

				?>
				</center>
		</fieldset>
	</form>
	<br><br>
</body>
</html>