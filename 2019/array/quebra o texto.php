<!DOCTYPE html>
<?php

	//<!-- - - - - - - - - - Definição das variáveis - - - - - - - - - -->
	$vet = array();
	$valores=isset($_POST['valores']) ? $_POST['valores'] : '';
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
		 <textarea name="valores" rows="8" cols="80" placeholder="
		 Informe os valores separados por ';'"></textarea>
		</div>
		<div class="submit">
			<input type="submit" name="acao" value="Enviar">
			<input type="reset" name="acao" value="Limpar">
		</div><br><br>
		</form>

	<?php
		$vet = explode(';', $valores);
		sort($vet);

		echo "<fieldset class='form'>";

		foreach ($vet as $value) {
			echo $value."<br>";
		}

		echo "</fieldset>";
			 ?>
	</center>
</body>
</html>
