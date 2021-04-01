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
	$n = "";
		if(isset($_POST['n'])){
			$n = $_POST['n'];
		}
?>
<body>
	<div id="box">
	<form action="" method="post">
		<br><br>
		<fieldset>
			<legend>Exercicio 12</legend>
			<center>
				<label>Números (separe com espaço): </label><br>
                <textarea rows="6" name="n" required><?php echo $n; ?></textarea>
                <br><br>
                <center><input type="submit" value="Verificar"></center>
                <br>
				<?php 
					$num = explode (" ", $n);
					for ($i = 0; $i < count($num); $i++) { 
						$fatorial[] = 1;
						echo $num[$i]." != ";
						for ($j = $num[$i]; $j >= 1; $j--) { 
							$fatorial[$i] = $fatorial[$i] * $j;
							if($j == 1){
								echo $j;
							}
							else{
								echo $j." * ";
							}
						}
						echo " = ".$fatorial[$i]."<br>";
					}
					
				?>
			</center>
		</fieldset>
	</form>
	</div>
</body>
</html>