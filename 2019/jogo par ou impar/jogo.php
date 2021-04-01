<!DOCTYPE html>
<?php
	$num= isset($_POST['num']) ? $_POST['num'] : 0;
	$jogada= isset($_POST['jogada']) ? $_POST['jogada'] : '';
	$titulo = "Par ou ímpar";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body><center>
	<h1>Par ou ímpar</h1><br>
	<hr>
	<form action="" method="post">
		Número: 
		<select name="num">
			<option value="0">0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
		</select><br>
		<hr>
		Jogada: 
		<input type="radio" name="jogada" id="jogada" value="par" checked="">Par
		<input type="radio" name="jogada" id="jogada" value="impar">Impar<br>
		<hr>
		<input type="submit" name="acao" id="acao" value="JOGAR">
		<hr>
	</form>
		<?php
			
			if ($jogada!='') {
				switch ($jogada) {
					case 'par':
						$jogadapc='impar';
						break;
					case 'impar':
						$jogadapc='par';
						break;
				}
				$numpc=mt_rand(0,10);
				$soma=$num+$numpc;
				switch ($num) {
					case 0:
						echo "<br><img src='img/0.png' width='500px' border='2px'>";
						break;
					case 1:
						echo "<br><img src='img/1.png' width='500px' border='2px'>";
						break;
					case 2:
						echo "<br><img src='img/2.png' width='500px' border='2px'>";
						break;
					case 3:
						echo "<br><img src='img/3.png' width='500px' border='2px'>";
						break;
					case 4:
						echo "<br><img src='img/4.png' width='500px' border='2px'>";
						break;
					case 5:
						echo "<br><img src='img/5.png' width='500px' border='2px'>";
						break;
					case 6:
						echo "<br><img src='img/6.png' width='500px' border='2px'>";
						break;
					case 7:
						echo "<br><img src='img/7.png' width='500px' border='2px'>";
						break;
					case 8:
						echo "<br><img src='img/8.png' width='500px' border='2px'>";
						break;
					case 9:
						echo "<br><img src='img/9.png' width='500px' border='2px'>";
						break;
					case 10:
						echo "<br><img src='img/10.png' width='500px' border='2px'>";
						break;
				}
				echo "<b style='font-size: 45px'> vs </b>";
				switch ($numpc) {
					case 0:
						echo "<img src='img/0.png' width='500px' border='2px'>";
						break;
					case 1:
						echo "<img src='img/1.png' width='500px' border='2px'>";
						break;
					case 2:
						echo "<img src='img/2.png' width='500px' border='2px'>";
						break;
					case 3:
						echo "<img src='img/3.png' width='500px' border='2px'>";
						break;
					case 4:
						echo "<img src='img/4.png' width='500px' border='2px'>";
						break;
					case 5:
						echo "<img src='img/5.png' width='500px' border='2px'>";
						break;
					case 6:
						echo "<img src='img/6.png' width='500px' border='2px'>";
						break;
					case 7:
						echo "<img src='img/7.png' width='500px' border='2px'>";
						break;
					case 8:
						echo "<img src='img/8.png' width='500px' border='2px'>";
						break;
					case 9:
						echo "<img src='img/9.png' width='500px' border='2px'>";
						break;
					case 10:
						echo "<img src='img/10.png' width='500px' border='2px'>";
						break;
				}
				echo "<hr>";
				echo "Soma: ".$soma;
				if ($soma%2==0) {
					$ganhador='par';
				}else{
					$ganhador='impar';
				}
				echo "<hr>";

				if ($jogada==$ganhador) {
					echo "<br><h1 style=' color: green'>Você ganhou!</h1>";
				}elseif ($jogadapc==$ganhador) {
					echo "<br><h1 style=' color: red'>PC ganhou!</h1>";
				}else{
					echo "<br><h1>ERRO</h1>";
				}
				echo "<hr>";
			}
		?>
	</center>
</body>
</html>