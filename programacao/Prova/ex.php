<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo.css"/>
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <meta charset="UTF-8"/>
    <title>Prova</title>
    <style type="text/css">
    	h6{
    		color: red;
    	}
    	h5{
    		color: orange;
    	}
    	h4{
    		color: green;
    	}
    	img{
    		width: 200px;
    	}
    </style>
</head>
	<?php
		$raio = 7.65;
		if(isset($_POST['raio'])){
			$raio = $_POST['raio'];
		}
		$altura = 16.89;
		if(isset($_POST['altura'])){
			$altura = $_POST['altura'];
		}
		$nivel = "baixo";
		if(isset($_POST['nivel'])){
			$nivel = $_POST['nivel'];
		}
	?>
<body>
	<div id="box">
	<form action="" method="post">
		<br><br>
		<fieldset>
			<legend>Cilindro</legend>
				<center>
				<br><br>
				<label>Raio: </label>
				<input type="number" name="raio" step="0.001" required value="<?php echo $raio ?>">
				<br><br>
				<label>Altura: </label>
				<input type="number" name="altura" step="0.001" required value="<?php echo $altura ?>">
				<br><br>
				<label>Nível de Segurança: </label>
				<input type="radio" name="nivel" <?php if($nivel == "baixo") echo "checked"; ?> value="baixo">Baixo
  				<input type="radio" name="nivel" <?php if($nivel == "medio") echo "checked"; ?> value="medio">Médio
  				<input type="radio" name="nivel" <?php if($nivel == "alto") echo "checked"; ?> value="alto">Alto
  				<br><br>
  				<input type="submit" value="Enviar">
    			</center>
    			<br><br>
    			<?php 
					$area1 = (2 * 3.14 * $raio)*($altura);
					$area2 = 3.14 * ($raio*$raio);
					$areaTotal = ($area1*2) + ($area2*3);					
					$litros = $areaTotal*4;
					$latas = ceil($litros/100);
			
					if($nivel == "baixo"){
						$valor = $latas * 342.49;
						echo "<center><img src='img/baixo.png'><br>";
						echo "<h6>Raio: ".$raio." metros e Altura ".$altura." metros<br><br>";
						echo "Área Total: ".number_format($areaTotal,2,',','.')." metros<br><br>";
						echo "Serão gastos: ".number_format($litros,2, ',','.')." litros<br><br>";
						echo "Você vai utilizar: ".$latas." latas<br><br>";
						echo "Você vai gastar: R$ ".number_format($valor,2, ',','.')."<br></h6></center>";
					}
					if($nivel == "medio"){
						$valor = $latas * 479.27;
						echo "<center><img src='img/medio.png'><br><br>";
						echo "<h5>Raio: ".$raio." metros e Altura ".$altura." metros<br><br>";
						echo "Área Total: ".number_format($areaTotal,2, ',','.')." metros<br><br>";
						echo "Serão gastos: ".number_format($litros,2, ',','.')." litros<br><br>";
						echo "Você vai utilizar: ".$latas." latas<br><br>";
						echo "Você vai gastar: R$ ".number_format($valor,2, ',','.')."<br></h5></center>";
					}
					if($nivel == "alto"){
						$valor = $latas * 623.54;
						echo "<center><img src='img/alto.png'><br><br>";
						echo "<h4>Raio: ".$raio." metros e Altura ".$altura." metros<br><br>";
						echo "Área Total: ".number_format($areaTotal,2, ',','.')." metros<br><br>";
						echo "Serão gastos: ".number_format($litros,2, ',','.')." litros<br><br>";
						echo "Você vai utilizar: ".$latas." latas<br><br>";
						echo "Você vai gastar: R$ ".number_format($valor,2, ',','.')."<br></h4></center>";
					}
				?>
		</fieldset>
	</form>
	</div>
</body>
</html>