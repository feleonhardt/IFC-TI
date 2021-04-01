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
        $n = 0;
        if(isset($_POST['n'])){
            $n = $_POST['n'];
        }
    ?>
<body>
	<form action="" method="post">
		<br>
		<fieldset>
			<legend>Exercicio 10</legend>
				<br><center>
				<label>Número: R$ </label>
                <input type="number" name="n" id="n" required value="<?php echo $n ?>"/>
                <br><br>
                <input type="submit" value="Verificar">
				<br><br><br>
					<?php
				   		  if ($n <= 1000) {
				   		  	echo $n." = ";
						      if ($n >= 100) {
						        $centena = floor($n / 100);
						        $n = $n % 100;
						      }
						      if ($n >= 10) {
						        $dezena = floor($n / 10);
						        $n = $n % 10;
						      }
						      if ($n >= 1) {
						        $unidade = floor($n / 1);
						      }
						      if($centena != 0 && $dezena != 0 && $unidade != 0){
						      	if($centena == 1){
						      		echo $centena." centena, ";
						      	}else{
						      		echo $centena." centenas, ";
						      	}
						      	if($dezena == 1){
						      		echo $dezena." dezena e ";
						      	}else{
						      		echo $dezena." dezenas e ";
						      	}
						      	if($unidade == 1){
						      		echo $unidade." unidade";
						      	}else{
						      		echo $unidade." unidades";
						      	}
						      }
						      if($centena != 0 && $dezena != 0 && $unidade == 0){
						      	if($centena == 1){
						      		echo $centena." centena e ";
						      	}else{
						      		echo $centena." centenas e ";
						      	}
						      	if($dezena == 1){
						      		echo $dezena." dezena";
						      	}else{
						      		echo $dezenas." dezenas";
						      	}
						      }
						      if($centena != 0 && $dezena == 0 && $unidade != 0){
						      	if($centena == 1){
						      		echo $centena." centena e ";
						      	}else{
						      		echo $centena." centenas e ";
						      	}
						      	if($unidade == 1){
						      		echo $unidade." unidade";
						      	}else{
						      		echo $unidade." unidades";
						      	}
						      }
						      if($centena == 0 && $dezena != 0 && $unidade == 0){
						      	if($centena == 1){
						      		echo $centena." centena e ";
						      	}else{
						      		echo $centena." centenas e ";
						      	}
						      	if($unidade == 1){
						      		echo $dezena." dezena";
						      	}else{
						      		echo $dezenas." dezenas";
						      	}
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