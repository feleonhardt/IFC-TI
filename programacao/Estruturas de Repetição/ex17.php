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
			<legend>Exercício 17</legend>
			<label>Número: </label>
			<input type="number" name="n" id="n" required value="<?php echo $n ?>"/>
            <br><br>
            <center><input type="submit" value="Verificar"></center>
			<center><br>
				<?php 
					$cont = 0;
					for ($i = 1; $i <= $n; $i++) { 
						if($n % $i == 0){
							$cont++;
						}
					}
					if($cont == 2){
						echo $n." é um número primo";
					}
					else{
						echo $n." não é um número primo";
					}
				?>
			</center>
		</fieldset>
	</form>
	<br><br>
</body>
</html>