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
	$n = "1 2";
		if(isset($_POST['n'])){
			$n = $_POST['n'];
		}
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
					$x = 1;
					$num = explode (" ", $n);
					echo "<b>Números</b> <br>";
					for ($i = 0; $i < count($num); $i++){
						if($num[$i]%2 == 0){
							echo $x." - ".$num[$i]." - par<br>";
						}
						else{
							echo $x." - ".$num[$i]." - impar<br>";
						}	
						$x++;
					}
				?>
			</center>
		</fieldset>
	</form>
	</div>
</body>
</html>