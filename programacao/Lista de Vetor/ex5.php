<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo.css"/>
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <meta charset="UTF-8"/>
    <title>Vetor</title>
</head>
<?php
	$n = 0;
		if(isset($_POST['n'])){
			$n = $_POST['n'];
		}
	$pares[] = 0;
	$impares[] = 0;
?>
<body>
	<div id="box">
	<form action="" method="post">
		<br><br>
		<fieldset>
			<legend>Exercicio 05</legend>
			<center>
				<label>Números (separe com espaço): </label><br>
                <textarea rows="6" name="n" required><?php echo $n; ?></textarea>
                <br><br>
                <center><input type="submit" value="Verificar"></center>
                <br>
				<?php 
					$num = explode (" ", $n);
					for ($i = 0; $i < count($num); $i++) { 
						if($num[$i] % 2 == 0){
							$pares[] = $num[$i];
						}
						else{
							$impares[] = $num[$i];
						}
					}
					echo "<b>Números</b> <br>";
					for ($i = 0; $i < count($num); $i++){
						echo $num[$i]."<br>";
					}
					echo "<br><b>Números pares</b> <br>";
					for ($i = 0; $i < count($pares); $i++){
						echo $pares[$i]."<br>";
					}
					echo "<br><b>Números impares</b> <br>";
					for ($i = 0; $i < count($impares); $i++){
						echo $impares[$i]."<br>";
					}
				?>
			</center>
		</fieldset>
	</form>
	</div>
</body>
</html>