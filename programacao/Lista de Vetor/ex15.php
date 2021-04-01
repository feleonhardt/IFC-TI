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
	$alt = 0;
		if(isset($_POST['alt'])){
			$alt = $_POST['alt'];
		}
	$id = 0;
		if(isset($_POST['id'])){
			$id = $_POST['id'];
		}
?>
<body>
	<div id="box">
	<form action="" method="post">
		<br><br>
		<fieldset>
			<legend>Exercicio 15</legend>
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
					$soma = 0;
					$cont = 0;
					$contInf = 0;
					$altura = explode (" ", $alt);
					$idade = explode (" ", $id);
					$count1 = count($altura);
					$count2 = count($idade);
					if($count1 != $count2){
						if($count1 > $count2){
							$diferenca = $count1 - $count2;
							echo "Insira mais ".$diferenca." idade(s)";
						}elseif($count2 > $count1){
							$diferenca = $count2 - $count1;
							echo "Insira mais ".$diferenca." altura(s)";
						}
					}
					else{
						for ($i = 0; $i < count($altura); $i++){ 
							$soma = $soma + $altura[$i];
							$cont++;
						}
						$media = $soma/$cont;
						for ($i = 0; $i < count($idade) ; $i++){
							if($idade[$i] > 13){
								if($altura[$i] < $media){
									$contInf++;
								}
							}
						}
						echo "Quantidade de alunos com mais de 13 anos que possuem altura inferior a média (".$media."): ".$contInf;
					}
				?>
			</center>
		</fieldset>
	</form>
	</div>
</body>
</html>