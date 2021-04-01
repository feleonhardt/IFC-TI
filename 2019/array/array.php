<!DOCTYPE html>
<?php

	//<!-- - - - - - - - - - Definição das variáveis - - - - - - - - - -->

	$vetor = array("rodrigo", true, 76.5, 65);

	$vetor_2 = array();
	$vetor_2[0]="rodrigo";
	$vetor_2[1]= 65;
	$vetor_2[2]= 76.5;
	$vetor_2[3]= true;
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
 //var_dump($vetor);


	//<!-- - - - - - - - Saída de dados - - - - - - - -->

			echo "<fieldset class='form'>";
				var_dump($vetor);
				var_dump($vetor_2);
				for ($x=0; $x < count($vetor_2); $x++) {
					echo $vetor_2[$x]."<br>";
				}

			echo "</fieldset>";

		?>
	</form>
	</center>
</body>
</html>
