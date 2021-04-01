<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo.css"/>
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <meta charset="UTF-8"/>
    <title>Vetor</title>
</head>
<?php
	$n1 = "";
		if(isset($_POST['n1'])){
			$n1 = $_POST['n1'];
		}
	$n2 = "";
		if(isset($_POST['n2'])){
			$n2 = $_POST['n2'];
		}
?>
<body>
	<div id="box">
	<form action="" method="post">
		<br><br>
		<fieldset>
			<legend>Exercicio 14</legend>
			<center>
				<label>Números vetor 1 (separe com espaço): </label><br>
                <textarea rows="6" name="n1" required><?php echo $n1; ?></textarea>
                <br><br>
                <label>Números vetor 2 (separe com espaço): </label><br>
                <textarea rows="6" name="n2" required><?php echo $n2; ?></textarea>
                <br><br>
                <center><input type="submit" value="Verificar"></center>
                <br>
				<?php 
					$num1 = explode (" ", $n1);
					$num2 = explode (" ", $n2);
					$count1 = count($num1);
					$count2 = count($num2);
					if($count1 != $count2){
						if($count1 > $count2){
							$diferenca = $count1 - $count2;
							echo "Insira mais ".$diferenca." número(s) no vetor 2";
						}elseif($count2 > $count1){
							$diferenca = $count2 - $count1;
							echo "Insira mais ".$diferenca." número(s) no vetor 1";
						}
					}
					else{
						$x = 1;
						$vet3 = $count1;
						for ($i = 0; $i < $vet3; $i++) { 
								$num3[] = $num1[$i];
								$num3[] = $num2[$i];
						}
						for ($i = 0; $i < count($num3); $i++) { 
								echo $x."ª posição: ".$num3[$i]."<br>";
								$x++;
						}
					}
				?>
			</center>
		</fieldset>
	</form>
	</div>
</body>
</html>