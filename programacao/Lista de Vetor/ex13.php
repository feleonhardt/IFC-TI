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
	$alt = 1;
		if(isset($_POST['alt'])){
			$alt = $_POST['alt'];
		}
	$id = 2;
		if(isset($_POST['id'])){
			$id = $_POST['id'];
		}
?>
<body>
	<div id="box">
	<form action="" method="post">
		<br><br>
		<fieldset>
			<legend>Exercicio 13</legend>
			<center>
				<label>Altura (separe com espaço e usando ponto ao invés de vírgula): </label><br>
                <textarea rows="6" name="alt" required><?php echo $alt; ?></textarea>
                <br><br>
                <label>Idade (separe com espaço e insira na mesma ordem do campo anterior): </label><br>
                <textarea rows="6" name="id" required><?php echo $id; ?></textarea>
                <br><br>
                <center><input type="submit" value="Verificar"></center>
                <br>
				<?php 
					$altura = explode (" ", $alt);
					$idade = explode (" ", $id);
					echo "Altura: ";
					for ($i = count($altura) - 1; $i >= 0; $i--) { 
						if($i != 0){
							echo $altura[$i]." ";
						}
						else{
							echo $altura[$i];
						}
					}
					echo "<br>Idade: ";
					for ($i = count($idade) - 1; $i >=0 ; $i--){ 
						if($i != 0){
							echo $idade[$i]." ";
						}
						else{
							echo $idade[$i];
						}
					}
					echo "<br><br>";
					$maisNovo = 200;
					$maisVelho = 0;
					$maisAlto = 0;
					$maisBaixo = 3;
					$contAlt = 0;
					$somaAlt = 0;
					$somaId = 0;
					$contId = 0;
					for ($i = 0; $i < count($altura); $i++){
						if($altura[$i] > $maisAlto){
							$maisAlto = $altura[$i];
						}
						if($altura[$i] < $maisBaixo){
							$maisBaixo = $altura[$i];
						}
						$somaAlt = $somaAlt + $altura[$i];
						$contAlt++;
					}
					for ($i = 0; $i < count($idade); $i++){
						if($idade[$i] > $maisVelho){
							$maisVelho = $idade[$i];
						}
						if($idade[$i] < $maisNovo){
							$maisNovo = $idade[$i];
						}
						$somaId = $somaId + $idade[$i];
						$contId++;
					}
					$mediaId = $somaId/$contId;
					$mediaAlt = $somaAlt/$contAlt;
					for ($i = 0; $i < count($altura); $i++){
						if($altura[$i] == $maisAlto){
							echo "Mais alto tem ".$idade[$i]." ano(s) e altura de ".$altura[$i]." metro(s)<br>";
						}
						if($altura[$i] == $maisBaixo){
							echo "Mais baixo tem ".$idade[$i]." ano(s) e altura de ".$altura[$i]." metro(s)<br>";
						}
					}
					for ($i = 0; $i < count($idade); $i++){
						if($idade[$i] == $maisVelho){
							echo "Mais velho tem ".$idade[$i]." ano(s) e altura de ".$altura[$i]." metro(s)<br>";
						}
						if($idade[$i] == $maisNovo){
							echo "Mais novo tem ".$idade[$i]." ano(s) e altura de ".$altura[$i]." metros(s)<br>";
						}
					}
					echo "<br><b>Acima da média de Altura (".number_format($mediaAlt,2).")</b><br>";
					for ($i = 0; $i < count($altura); $i++){
						if($altura[$i] > $mediaAlt){
							echo "Pessoa com ".$idade[$i]." ano(s) e ".$altura[$i]." metro(s)<br>";
						}
					}
					echo "<br><b>Abaixo da média de Altura (".number_format($mediaAlt,2).")</b><br>";
					for ($i = 0; $i < count($altura); $i++){
						if($altura[$i] < $mediaAlt){
							echo "Pessoa com ".$idade[$i]." ano(s) e ".$altura[$i]." metro(s)<br>";
						}
					}
					echo "<br><b>Acima da média de Idade (".number_format($mediaId,2).")</b><br>";
					for ($i = 0; $i < count($idade); $i++){
						if($idade[$i] > $mediaId){
							echo "Pessoa com ".$idade[$i]." ano(s) e ".$altura[$i]." metro(s)<br>";
						}
					}
					echo "<br><b>Abaixo da média de Idade (".number_format($mediaId,2).")</b><br>";
					for ($i = 0; $i < count($idade); $i++){
						if($idade[$i] < $mediaId){
							echo "Pessoa com ".$idade[$i]." ano(s) e ".$altura[$i]." metro(s)<br>";
						}
					}
				?>
			</center>
		</fieldset>
	</form>
	</div>
</body>
</html>