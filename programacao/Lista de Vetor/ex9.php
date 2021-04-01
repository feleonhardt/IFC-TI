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
 	$alfabeto = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");  
	$caracteres = isset($_POST['caracteres'])?$_POST['caracteres']:2;
?>
<body>
	<div id="box">
	<form action="" method="post">
		<br><br>
		<fieldset>
			<legend>Exercicio 09</legend>
			<center>
			<label>Quantidade de Caracteres: </label>
			<input type="number" name="caracteres" required value="<?php echo $caracteres; ?>" min="1" max="27" />
         	<br><br>
         	<input type="submit" value="Gerar">
         	<br><br>
			Senha:
				<?php 
				    $vogais = 0;
				    $consoantes = 0;
				    foreach ($alfabeto as $letra){
				      	if ($letra != "a" && $letra != "e" && $letra != "i" && $letra != "o" && $letra != "u") {
					        $consoantes++;
					        $consoante[] = $letra;
				    	} 
					    else{
					        $vogais++;
					        $vogal[] = $letra;
					    }
				    }
				    $caracteresSenha = 0;
				    for ($i = 0; $i < $caracteres; $i ++) { 
				        $numeroConsoante = mt_rand(0,20);
				        $numeroVogal = mt_rand(0,4);
				        if ($caracteres % 2 == 0) {
				        	$senha[] = $consoante[$numeroConsoante];
				        	$caracteresSenha++;
				          	if ($caracteresSenha == $caracteres) {
				            	break;
				          	} 
				          	else {
					            $senha[] = $vogal[$numeroVogal];
					            $caracteresSenha++;
					        }
				        } 
				        else {
				        	$senha[] = $vogal[$numeroVogal];
				        	$caracteresSenha++;
				        	if ($caracteresSenha == $caracteres) {
				          		break;
				          	} 
				          	else {
					            $senha[] = $consoante[$numeroConsoante];
					            $caracteresSenha++;
					        }
				        }
					        if ($caracteresSenha == $caracteres) {
					          break;
					        }
				      	}
				      foreach ($senha as $senhaPronta) {
				        echo $senhaPronta;
				      }
				    ?>
			</center>
		</fieldset>
	</form>
	</div>
</body>
</html>