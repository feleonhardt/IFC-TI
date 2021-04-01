<!DOCTYPE html>
<?php
	$aposta= isset($_POST['aposta']) ? $_POST['aposta'] : '';
	$titulo = "Jogo do Bicho";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<center>
	<h1><?php echo $titulo;?></h1>
	<?php
	echo "<form action='' method='post'>";
		//echo "<img src='img/tabela.png' width='800px'><br>";
		echo "<fieldset>";
			echo "Informe qual aposta deseja realizar:";
			echo "<select name='aposta' id='aposta'>";
				echo "<option value='1' l>GRUPO SECO (18x)</option>";
				echo "<option value='2'>GRUPO S/ COLOCAÇÃO (3,6x)</option>";
				echo "<option value='3'>DEZENA SECA (60x)</option>";
				echo "<option value='4'>DEZENA S/ COLOCAÇÃO (12x)</option>";
				echo "<option value='5'>CENTENA SECA (600x)</option>";
				echo "<option value='6'>CENTENA S/ COLOCAÇÃO (120x)</option>";
				echo "<option value='7'>MILHAR SECO (4000x)</option>";
				echo "<option value='8'>MILHAR S/ COLOCAÇÃO (800x)</option>";
				echo "<option value='9'>DUQUE DE GRUPOS (18,75x)</option>";
				echo "<option value='10'>DUQUE DE DEZENAS S/ COLOCAÇÃO (300x)</option>";
				echo "<option value='11'>DUQUE DE DEZENAS C/ COLOCAÇÃO (6000x)</option>";
				echo "<option value='12'>TERNO DE GRUPOS (130x)</option>";
				echo "<option value='13'>TERNO DE DEZENAS (3000x)</option>";
				echo "<option value='14'>PASSE VAI (80x)</option>";
				echo "<option value='15'>PASSE VAI-VEM (40x)</option>";
			echo "</select>";
			echo "<fieldset>";
			if ($aposta!="") {
				switch ($aposta) {
					case 1:
						grupo_seco();
						break;
					case 2:
						grupo_sem_colocacao();
						break;
					case 3:
						
						break;
					case 4:
						
						break;
					case 5:
						
						break;
					case 6:
						
						break;
					case 7:
						
						break;
					case 8:
						
						break;
					case 9:
						
						break;
					case 10:
						
						break;
					case 11:
						
						break;
					case 12:
						
						break;
					case 13:
						
						break;
					case 14:
						
						break;
					case 15:
						
						break;
					
					default:
						echo "<br>ERRO 'ESCOLHA'!";
						break;
				}
			}
			echo "</fieldset>";
			echo "<br><br><input type='submit' name='acao' id='acao' value='CALCULAR'>";
		echo "</fieldset>";
	echo "</form>";

			function grupo_seco1()
			{
				$gruposeco= isset($_POST['gruposeco']) ? $_POST['gruposeco'] : 0;
				//while ($gruposeco<1 or $gruposeco>25) {
					echo "<fieldset>";
					echo "<h3>SELECIONE O GRUPO QUE DESEJA APOSTAR</h3>";
					echo "<div>";
					for ($i=1; $i <=25 ; $i++) { 
						echo "<input type='radio' name='grupo' id='grupo' value='".$i."'><img src='img/".$i.".png' width='200px'>";
						if ($i%5==0) {
							echo "</div>";
							if ($i!=25) {
								echo "<div>";
							}
						}
					}
						//echo "Informe o número do grupo que deseja apostar: <input type='number' name='gruposeco' id='gruposeco'><br>";
						echo "<input type='submit' name='JOGAR'>";
						$gruposeco= isset($_POST['gruposeco']) ? $_POST['gruposeco'] : 0;

					echo "</fieldset>";
				//}
			}
			function grupo_seco(){
				require "grupo_seco.php";
			}
			function grupo_sem_colocacao(){
				require "grupo_sem_colocacao.php";
			}
		?>
	</center>
</body>
</html>