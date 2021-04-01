<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo.css"/>
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <meta charset="UTF-8"/>
    <title>Vetor</title>
</head>
<style>
	#box{
		height:1900px;
	}
</style>
<?php
	for ($i = 0; $i < 10; $i++) {
		$n1[$i] = isset($_POST['n1'.$i])?$_POST['n1'.$i]:1;
		$n2[$i] = isset($_POST['n2'.$i])?$_POST['n2'.$i]:1;
		$n3[$i] = isset($_POST['n3'.$i])?$_POST['n3'.$i]:1;
		$n4[$i] = isset($_POST['n4'.$i])?$_POST['n4'.$i]:1;
	}
?>
<body>
	<div id="box">
	<form action="" method="post">
		<br><br>
		<fieldset>
			<legend>Exercicio 07</legend>
			<center>
				<?php 
					$x = 1;
					for ($i = 0; $i < 10; $i++) {
						echo "<b>Aluno ".$x."<br></b>";
						echo "<label>Nota 1: </label>";
                		echo "<input type='number' name='n1".$i."' step='0.001' required value='".$n1[$i]."'/><br>";
                		echo "<label>Nota 2: </label>";
                		echo "<input type='number' name='n2".$i."' step='0.001' required value='".$n2[$i]."'/><br>";
                		echo "<label>Nota 3: </label>";
                		echo "<input type='number' name='n3".$i."' step='0.001' required value='".$n3[$i]."'/><br>";
                		echo "<label>Nota 4: </label>";
                		echo "<input type='number' name='n4".$i."' step='0.001' required value='".$n4[$i]."'/><br>";
                		$x++;
                		echo "<br>";
					}
				?>
				<br><input type="submit" value="Verificar"><br><br>
				<?php 
					$cont = 0;
					for ($i = 0; $i < 10; $i++){
						$media[] = ($n1[$i] + $n2[$i] + $n3[$i] + $n4[$i])/4;
					}
					for ($i = 0; $i < 10; $i++){
						if($media[$i] >= 7){
							$cont++;
						}
					}
					echo "Quantidade de aluno com nota maior ou igual a 7: ".$cont;
				?>
			</center>
		</fieldset>
	</form>
	</div>
</body>
</html>