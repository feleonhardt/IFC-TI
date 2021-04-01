<!DOCTYPE html>
<?php
	$num= isset($_POST['num']) ? $_POST['num'] : '';
	$centena=0;
	$dezena=0;
	$unidade=0;
	$titulo = "Número";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<form action="" method="post">
		Número: <input type="text" name="num" id="num" value=""><br>
		<input type="submit" name="acao" id="acao" value="Verificar"><br>
		
	</form>
		<?php
		if ($num!='') {
			if ($num<1000) {
				$numero=$num;
				while ($num >= 100) {
					$centena ++;
					$num=$num-100;
				}
				while ($num >= 10) {
					$dezena ++;
					$num=$num-10;
				}
				while ($num >= 1) {
					$unidade ++;
					$num=$num-1;
				}
				echo "<br>".$numero.": ";
				if ($centena==1) {
					echo $centena." Centena";
				}else if ($centena>1) {
					echo $centena." Centenas";
				}

				if ($centena>0 and $dezena>0 and $unidade>0) {
					echo ", ";
				}else if ($centena>0 and $dezena==0 or $unidade==0) {
					echo " e ";
				}

				if ($dezena==1) {
					echo $dezena." Dezena";
				}else if ($dezena>1) {
					echo $dezena." Dezenas";
				}

				if ($centena>0 and $dezena>0 and $unidade>0) {
					echo " e ";
				}else if ($centena==0 and $dezena>0 and $unidade>0) {
					echo " e ";
				}

				if ($unidade==1) {
					echo $unidade." Unidade ";
				}else if ($unidade>1) {
					echo $unidade." Unidades ";
				}
			}
			else{
				echo "<br>Número inválido!";
			}
		}
		?>
</body>
</html>