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
	
	body{
		background-color: #90EE90;
	}
</style>
	<?php
		$escolha = "";
		if(isset($_POST['escolha'])){
			$escolha = $_POST['escolha'];
		}
	?>
<body>
	<form action="" method="post">
		<br>
		<fieldset>
			<legend>Pedra, Papel, Tesoura....</legend>
				<br><center>
                <input type="radio" name="escolha" <?php echo ($escolha == "Pedra")?'checked':''?> value="Pedra"> Pedra<br>
  				<input type="radio" name="escolha" <?php echo ($escolha == "Papel")?'checked':''?> value="Papel"> Papel<br>
  				<input type="radio" name="escolha" <?php echo ($escolha == "Tesoura")?'checked':''?> value="Tesoura"> Tesoura<br>
                <br><br>
                <input type="submit" value="Jogar">
                <br><br><br>
					<?php
				   		$sorteio = rand (0, 2);
						if($sorteio == 0){
							$escolhaC = "Pedra";
						}
						elseif($sorteio == 1){
							$escolhaC = "Papel";
						}
						if($sorteio == 2){
							$escolhaC = "Tesoura";
						}

						if($escolha == "Pedra" && $escolhaC == "Papel"){
							echo "<img src='img/pedraC.png'>";
						}
						elseif($escolha == "Pedra" && $escolhaC == "Pedra"){
							echo "<img src='img/pedraE.png'>";
						}
						elseif($escolha == "Pedra" && $escolhaC == "Tesoura"){
							echo "<img src='img/pedraU.png'>";
						}

						if($escolha == "Papel" && $escolhaC == "Papel"){
							echo "<img src='img/papelE.png'>";
						}
						elseif($escolha == "Papel" && $escolhaC == "Pedra"){
							echo "<img src='img/papelU.png'>";
						}
						elseif($escolha == "Papel" && $escolhaC == "Tesoura"){
							echo "<img src='img/papelC.png'>";
						}

						if($escolha == "Tesoura" && $escolhaC == "Papel"){
							echo "<img src='img/tesouraU.png'>";
						}
						elseif($escolha == "Tesoura" && $escolhaC == "Pedra"){
							echo "<img src='img/tesouraC.png'>";
						}
						elseif($escolha == "Tesoura" && $escolhaC == "Tesoura"){
							echo "<img src='img/tesouraE.png'>";
						}					
				   	?>
					</center><br><br>
		</fieldset>
	</form>
	<br><br>
</body>
</html>