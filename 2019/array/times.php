<!DOCTYPE html>
<?php

	//<!-- - - - - - - - - - Definição das variáveis - - - - - - - - - -->

	$times = array("Palmeiras","São Paulo", "Santos");

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
	<?php

	//<!-- - - - - - - - - - Cálculos - - - - - - - - - -->

	//<!-- - - - - - - - Saída de dados - - - - - - - -->

			echo "<fieldset class='form'>";
			echo '<select class="select">';
				for ($x=0; $x < count($times); $x++) {
					echo '<option value="'.$vetor_2[$x].'">'.$times[$x].'</option>';
				}
			echo "</select><br>";


			echo "</fieldset>";

	echo "<fieldset class='form'>";
			foreach ($times as $value) {
				echo $value."<br>";
			}
	echo "</fieldset>";
	echo "<fieldset class='form'>";
			$v1 = array("rodrigo", "jobs");
			array_push($v1, "Steve", "eu");
			echo "<br>";

			var_dump($v1);
	echo "</fieldset>";
	echo "<fieldset class='form'>";
			echo "<br>";
			$vet = array('primeiro' => 123, 'segundo' => "Objeto", 'terceiro' => true, 'quarto' => 2.45);
			echo $vet['primeiro'].'<br><br>';
			var_dump($vet);
	echo "</fieldset>";
			 ?>
	</form>
	</center>
</body>
</html>
