<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo.css" />
    <meta charset="UTF-8" />
    <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <title>Exercicios PHP</title>
</head>
<style type="text/css">
	body{
		background-color: #90EE90;
	}
</style>
<?php 
	$divida = 0;
		if(isset($_POST['divida'])){
			$divida = $_POST['divida'];
		}
?>
<body>
	<form action="" method="post">
		<br>
		<fieldset>
			<legend>Exercício 33</legend>
			<label>Valor da divida: R$ </label>
			<input type="number" name="divida" id="n" step="0.001" required value="<?php echo $divida ?>"/>
            <br><br>
            <center><input type="submit" value="Calcular"></center>
			<center><br><br>
				<?php 
					$juro1 = 0;
					$juro3 = ($divida*0.10);
					$juro6 = ($divida*0.15);
					$juro9 = ($divida*0.20);
					$juro12 = ($divida*0.25);

					$valor1 = $divida;
					$valor3 = $divida + $juro3;
					$valor6 = $divida + $juro6;
					$valor9 = $divida + $juro9;
					$valor12 = $divida + $juro12;

					$parcela1 = round($valor1/1, 2);
					$parcela3 = round($valor3/3, 2);
					$parcela6 = round($valor6/6, 2);
					$parcela9 = round($valor9/9, 2);
					$parcela12 = round($valor12/12, 2);


					echo "<table border='1'>
							<tr>
								<th>Valor da Dívida</th>
								<th>Valor dos Juros</th> 
								<th>Quantidade de Parcelas</th>
								<th>Valor da Parcela</th>
							</tr>
							<tr>
								<td>$valor1</td>
								<td>$juro1</td> 
								<td>1</td>
								<td>$parcela1</td>
							</tr>
							<tr>
								<td>$valor3</td>
								<td>$juro3</td> 
								<td>3</td>
								<td>$parcela3</td>
							</tr>
							<tr>
								<td>$valor6</td>
								<td>$juro6</td> 
								<td>6</td>
								<td>$parcela6</td>
							</tr>
							<tr>
								<td>$valor9</td>
								<td>$juro9</td> 
								<td>9</td>
								<td>$parcela9</td>
							</tr>
							<tr>
								<td>$valor12</td>
								<td>$juro12</td> 
								<td>12</td>
								<td>$parcela12</td>
							</tr>
						</table>"
				?>
			</center>
		</fieldset>
	</form>
	<br><br>
</body>
</html>