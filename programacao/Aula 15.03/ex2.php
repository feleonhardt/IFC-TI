<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo3.css" />
    <meta charset="UTF-8" />
    <title>Exercicios PHP</title>
    <style type="text/css">
    	img{
    		width: 200px;
    	}
    </style>
</head>
<body>
	<?php
		$n1 = "0";
		if(isset($_POST['n1'])){
			$n1 = $_POST['n1'];
		}
		if(isset($_POST['n2'])){
			$n2 = $_POST['n2'];
		}
		if(isset($_POST['n3'])){
			$n3 = $_POST['n3'];
		}
	?>
	<form action="" method="post">
		<br>
		<fieldset>
			<legend>Exercício</legend>
				<br>
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
                <br><br>
                <br><br>
				<br>
					<?php
				   		if($n1 == $n2 && $n1 == $n3){
				   			echo "Não existe contaminação";
				   			echo "<br><img src='img/1.jpg'>";
				   		}
				   		
				   		if ($n1 > $n2 && $n2 > $n3){ 
							echo "Contaminação acima dos limites permitidos"; 
							echo "<br><img src='img/3.jpg'>";
						} 

						if ($n1 < $n2 && $n2 < $n3){ 
							echo "Contaminação abaixo dos limites permitidos"; 
							echo "<br><img src='img/1.png'>";
						} 
				   	?>
		</fieldset>
	</form>
</html>
</body>