<!DOCTYPE html>
<?php
	$n1= isset($_POST['n1']) ? $_POST['n1'] : 0;
	$n2= isset($_POST['n2']) ? $_POST['n2'] : 0;
	$titulo = "Média";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<form action="" method="post">
		Nota 1<input type="text" name="n1" id="n1" value=""><br>
		Nota 2<input type="text" name="n2" id="n2" value=""><br>
		<input type="submit" name="acao" id="acao" value="Verificar"><br>
	</form>
		<?php
		$media=($n1+$n2)/2;
		if ($media >= 0 and $media <=4) {
			$conceito='E';
		}else if ($media > 4 and $media <=6) {
			$conceito='D';
		}
		else if ($media >6 and $media <=7.5) {
			$conceito='C';
		}
		else if ($media >7.5 and $media <=9) {
			$conceito='B';
		}
		else if ($media >9 and $media <=10) {
			$conceito='A';
		}
		else{
			$conceito='ERRO';
		}
		switch ($conceito) {
			case 'A':
				$msg='APROVADO';
				break;
			case 'B':
				$msg='APROVADO';
				break;
			case 'C':
				$msg='APROVADO';
				break;
			case 'D':
				$msg='REPROVADO';
				break;
			case 'E':
				$msg='REPROVADO';
				break;
			default:
				$msg='ERRO';
				break;
		}

		echo "Nota 1: ".$n1;
		echo "<br>Nota 2: ".$n2;
		echo "<br>Média: ".$media;
		echo "<br>Conceito: ".$conceito;
		echo "<br>".$msg;
		?>
</body>
</html>