<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Aula PHP 22.02</title>
</head>
<body>
	<?php
		$x = 10;
		$y = 10;
		if (($x == 10) and ($y == 10))
			echo "Foi";
		else
			echo "Não foi";
		//if de uma linha não precisa usar "{"
		
		echo '<br><br>';

		$x1 = 10;
		$y1 = 11;
		if (($x1 == 10) && ($y1 == 10))
			echo "Foi";
		else
			echo "Não foi";

		echo '<br><br><br><br>';

		$x = 10;
		$y = 11;
		if (($x == 10) or ($y == 10))
			echo "Foi";
		else
			echo "Não foi";
		//if de uma linha não precisa usar "{"
		
		echo '<br><br>';

		$x1 = 19;
		$y1 = 11;
		if (($x1 == 10) || ($y1 == 10))
			echo "Foi";
		else
			echo "Não foi";


		echo '<br><br><br><br>';

		$x = 10;
		$y = 11;
		if (($x == 10) xor ($y == 10)) //xor -> ou exclusivo
			echo "Foi";
		else
			echo "Não foi";
		//if de uma linha não precisa usar "{"
		
		echo '<br><br>';

		$x1 = 10;
		$y1 = 10;
		if (($x1 == 10) xor ($y1 == 10)) //verdadeiro = 1 verdadeiro e 1 falso; falso = 2 verdadeiros ou 2 falsos
			echo "Foi";
		else
			echo "Não foi";

		echo '<br><br><br><br>';

		$v = false;
		if (!$v == true) //não falso == verdade
			echo "Foi";
		else
			echo "Não foi";
		
		echo '<br><br>';

		$v = false;
		if (!$v) //não falso
			echo "Foi";
		else
			echo "Não foi";
		
		echo '<br><br>';

		$v = true;
		if ($v) //verdade
			echo "Foi";
		else
			echo "Não foi";

		echo '<br><br>';

		$v = false;
		if ($v) //falso
			echo "Foi";
		else
			echo "Não foi";
	?>
</body>
</html>
