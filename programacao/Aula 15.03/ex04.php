<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo3.css" />
    <meta charset="UTF-8" />
    <title>Exercicios PHP</title>
    <style type="text/css">
    	img{
    		width: 100px;
    	}
    </style>
</head>
<body>
	<?php
		$escolha = "";
		if(isset($_POST['escolha'])){
			$escolha = $_POST['escolha'];
		}
	?>
	<form action="" method="post">
		<br>
		<fieldset>
			<legend>Exercício</legend>
				<br>
				<label>Pedra, Papel, Tesoura.... </label><br>
				<input type="radio" name="escolha" <?php echo ($escolha == "Pedra")?'checked':''?> value="Pedra"> Pedra<br>
  				<input type="radio" name="escolha" <?php echo ($escolha == "Papel")?'checked':''?> value="Papel"> Papel<br>
  				<input type="radio" name="escolha" <?php echo ($escolha == "Tesoura")?'checked':''?> value="Tesoura"> Tesoura<br>
                <br><br>
                <input type="submit" value="Jogar">
				<br><br>
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
							echo "Usuário <img src='img/papel.png'>";
							echo "<br>Computador <img src='img/pedra.png'>";
						}
						elseif($escolha == "Pedra" && $escolhaC == "Pedra"){
							echo "Usuário <img src='img/pedra.png'>";
							echo "<br>Computador <img src='img/pedra.png'>";
						}
						elseif($escolha == "Pedra" && $escolhaC == "Tesoura"){
							echo "Usuário <img src='img/pedra.png'>";
							echo "<br>Computador <img src='img/tesoura.png'>";
						}
						
						elseif($escolha == "Papel" && $escolhaC == "Pedra"){
							echo "Usuário <img src='img/papel.png'>";
							echo "<br>Computador <img src='img/pedra.png'>";
						}
						elseif($escolha == "Papel" && $escolhaC == "Papel"){
							echo "Usuário <img src='img/papel.png'>";
							echo "<br>Computador <img src='img/papel.png'>";
						}
						elseif($escolha == "Papel" && $escolhaC == "Tesoura"){
							echo "Usuário <img src='img/tesoura.png'>";
							echo "<br>Computador <img src='img/papel.png'>";
						}

						elseif($escolha == "Tesoura" && $escolhaC == "Papel"){
							echo "Usuário <img src='img/tesoura.png'>";
							echo "<br>Computador <img src='img/papel.png'>";
						}
						elseif($escolha == "Tesoura" && $escolhaC == "Pedra"){
							echo "Usuário <img src='img/pedra.png'>";
							echo "<br>Computador <img src='img/tesoura.png'>";
						}
						elseif($escolha == "Tesoura" && $escolhaC == "Tesoura"){
							echo "Usuário<br><img src='img/tesoura.png'>";
							echo "<br>Computador<img src='img/papel.png'>";
						}

					?>
				   	

		</fieldset>
	</form>
</html>
</body>