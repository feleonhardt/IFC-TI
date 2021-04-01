<!DOCTYPE html>
<?php
	$titulo = "Estrutura de Controle";
	$n1 = 0;
	if(isset($_POST['n1']))
		$n1 = $_POST['n1'];
	$n2 = 0;
	if(isset($_POST['n2']))
		$n2 = $_POST['n2'];
?>
<html>
<head>
    <meta charset="UTF-8" />
    <title><?php echo $titulo;?></title>
</head>
<body>
	<!-- If, else if, else -->
	<h3><?php echo $titulo;?></h3>
	<form action="" method="post">	
		Número 1:<input type="text" name="n1" id="n1" value="<?php echo $n1 ?>"/><br>
		Número 2:<input type="text" name="n2" id="n2" value="<?php echo $n2 ?>"/><br>
        <input type="submit" name="acao" id="acao">
	</form>
	<?php
		if ($n1 > $n2)
			echo "<h3>".$n1." > ".$n2."</h3>";
		else if ($n2 > $n1)
			echo "<h3>".$n2." > ".$n1."</h3>";
		else
			echo "<h3>".$n1." == ".$n2."</h3>";
	?>
</body>
</html>