<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Aula PHP 22.02</title>
</head>
<body>
	<?php
		$cont = 0;
		echo $cont.'<br>';
		echo ++$cont.'<br>'; //antes
		echo $cont++.'<br>'; //depois
		echo $cont.'<br>';

		echo '<br><br>';

		$cont2 = 7;
		echo $cont2.'<br>';
		echo --$cont2.'<br>';
		echo $cont2--.'<br>';
		echo $cont2.'<br>';
	?>
</body>
</html>
