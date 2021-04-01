<!DOCTYPE html>
<?php

	//<!-- - - - - - - - - - Definição das variáveis - - - - - - - - - -->
	$valor=isset($_POST['valores']) ? $_POST['valores'] : '';
	$titulo="IDADE E ALTURA";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="shortcut icon" href="assets/img/icone_azul.png">
	<link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
</head>
<body>

	<!-- - - - - - - - Entrada de dados - - - - - - - - - -->

	<center>
	<form action="" method="post" class="form">
		<div class="input">
			Insira a idade e altura: <input type="text" name="valores" id="valores" value="" placeholder="Ex: 23/1.67/19/1.78/24/1.64">
		</div>
		<div class="submit">
			<input type="submit" name="acao" value="Enviar">
			<input type="reset" name="acao" value="Limpar">
		</div><br><br>
		</form>

	<?php
	if ($valor!='') {
		$idade_altura = explode("/",$valor);
		$x=0;
		for ($i=0; $i < (count($idade_altura)/2) ; $i++) {
			$idade[$i]=$idade_altura[$x];
			$x++;
			$altura[$i]=$idade_altura[$x];
			$x++;
		}





		echo "<fieldset class='form'>";
			echo "INVERSO";
			$cont=0;
			for ($i=(count($idade_altura)-1); $i >=0 ; $i--) {
				if ($i%2==0) {
					echo "Idade: ";
				}else {
					$cont++;
					echo "<br>".$cont."° pessoa: ";
					echo "Altura: ";
				}
				echo $idade_altura[$i]." ";
			}
			echo "<br><br>MAIS ALTO";
				for ($i=0; $i < count($altura) ; $i++) {
					for ($x=0; $x < count($altura); $x++) {
						if ($altura[$i]>$altura[$x]) {
							$aux=$altura[$x];
							$aux2=$idade[$x];
							$altura[$x]=$altura[$i];
							$idade[$x]=$idade[$i];
							$altura[$i]=$aux;
							$idade[$i]=$aux2;
						}
					}
				}
				echo "<br>Altura: ".$altura[0]." Idade: ".$idade[0];
			echo "<br><br>MAIS BAIXO";
				echo "<br>Altura: ".$altura[(count($altura)-1)]." Idade: ".$idade[(count($altura)-1)];
			echo "<br><br>MAIS VELHO";
				for ($i=0; $i < count($idade) ; $i++) {
					for ($x=0; $x < count($idade); $x++) {
						if ($idade[$i]>$idade[$x]) {
							$aux=$altura[$x];
							$aux2=$idade[$x];
							$altura[$x]=$altura[$i];
							$idade[$x]=$idade[$i];
							$altura[$i]=$aux;
							$idade[$i]=$aux2;
						}
					}
				}
				echo "<br>Altura: ".$altura[0]." Idade: ".$idade[0];
			echo "<br><br>MAIS NOVO";
				echo "<br>Altura: ".$altura[(count($altura)-1)]." Idade: ".$idade[(count($altura)-1)];

				$total_idade=0;
				$total_altura=0;
					for ($i=0; $i < count($idade) ; $i++) {
						$total_idade+=$idade[$i];
						$total_altura+=$altura[$i];
					}
					$media_idade=$total_idade/count($idade);
					$media_altura=$total_altura/count($altura);


			echo "<br><br>ACIMA DA MÉDIA DA ALTURA";
				$cont=0;
				for ($i=0; $i < count($idade) ; $i++) {
					if ($altura[$i]>$media_altura) {
						$cont++;
						echo "<br>".$cont." pessoa: Altura: ".$altura[$i]." Idade: ".$idade[$i];
					}
				}
			echo "<br><br>ABAIXO DA MÉDIA DA ALTURA";
				$cont=0;
				for ($i=0; $i < count($idade) ; $i++) {
					if ($altura[$i]<$media_altura) {
						$cont++;
						echo "<br>".$cont." pessoa: Altura: ".$altura[$i]." Idade: ".$idade[$i];
					}
				}
				echo "<br><br>ACIMA DA MÉDIA DA IDADE";
					$cont=0;
					for ($i=0; $i < count($idade) ; $i++) {
						if ($idade[$i]>$media_idade) {
							$cont++;
							echo "<br>".$cont." pessoa: Altura: ".$altura[$i]." Idade: ".$idade[$i];
						}
					}
				echo "<br><br>ABAIXO DA MÉDIA DA IDADE";
					$cont=0;
					for ($i=0; $i < count($idade) ; $i++) {
						if ($idade[$i]<$media_idade) {
							$cont++;
							echo "<br>".$cont." pessoa: Altura: ".$altura[$i]." Idade: ".$idade[$i];
						}
					}
					echo "<br><br>ACIMA DA MÉDIA TOTAL";
						$cont=0;
						for ($i=0; $i < count($idade) ; $i++) {
							if ($idade[$i]>$media_idade and $altura[$i]>$media_altura) {
								$cont++;
								echo "<br>".$cont." pessoa: Altura: ".$altura[$i]." Idade: ".$idade[$i];
							}
						}
					echo "<br><br>ABAIXO DA MÉDIA TOTAL";
						$cont=0;
						for ($i=0; $i < count($idade) ; $i++) {
							if ($idade[$i]<$media_idade and $altura[$i]<$media_altura) {
								$cont++;
								echo "<br>".$cont." pessoa: Altura: ".$altura[$i]." Idade: ".$idade[$i];
							}
						}
		echo "</fieldset>";
	}
			 ?>
	</center>
</body>
</html>
