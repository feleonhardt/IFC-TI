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
			<legend>Exercício 14</legend>
			<center><label>N termos: </label>
			<input type="number" name="n" id="n" required value="<?php echo $n ?>"/>
            <br><br>
            <input type="submit" value="Verificar"></center>
			<br>
			<center>
				<?php 
				echo "S = ";
				$cont = 1;
				for ($i = 1; $i <= $n ; $i++) { 
					if($i != $n){
						echo $i."/".$cont." + ";
						$cont += 2;
					}
					else{
						echo $i."/".$cont;
					}
				}
				?>
				</center>
		</fieldset>
	</form>
	<br><br>
</body>
</html>