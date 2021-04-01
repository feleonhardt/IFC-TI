<!DOCTYPE html>
<?php

	//<!-- - - - - - - - - - Definição das variáveis - - - - - - - - - -->
	define('min',1);
	define('max',100);
	$vet = array();
	$num=isset($_POST['num']) ? $_POST['num'] : 0;
	$soma=0;
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
			Informe a quantidade de valores do vetor: <input type="number" name="num" id="num"><br>
		</div>
		<div class="submit">
			<input type="submit" name="acao" value="Enviar">
			<input type="reset" name="acao" value="Limpar">
		</div><br><br>
		</form>

	<?php

	//<!-- - - - - - - - - - Cálculos - - - - - - - - - -->

				for ($x=0; $x < $num; $x++) {
					$cont = false;
					do{
						$val=mt_rand(min, max);
							if (!in_array($val,$vet)) {
								array_push($vet, $val);
								$soma+=$vet[$x];$cont++;
								$cont=true;
							}
					}while ($cont == false);
				}
				sort($vet);

	//<!-- - - - - - - - Saída de dados - - - - - - - -->
			echo "<br><fieldset class='form'>";
				foreach ($vet as $value) {
					echo $value.':';
					for ($i=0; $i < $value ; $i++) {
						echo "#";
					}
					echo "<br>";
				}
				echo "Soma: ".$soma;
			echo "</fieldset>";


			 ?>
	</center>
</body>
</html>
