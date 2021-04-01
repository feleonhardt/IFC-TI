<!DOCTYPE html>
<?php
	$valor_inicial= isset($_POST['valor_inicial']) ? $_POST['valor_inicial'] : 0;
	$meses= isset($_POST['meses']) ? $_POST['meses'] : 0;
	$deposito= isset($_POST['deposito']) ? $_POST['deposito'] : 0;
	$juros= isset($_POST['juros']) ? $_POST['juros'] : 0;
	define("INICIO", 0);
	define("FIM", $meses);
	$titulo = "Juros Compostos";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
	<style type="text/css">
		table, th, td{
			border: 1px solid black;
		}
	</style>
</head>
<body>	
	<h1><?php echo $titulo;?></h1>
	<form action="" method="post">
		Valor inicial (em R$): <input type="text" name="valor_inicial" id="valor_inicial" value=""><br>
		Meses: <input type="text" name="meses" id="meses" value=""><br>
		Depósito mensal (em R$): <input type="text" name="deposito" id="deposito" value=""><br>
		Taxa de Juros Mensal (em %): <input type="text" name="juros" id="juros" value=""><br>


		<input type="submit" name="acao" id="acao" value="ENVIAR">
	</form>
		<?php
		echo "<table>";
		echo "<caption>Juros Compostos</caption>";
		echo "<thead>";
		echo "<th>Seq.</th>";
		echo "<th>Inicial</th>";
		echo "<th>Juros</th>";
		echo "<th>Aporte</th>";
		echo "<th>Total</th>";
		echo "</thead>";
		echo "<tbody>";
		for ($x=INICIO; $x <= FIM ; $x++) { 
			echo "<tr>";
			if ($x==0) {
				$valor_inicial_tl=number_format($valor_inicial,2,',','.');
				echo "<td>".$x."</td><td>R$ ".$valor_inicial_tl."</td><td>R$ 0,00</td><td>R$ 0,00</td><td>R$ ".$valor_inicial_tl."</td>";
			}else{
				$valor_juros=($valor_inicial*$juros)/100;
				$anterior=$valor_inicial;
				$anterior_tl=number_format($anterior,2,',','.');
				$valor_inicial=$valor_inicial+$valor_juros+$deposito;
				$valor_juros_tl=number_format($valor_juros,2,',','.');
				$valor_inicial_tl=number_format($valor_inicial,2,',','.');
				$deposito_tl=number_format($deposito,2,',','.');


				echo "<td>".$x."</td><td>R$ ".$anterior_tl."</td><td>R$ ".$valor_juros_tl."</td><td>R$ ".$deposito_tl."</td><td>R$ ".$valor_inicial_tl."</td>";	
			}
			echo "</tr>";
		}
		echo "</tbody>";
		echo "</table>";
			//echo $preco."<br>";
			//echo INICIO."<br>";
			//echo FIM."<br>";
		?>
</body>
</html>