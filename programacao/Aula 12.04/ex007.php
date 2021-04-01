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
	$num = "";
		if(isset($_POST['num'])){
			$num = $_POST['num'];
	}
	for ($i = 0; $i < $num; $i++) {
		$v[$i] = isset($_POST['v'.$i])?$_POST['v'.$i]:1;
	}
?>
<body>
	<div id="box">
		<form action="ex007.php" method="post">
		<br><br>
			<fieldset>
				<br>
	            <?php 
					for ($i = 0; $i < $num; $i++) {
						echo "<input type= 'checkbox' value='".$v[$i]."'>".$v[$i]."<br>";
					}
				?>
			</fieldset>
		</form>
	</div>
</body>
</html>