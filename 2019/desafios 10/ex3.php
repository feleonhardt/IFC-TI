<!DOCTYPE html>
<?php
	$populacao_a= isset($_POST['populacao_a']) ? $_POST['populacao_a'] : '';
	$taxa_a= isset($_POST['taxa_a']) ? $_POST['taxa_a'] : '';
	$populacao_b= isset($_POST['populacao_b']) ? $_POST['populacao_b'] : '';
	$taxa_b= isset($_POST['taxa_b']) ? $_POST['taxa_b'] : '';
	$anos=0;
	$titulo = "População";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>	
	<h1><?php echo $titulo;?></h1>
	<form action="" method="post">
		População A: <input type="text" name="populacao_a" id="populacao_a" value="">
		Taxa de crescimento A: <input type="text" name="taxa_a" id="taxa_a" value=""><br>
		População B: <input type="text" name="populacao_b" id="populacao_b" value="">
		Taxa de crescimento B: <input type="text" name="taxa_b" id="taxa_b" value=""><br>
		<input type="submit" name="acao" id="acao" value="CALCULAR">
	</form>
		<?php
		if ($populacao_a!="" and $populacao_b!="" and $taxa_a!="" and $taxa_b!="") {
			if ($populacao_a>$populacao_b) {
				if ($taxa_a<$taxa_b) {
					while ($populacao_b<$populacao_a) {
						$populacao_a+=(($populacao_a*$taxa_a)/100);
						$populacao_b+=(($populacao_b*$taxa_b)/100);
						$anos++;
					}
					echo "<br>Serão nescessário ".$anos." anos para que a população B ultrapasse ou iguale à população A!";
				}else{
					echo "<br>A taxa de crescimento da menor população deve ser maior do que a taxa de crescimento da maior população!";
				}
			}else if ($populacao_a<$populacao_b) {
				if ($taxa_a>$taxa_b) {
					while ($populacao_b>$populacao_a) {
						$populacao_a+=(($populacao_a*$taxa_a)/100);
						$populacao_b+=(($populacao_b*$taxa_b)/100);
						$anos++;
					}
					echo "<br>Serão nescessário ".$anos." anos para que a população A ultrapasse ou iguale à população B!";
				}else{
					echo "<br>A taxa de crescimento da menor população deve ser maior do que a taxa de crescimento da maior população!";
				}
			}else{
				echo "<br>As populações já estão igualadas!";
			}
		}
		?>
</body>
</html>