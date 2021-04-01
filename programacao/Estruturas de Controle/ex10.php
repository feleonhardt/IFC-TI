<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo.css" />
    <meta charset="UTF-8" />
    <link rel="shortcut icon" type="image/x-icon" href="img/php.png" />
    <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <title>Exercicios PHP</title>
</head>
<body>
	<?php
		$n1 = "";
		if(isset($_POST['n1'])){
			$n1 = $_POST['n1'];
		}
		$n2 = "";
		if(isset($_POST['n2'])){
			$n2 = $_POST['n2'];
		}	
		$n3 = "";
		if(isset($_POST['n3'])){
			$n3 = $_POST['n3'];
		}		
	?>
<div id="borda1">
	<img src="img/borda2.jpg">
</div>
<div id="corpo">
	<form action="" method="post">
		<br><br><br>
		<fieldset>
			<legend>Exercício 10</legend>
				<br>
				<label>Número 1: </label>
                <input type="number" name="n1" id="n" step="0.00001" required value="<?php echo $n1 ?>"/>
                <br><br>
                <label>Número 2: </label>
                <input type="number" name="n2" id="n" step="0.00001" required value="<?php echo $n2 ?>"/>
                <br><br>
                <label>Número 3: </label>
                <input type="number" name="n3" id="n" step="0.00001" required value="<?php echo $n3 ?>"/>
                <br><br>
                <center><input type="submit" value="Verificar"></center>
				<br>
					<?php
					    $maior = 0;
					    $menor = 0;
					    				  
					    if($n1 >= $n2 && $n1 >= $n3) {
					      $maior = $n1;
					      if($n2 <= $n3) {
					        $menor = $n2;
					    } 
					      else {
					        $menor = $n3;
					      }
					    }
					     
					    if($n2 >= $n1 && $n2 >= $n3) {
					      $maior = $n2;
					      if($n1 <= $n3) {
					        $menor = $n1;
					      } else {
					        $menor = $n3;
					      }
					    }
					     
					    if($n3 >= $n1 && $n3 >= $n2) {
					      $maior = $n3;
					      if($n2 <= $n1) {
					        $menor = $n2;
					      } else {
					        $menor = $n1;
					      }
					    }
					    echo "O maior é ".$maior." e o menor é ".$menor;
					?>
		</fieldset>
	</form>
</div>
<div id="borda2">
	<img src="img/borda2.jpg">
</div>
</body>
</html>