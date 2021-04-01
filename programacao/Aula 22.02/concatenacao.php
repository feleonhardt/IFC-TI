<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Aula PHP 22.02</title>
</head>
<body>
	<?php
		//concatenação -> juntar

		$n = "Rodrigo";
		$s = "Curvello";
		$nome = $n." ".$s; //concatenando -> juntando dois textos
		echo $nome;

		echo '<br><br>';

		$tx1 = "Rodr";
		$tx2 = "igo";
		$tx1 .= $tx2; //concatenando -> escreve o conteúdo da variável tx1 mais o da tx2
		echo $tx1;

		echo '<br><br>';

		$t = 0;
		$t += 1; //t=t+1
		echo $t;
	?>
</body>
</html>