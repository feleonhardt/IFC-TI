<!DOCTYPE html>
<?php
	$salario= isset($_POST['salario']) ? $_POST['salario'] : 0;
	$titulo = "Exercício 12";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<form action="" method="post">
		Número<input type="text" name="salario" id="salario" value=""><br>
		<input type="submit" name="acao" id="acao" value="Verificar">
	</form>
		<h3><?php 
				if ($salario<=280) {
					$aumento = $salario * 0.2;
					$per = '20%';
				}elseif ($salario>280 and $salario<=700) {
					$aumento = $salario * 0.15;
					$per = '15%';
				}elseif ($salario>700 and $salario<=1500) {
					$aumento = $salario * 0.1;
					$per = '10%';
				}else {
					$aumento = $salario * 0.05;
					$per = '5%';
				}
				$salario_novo=$salario+$aumento;
				echo "Salário antigo: R$ ".$salario."<br>Percentual de aumento: ".$per."<br>Aumento: R$ ".$aumento."<br>Salário novo: R$ ".$salario_novo;
			 ?></h3>
</body>
</html>