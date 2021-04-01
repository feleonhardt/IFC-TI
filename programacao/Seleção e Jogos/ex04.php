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
		height: 200px;
	}
	body{
		background-color: #90EE90;
	}
</style>
	<?php
		$n1 = "";
		if(isset($_POST['n1'])){
			$n1 = $_POST['n1'];
		}
		$n2 = "";
		if(isset($_POST['n2'])){
			$n2 = $_POST['n2'];
		}
		$n3 = "";
		if(isset($_POST['n3'])){
			$n3 = $_POST['n3'];
		}
	?>
<body>
	<form action="" method="post">
		<br>
		<fieldset>
			<legend>Perigo</legend>
				<br><center>
                <label>Número 1: </label>
                <input type="number" name="n1" id="n" />
                <br><br>
				<label>Número 2: </label>
                <input type="number" name="n2" id="n" />
                <br><br>
				<label>Número 3: </label>
                <input type="number" name="n3" id="n" step="0.001" />
                <br><br>
                <input type="submit" value="Verificar">
                <br><br><br>
					<?php
				   		if($n1 == $n2 && $n2 == $n3){
				   			echo "Não existe contaminação";
				   			echo "<br><img src='img/1.jpg'>";
				   		}
				   		
				   		if ($n1 > $n2 && $n2 > $n3){ 
							echo "Contaminação abaixo dos limites permitidos"; 
							echo "<br><img src='img/2.png'>";
						} 

						if ($n1 < $n2 && $n2 < $n3){ 
							echo "Contaminação acima dos limites permitidos"; 
							echo "<br><img src='img/3.jpg'>";
						} 
				   	?>
					</center><br><br>
		</fieldset>
	</form>
	<br><br>
</body>
</html>