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
	img{
		width: 200px;
		height: 100px;
	}
	body{
		background-color: #90EE90;
	}
</style>
	<?php
        $saque = 0;
        if(isset($_POST['saque'])){
            $saque = $_POST['saque'];
        }
    ?>
<body>
	<form action="" method="post">
		<br>
		<fieldset>
			<legend>Caixa Eletrônico</legend>
				<br><center>
				<label>Valor do Saque: R$ </label>
                <input type="number" name="saque" id="n" step="0.00001" required value="<?php echo $saque ?>"/>
                <br><br>
                <input type="submit" value="Verificar">
				<br><br><br>
					<?php
				   		  if ($saque >= 5 && $saque <= 1000) {
				   		  	echo "Valor do saque: R$ ".$saque."<br><br>";
						      if ($saque >= 100) {
						        $nota100 = floor($saque / 100);
						        $saque = $saque % 100;
						        echo "$nota100 cédula(s) de <img src='img/100Reais.jpg'><br>";
						      }
						      if ($saque >= 50) {
						        $nota50 = floor($saque / 50);
						        $saque = $saque % 50;
						        echo "$nota50 cédula(s) de <img src='img/50Reais.png'><br>";
						      }
						      if ($saque >= 20) {
						          $nota20 = floor($saque/20);
						          $saque = $saque % 20;
						        echo "$nota20 cédula(s) de <img src='img/20reais.jpg'><br>";
						      }
						      if ($saque >= 10) {
						        $nota10 = floor($saque / 10);
						        $saque = $saque % 10;
						        echo "$nota10 cédula(s) de <img src='img/10Reais.jpg'><br>";
						      }
						      if ($saque >= 5) {
						        $nota5 = floor($saque / 5);
						        $saque = $saque % 5;
						        echo "$nota5 cédula(s) de <img src='img/5Reais.jpg'><br>";
						      }
						      if ($saque >= 1) {
						        $nota1 = floor($saque / 1);
						        echo "$nota1 cédula(s) de <img src='img/1Real.jpg'><br>";
						      }
					    } else {
					        echo "Saque que não realizado!";
					    }
					?>
					</center><br><br>
		</fieldset>
	</form>
	<br><br>
</body>
</html>