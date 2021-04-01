<!DOCTYPE html>
<?php

	//<!-- - - - - - - - - - Definição das variáveis - - - - - - - - - -->
	$todos = array();
	$vet1=isset($_POST['vet1']) ? $_POST['vet1'] : '';
	$vet2=isset($_POST['vet2']) ? $_POST['vet2'] : '';
	$titulo="MESCLA";
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
			Informe os valores do 1° vetor:
		 <textarea name="vet1" rows="3" cols="80" placeholder="
		 Informe cada valor separado por ";"></textarea>
		 Informe os valores do 2° vetor:
		<textarea name="vet2" rows="3" cols="80" placeholder="
		Informe cada valor separado por ";"></textarea>
		</div>
		<div class="submit">
			<input type="submit" name="acao" value="Enviar">
			<input type="reset" name="acao" value="Limpar">
		</div><br><br>
		</form>

	<?php
	if ($vet1!=" and $vet2!=") {
		$vetor1 = explode(";", $vet1);
		$vetor2 = explode(";", $vet2);
		$cont=0;
		for ($i=0; $i < count($vetor1) ; $i++) {
			$todos[$cont]=$vetor1[$i];
			$cont++;
			$todos[$cont]=$vetor2[$i];
			$cont++;
		}

		echo "<fieldset class="form">";

			echo "1° VETOR";
				for ($i=0; $i < count($vetor1); $i++) {
					echo "<br>Vetor1[".$i."] => ".$vetor1[$i];
				}
			echo "<br><br>2° VETOR";
				for ($i=0; $i < count($vetor2); $i++) {
					echo "<br>Vetor2[".$i."] => ".$vetor2[$i];
				}
			echo "<br><br>VETOR TODOS";
				for ($i=0; $i < count($todos); $i++) {
					echo "<br>Mescla[".$i."] => ".$todos[$i];
				}
		echo "</fieldset>";
	}
			 ?>
	</center>
</body>
</html>
