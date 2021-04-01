<!DOCTYPE html>
<?php

	//<!-- - - - - - - - - - Definição das variáveis - - - - - - - - - -->
	$vet = array();
	$valores=isset($_POST['valores']) ? strtoupper($_POST['valores']) : '';
	$titulo="Consoantes";
	$cons=0;
	$vog=0;
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
			Informe as letras:
		 <textarea name="valores" rows="3" cols="80" placeholder="
		 Informe cada letra separada por ';'"></textarea>
		</div>
		<div class="submit">
			<input type="submit" name="acao" value="Enviar">
			<input type="reset" name="acao" value="Limpar">
		</div><br><br>
		</form>

	<?php
	if ($valores!='') {
		$vet = explode(';', $valores);
		for ($i=0; $i < count($vet) ; $i++) {
			if ($vet[$i]=='A' or $vet[$i]=='E' or $vet[$i]=='I' or $vet[$i]=='O' or $vet[$i]=='U') {
			 $vog++;
		 }else if ($vet[$i]!='') {
		 	$cons++;
		 }
		}

		echo "<fieldset class='form'>";

			echo "<br>Total de consoantes:".$cons."<br>";

		echo "</fieldset>";
	}
			 ?>
	</center>
</body>
</html>
