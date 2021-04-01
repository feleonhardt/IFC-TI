<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Aula PHP 22.02</title>
</head>
<body>
	<?php
		//constante -> não se altera, sempre o mesmo

		define ("TAM", 100); //variável TAM sempre igual a 100
		echo TAM; //escreve o valor da variável TAM
		echo "<br>";
		echo constant ("TAM"); //escreve o valor da variável TAM

		echo '<br><br>';

		//define ("TAM", 100);
		define ("TESTE", true);
		define ("REAJUSTE", 0.0289);
		define ("USUARIO", "Rodrigo Curvello");
		echo TAM;
		echo "<br>";
		echo TESTE;
		echo "<br>";
		echo REAJUSTE;
		echo "<br>";
		echo USUARIO;
		echo "<br>";

		echo '<br><br>';

		define ("TAMM", 100); 
		define ("tamm", 200); 
		//criou duas variáveis diferentes
		echo TAMM; 
		echo "<br>";
		echo tamm; 

		echo '<br><br>';

		define ("NOVO", 300, true); //variável NOVO sempre igual a 300 e aceita maiúsculo e minúsculo
		echo NOVO; 
		echo "<br>";
		echo novo; 
	?>
</body>
</html>