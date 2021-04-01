<!DOCTYPE html>
<?php

	//<!-- - - - - - - - - - Definição das variáveis - - - - - - - - - -->
	$vet = array();
	$par = array();
	$impar = array();
	$cont=0;
	$valores=isset($_POST['valores']) ? $_POST['valores'] : '';
	$titulo="Par ou Ímpar";
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
			Informe os números para realizar a separação:
		 <textarea name="valores" rows="3" cols="80" placeholder="
		 Informe cada número separado por ';'"></textarea>
		</div>
		<div class="submit">
			<input type="submit" name="acao" value="Enviar">
			<input type="reset" name="acao" value="Limpar">
		</div><br><br>
		</form>

	<?php
	if ($valores!='') {
		$vet = explode(';', $valores);
		foreach ($vet as $item) {
    if (!ctype_digit($item)) {
			$cont++;
		}
	}
		if ($cont==0) {
			for ($i=0; $i < count($vet) ; $i++) {
				if ($vet[$i]%2==0) {
				 	array_push($par, $vet[$i]);
			 }else if ($vet[$i]!='') {
			 		array_push($impar,$vet[$i]);
			 }
			}

			echo "<fieldset class='form'>";
				echo "Todos: ";
				for ($i=0; $i < count($vet) ; $i++) {
					echo "<br>Todos[".$i."] => ".$vet[$i];
				}
				echo "<br><br>Pares: ";
				for ($i=0; $i < count($par) ; $i++) {
					echo "<br>Par[".$i."] => ".$par[$i];
				}
				echo "<br><br>Ímpares: ";
				for ($i=0; $i < count($impar) ; $i++) {
					echo "<br>Impar[".$i."] => ".$impar[$i];
				}
				echo "<br><br>";

			echo "</fieldset>";
		}else {
			echo "<br>Insira entre os ';' apenas números!";
		}
	}
			 ?>
	</center>
</body>
</html>
