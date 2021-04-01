<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo.css"/>
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <meta charset="UTF-8"/>
    <title>Avaliação 29.03</title>
    <style type="text/css">
    	img{
    		height: 25px;
    		width: 25px;
    	}
    	body{
    		font-size: 30px;
    	}
    	b{
    		color: <?php echo "#".$corB ?>;
    	}
    	strong{
    		color: <?php echo "#".$corA ?>;
    	}
    </style>
</head>
	<?php
		$primeiro = "";
		if(isset($_POST['primeiro'])){
			$primeiro = $_POST['primeiro'];
		}
		$segundo = "";
		if(isset($_POST['segundo'])){
			$segundo = $_POST['segundo'];
		}
		$terceiro = "";
		if(isset($_POST['terceiro'])){
			$terceiro = $_POST['terceiro'];
		}
		$corA = "";
		if(isset($_POST['corA'])){
			$corA = $_POST['corA'];
		}
		$corB = "";
		if(isset($_POST['corB'])){
			$corB = $_POST['corB'];
		}
		$linhas = "";
		if(isset($_POST['linhas'])){
			$linhas = $_POST['linhas'];
		}
		$colunas = "";
		if(isset($_POST['colunas'])){
			$colunas = $_POST['colunas'];
		}
	?>
<body>
	<div id="box">
	<form action="" method="post">
		<br><br>
		<fieldset>
			<legend>Exercicio</legend>
				<center>
				<br><br>
				<label>Primeiro Caracter: </label>
				<input type="text" name="primeiro" required value="<?php echo $primeiro ?>">
				<br><br>
				<label>Segundo Caracter: </label>
				<input type="text" name="segundo" required value="<?php echo $segundo ?>">
				<br><br>
				<label>Terceiro Caracter: </label>
				<input type="text" name="terceiro" required value="<?php echo $terceiro ?>">
				<br><br>
				<label>Cor A: </label>
				<input type="text" name="corA" required value="<?php echo $corA ?>">
				<br><br>
				<label>Cor B: </label>
				<input type="text" name="corB" required value="<?php echo $corB ?>">
				<br><br>
				<label>Linhas: </label>
				<input type="number" name="linhas" required value="<?php echo $linhas ?>">
				<br><br>
				<label>Colunas: </label>
				<input type="number" name="colunas" required value="<?php echo $colunas ?>">
				<br><br>
				<input type="submit" value="Enviar">
    			</center>
    			<br><br>
		</fieldset>
	</form>
	<?php 
		for ($i = 1; $i <= $linhas; $i++) { 
			if($i == 1 || $i == $linhas){
				for ($j = 1; $j <= $colunas; $j++) { 
					if($j == 1 || $j == $colunas){
						if($i % 2 != 0){
							echo "<b><style>b{color: #".$corB.";}</style>".$primeiro."</b>";
						}
						else{
							echo "<strong><style>strong{color: #".$corA.";}</style>".$primeiro."</stong>";
						}
					}
					else{
						if($i % 2 != 0){
							echo "<b><style>b{color: #".$corB.";}</style>".$segundo."</b>";
						}
						else{
							echo "<strong><style>strong{color: #".$corA.";}</style>".$segundo."</stong>";
						}
					}
				}
				echo "<br>";
			}
			else{
				for ($j = 1; $j <= $colunas; $j++) { 
					if($j == 1 ||$j == $colunas){
						if($i % 2 != 0){
							echo "<b><style>b{color: #".$corB.";}</style>".$terceiro."</b>";
						}
						else{
							echo "<strong><style>strong{color: #".$corA.";}</style>".$terceiro."</stong>";
						}
					}
					else{
						if($j % 2 == 0){
							echo "<img src='img/circulo1.png'/>";
						}	
						else{
							echo "<img src='img/circulo2.png'/>";
						}
				}
			}
			echo "<br>";
		}
	}
	?>
	</div>
</body>
</html>