<!DOCTYPE html>
<?php
	$num= isset($_POST['num']) ? $_POST['num'] : '';
	$cem=0;
	$cinquenta=0;
	$dez=0;
	$cinco=0;
	$um=0;
	$titulo = "Saque";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<form action="" method="post">
		Saque: <input type="text" name="num" id="num" value=""><br>
		<input type="submit" name="acao" id="acao" value="Verificar"><br>
		
	</form>
		<?php
		if ($num!='') {
			if ($num<1000) {
				$numero=$num;
				while ($num >= 100) {
					$cem ++;
					$num=$num-100;
				}
				while ($num >= 50) {
					$cinquenta ++;
					$num=$num-50;
				}
				while ($num >= 10) {
					$dez ++;
					$num=$num-10;
				}
				while ($num >= 5) {
					$cinco ++;
					$num=$num-5;
				}
				while ($num >= 1) {
					$um ++;
					$num=$num-1;
				}
				echo "<br><b>Saque: ".$numero."</b>";
				if ($cem>0) {
					echo "<br>".$cem." Nota(s) de Cem ";
				}
				if ($cinquenta>0) {
					echo "<br>".$cinquenta." Nota(s) de Cinquenta ";
				}
				if ($dez>0) {
					echo "<br>".$dez." Nota(s) de Dez ";
				}
				if ($cinco>0) {
					echo "<br>".$cinco." Nota(s) de Cinco ";
				}
				if ($um>0) {
					echo "<br>".$um." Nota(s) de Um ";
				}
			}
			else{
				echo "<br>Valor inválido!";
			}
		}
		?>
</body>
</html>