<!DOCTYPE html>
<?php
	$jogada= isset($_POST['jogada']) ? $_POST['jogada'] : '';
	$titulo = "PEDRA, PAPEL OU TESOURA";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<center>
	<h1>Jogada do usuário</h1>
	<form action="" method="post">
		Pedra<input type="radio" name="jogada" id="jogada" value="pedra">
		Papel<input type="radio" name="jogada" id="jogada" value="papel">
		Tesoura<input type="radio" name="jogada" id="jogada" value="tesoura"><br><br>
		<input type="submit" name="acao" id="acao" value="Jogar">
	</form>
	<h1>USUÁRIO    x    COMPUTADOR</h1>
	<?php
	$jogada_pc= mt_rand(1,3);
		switch ($jogada) {
			case 'pedra':
				echo "<img src='img/pedra_usuario.png' width='500px'>";
				switch ($jogada_pc) {
					case '1':
						echo "<img src='img/pedra_pc.png' width='500px'>";
						echo "<br><h1>EMPATE!</h1>";
						break;
					case '2':
						echo "<img src='img/papel_pc.png' width='500px'>";
						echo "<br><h1>COMPUTADOR GANHOU!</h1>";
						break;
					case '3':
						echo "<img src='img/tesoura_pc.png' width='500px'>";
						echo "<br><h1>USUÁRIO GANHOU!</h1>";
						break;
				}
				break;
			case 'papel':
				echo "<img src='img/papel_usuario.png' width='500px'>";
				switch ($jogada_pc) {
					case '1':
						echo "<img src='img/pedra_pc.png' width='500px'>";
						echo "<br><h1>USUÁRIO GANHOU!</h1>";
						break;
					case '2':
						echo "<img src='img/papel_pc.png' width='500px'>";
						echo "<br><h1>EMPATE!</h1>";
						break;
					case '3':
						echo "<img src='img/tesoura_pc.png' width='500px'>";
						echo "<br><h1>COMPUTADOR GANHOU!</h1>";
						break;
				}

				break;
			case 'tesoura':
				echo "<img src='img/tesoura_usuario.png' width='500px'>";
				switch ($jogada_pc) {
					case '1':
						echo "<img src='img/pedra_pc.png' width='500px'>";
						echo "<br><h1>COMPUTADOR GANHOU!</h1>";
						break;
					case '2':
						echo "<img src='img/papel_pc.png' width='500px'>";
						echo "<br><h1>USUÁRIO GANHOU!</h1>";
						break;
					case '3':
						echo "<img src='img/tesoura_pc.png' width='500px'>";
						echo "<br><h1>EMPATE!</h1>";
						break;
				}

				break;
			
			default:
				echo "<br>Error!";
				break;
		}
	?>
	</center>
		
</body>
</html>