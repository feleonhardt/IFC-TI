<!DOCTYPE html>
<?php

	//<!-- - - - - - - - - - Definição das variáveis - - - - - - - - - -->

	$z= isset($_POST['z']) ? $_POST['z'] : 0;
	$r= isset($_POST['r']) ? $_POST['r'] : 0;
	$tipo= isset($_POST['tipo']) ? $_POST['tipo'] : '';
	$cont=0;
	$titulo = "CONE";
	$pi=pi();
	define("rendimento", 3.45);
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
		<h2>CONE</h2>
		<hr class="dividir">
	<div class="input">
		<img src="assets/img/cone.png" class="img-fundo-claro"><br><br>
	Informe o valor de 'Z' (m): <input type="text" name="z" id="z"><br>
	Informe o valor de 'r' (m): <input type="text" name="r" id="r">
	</div>
	Selecione o tipo da tinta:<br><br>
	<div class="radio">
	<input type="radio" name="tipo" id="1" value="1" checked=""><label for="1">Tipo 1</label>
	</div>
	<div class="radio">
	<input type="radio" name="tipo" id="2" value="2"><label for="2">Tipo 2</label>
	</div>
	<div class="radio">
	<input type="radio" name="tipo" id="3" value="3"><label for="3">Tipo 3</label>
	</div>
	<div class="input">
	<input type="submit" name="acao" id="acao" value="Calcular">
	<input type="reset" name="reset" id="reset" value="Limpar">
	</div>

	<!-- - - - - - - - - - Cálculos - - - - - - - - - -->

		<?php
		if ($z!=0 and $r!=0) {
			$g=sqrt(($z*$z)+($r*$r));
			$area=$pi*($r*($r+$g));
			switch ($tipo) {
				case '1':
					$valor=238.90;
					break;
				case '2':
					$valor=467.98;
					break;
				case '3':
					$valor=758.34;
					break;
			}
			$litros=$area*rendimento;
			$latas=$litros/18;
			$latas=ceil($latas);
			$total=$latas*$valor;

	//<!-- ------------------ Saída de dados ------------------ -->

			echo "<fieldset class='form'>";
				echo "Área do cone: ".number_format($area,2,',','.')." m²";
				echo "<br>Litros: ".number_format($litros,2,',','.');
				echo "<br>Tipo: ".$tipo;
				echo "<br>".$g;
				echo "<br>Valor por lata: R$".number_format($valor,2,',','.');
				echo "<br>Latas: ".$latas;
				echo "<br><h3>Total: R$ ".number_format($total,2,',','.')."</h3>";

			echo "</fieldset>";
		}
		?>
	</form>
	</center>
</body>
</html>
