<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo.css"/>
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet"/>
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
		<form action="ex007.php" method="post">
		<br><br>
			<fieldset>
				<br>
	            <?php 
					for ($i = 0; $i < $n; $i++) {
						echo "<input type='text' name='v".$i."' required/><br>";
                	}
                	echo "<input type='hidden' name='num'value='$n'><br>";
				?>
				<br><br><input type="submit" value="Enviar">
			</fieldset>
		</form>
	</div>
</body>
</html>