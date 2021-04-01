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
	img{
		width: 200px;
		height: 100px;
	}
	body{
		background-color: #90EE90;
	}
</style>
<?php 
	define("MINIMO", 1);
	define("MAXIMO", 10);
	$n = "";
		if(isset($_POST['n'])){
			$n = $_POST['n'];
		}
?>
<body>
	<form action="" method="post">
		<br>
		<fieldset>
			<legend>Acerte o número</legend>
			<center><label>Número: </label>
			<input type="number" name="n" id="n" required value="<?php echo $n ?>" min="1" max="10"/>
                <br><br>
                <input type="submit" value="Sortear"></center>
				<br>
				<center>
				<?php 
					mt_srand((double) microtime()*1000000);

					$sorteio = mt_rand(MINIMO, MAXIMO);

					if($n == $sorteio){
						echo "Parabéns você acertou: ".$sorteio;
					}
					elseif($sorteio > $n){
						echo "Você errou, o número era maior: ".$sorteio;
					}
					elseif($sorteio < $n){
						echo "Você errou, o número era menor: ".$sorteio;
					}
				?>
				</center>
		</fieldset>
	</form>
	<br><br>
</body>
</html>