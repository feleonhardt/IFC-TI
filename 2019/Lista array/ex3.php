<!DOCTYPE html>
<?php

	//<!-- - - - - - - - - - Definição das variáveis - - - - - - - - - -->
	$consoantes = array("b","c","d","f","g","h","j","l","m","n","p","q","r","s","t","v","x","z");
	$vogais = array("a","e","i","o","u");
	$senha = array();
	define("min",0);
	define("max_v",(count($vogais)-1));
	define("max_c",(count($consoantes)-1));
	define("MAXIMO",count($vogais)+count($consoantes));
	$qnt=isset($_POST['valores']) ? $_POST['valores'] : 0;
	$titulo="Senha";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="shortcut icon" href="assets/img/icone_azul.png">
	<link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
</head>
<body>

	<!-- - - - - - - - Entrada de dados - - - - - - - - - -->

	<center>
	<form action="" method="post" class="form">
		<div class="input">
			Insira o tamanho da senha desejada: <input type="number" name="valores" id="valores" value="">
		</div>
		<div class="submit">
			<input type="submit" name="acao" value="Enviar">
			<input type="reset" name="acao" value="Limpar">
		</div><br><br>
		</form>

	<?php
			if ($qnt!=0) {
				if ($qnt<MAXIMO) {
					if ($qnt%2==0) {
						for ($i=0; $i < ($qnt/2) ; $i++) {
							$letra_c=mt_rand(min,max_c);
							$letra=$consoantes[$letra_c];
							array_push($senha,$letra);
							$letra_v=mt_rand(min,max_v);
							$letra=$vogais[$letra_v];
							array_push($senha,$letra);
						}
					}else {
						for ($i=0; $i < (($qnt-1)/2) ; $i++) {
							$letra_v=mt_rand(min,max_v);
							$letra=$vogais[$letra_v];
							array_push($senha,$letra);
							$letra_c=mt_rand(min,max_c);
							$letra=$consoantes[$letra_c];
							array_push($senha,$letra);
						}
							$letra_v=mt_rand(min,max_v);
							$letra=$vogais[$letra_v];
							array_push($senha,$letra);
					}
					echo "<fieldset class='form'>";
						echo "Senha: ";
						for ($i=0; $i < count($senha); $i++) {
							echo $senha[$i];
						}
					echo "</fieldset>";
				}else {
					echo "<br>Insira um valor menor do que o vetor!";
				}
			}
			 ?>
	</center>
</body>
</html>
