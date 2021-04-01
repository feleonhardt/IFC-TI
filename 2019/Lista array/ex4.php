<!DOCTYPE html>
<?php

	//<!-- - - - - - - - - - Definição das variáveis - - - - - - - - - -->
	$dat=isset($_POST['valores']) ? $_POST['valores'] : '';
	$titulo="Data";
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
			Insira a data: <input type="text" name="valores" id="valores" value="" placeholder="Ex: 26/04/2002">
		</div>
		<div class="submit">
			<input type="submit" name="acao" value="Enviar">
			<input type="reset" name="acao" value="Limpar">
		</div><br><br>
		</form>

	<?php
	if ($dat!='') {
		$data = explode("/",$dat);
		// verifica se a data é válida!
		// 1 = true (válida)
		// 0 = false (inválida)
		$res = checkdate($data[1],$data[0],$data[2]);

		echo "<fieldset class='form'>";
			if ($res == 1){
				echo "Data OK!";
				for ($i=0; $i < count($data) ; $i++) {
					echo "<br>data[".$i."] => ".$data[$i];
				}
			} else {
				echo "Data inválida!";
			}
				echo "</fieldset>";
			}
			 ?>
	</center>
</body>
</html>
