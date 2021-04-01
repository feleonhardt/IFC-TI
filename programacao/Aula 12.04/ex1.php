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
		<form action="" method="post">
		<br><br>
			<fieldset>
				<legend>Exemplo Hidden</legend>
				<center>
	                	<br>
	                	<input type="text" name="n">
	                	<input type="submit" value="Ok">
	                <br>
					<?php 
						echo "<input type='hidden' value = '$n'>";
					?>
				</center>
			</fieldset>
		</form>
	</div>
</body>
</html>