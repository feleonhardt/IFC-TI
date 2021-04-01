<!DOCTYPE html>
<?php
	$n1= isset($_POST['n1']) ? $_POST['n1'] : '';
	$n2= isset($_POST['n2']) ? $_POST['n2'] : '';
	$operacao= isset($_POST['operacao']) ? $_POST['operacao'] : '';
	$titulo = "Ações";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<form action="" method="post">
		Número 1<input type="text" name="n1" id="n1" value=""><br>
		Número 2<input type="text" name="n2" id="n2" value=""><br>
		Operação:<br>
		<input type="radio" name="operacao" id="operacao" value="a" checked="">Soma
		<input type="radio" name="operacao" id="operacao" value="b">Subtração
		<input type="radio" name="operacao" id="operacao" value="c">Multiplicação
		<input type="radio" name="operacao" id="operacao" value="d">Divisão<br>
		<input type="submit" name="enviar" id="enviar" value="Verificar">
	</form>
		<?php
			if ($n1!='' and $n2!='') {
				switch ($operacao) {
					case 'a':
						$num=$n1+$n2;
						break;
					case 'b':
						$num=$n1-$n2;
						break;
					case 'c':
						$num=$n1*$n2;
						break;
					case 'd':
						$num=$n1/$n2;
						break;
					default:
						echo "ERRO!";
						break;
				}

				echo "<br>Resultado: ".$num." - ";
				if ($num==0) {
					echo "zero";
				}else if ($num%2==0) {
					echo "par";
				}else {
					echo "ímpar";
				}

				echo " / ";

				if ($num==0) {
					echo "nulo";
				}else if ($num>0) {
					echo "positivo";
				}else {
					echo "negativo";
				}

				echo " / ";

				if ($num!=round($num)) {
					echo "decimal";
				}else{
					echo "inteiro";
				}

			}else{
				echo "<br>Preencha todos os campos de digitação!";
			}
		?>
</body>
</html>