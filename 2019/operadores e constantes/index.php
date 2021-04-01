<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
</head>
<body>
	<?php
		$x = 10;
		$y = 10;
		$z = 20;
		$n = "10";
		echo $x.' == '.$y.' resposta('.($x==$y).')<br>';
		echo $x.' == '.$n.' resposta('.($x==$n).')<br>';
		echo $x.' === '.$n.' resposta('.($x===$n).')<br>';
		echo $x.' != '.$z.' resposta('.($x!=$z).')<br>';
		echo $x.' <> '.$z.' resposta('.($x<>$z).')<br>';
		echo $x.' !== '.$n.' resposta('.($x!==$n).')<br>';
		echo $x.' > '.$z.' resposta('.($x>$z).')<br>';
		echo $x.' < '.$z.' resposta('.($x<$z).')<br>';
		echo $x.' <= '.$y.' resposta('.($x<=$y).')<br>';
		echo $x.' >= '.$z.' resposta('.($x>=$z).')<br>';
		echo "<br>";
		if ($x==$y) {
			echo "São iguais";
		}
		else{
			echo "Não são iguais";
		}
		echo "<br><br>";
		$cont=0;
		echo $cont."<br>";
		echo ++$cont."<br>";
		echo $cont++."<br>";
		echo $cont."<br>";
		echo "<br>";
		$cont=7;
		echo $cont."<br>";
		echo --$cont."<br>";
		echo $cont--."<br>";
		echo $cont."<br>";
		echo "<br>";
		$x = 10;
		$y = 10;
		if (($x==10)and($y==10))
			echo "Foi";
		else
			echo "Não foi";
		echo "<br><br>";
		$x = 10;
		$y = 11;
		if (($x==10)&&($y==10))
			echo "Foi";
		else
			echo "Não foi";
		echo "<br><br>";
		$x = 10;
		$y = 11;
		if (($x==10)or($y==10))
			echo "Foi";
		else
			echo "Não foi";
		echo "<br><br>";
		$x = 19;
		$y = 11;
		if (($x==10)||($y==10))
			echo "Foi";
		else
			echo "Não foi";
		echo "<br><br>";
		$v=false;
		if (!$v==true)
			echo "Foi";
		else
			echo "Não foi";
		echo "<br><br>";
		$v=false;
		if (!$v)
			echo "Foi";
		else
			echo "Não foi";
		echo "<br><br>";
		$v=true;
		if ($v)
			echo "Foi";
		else
			echo "Não foi";
		echo "<br><br>";
		$x = 10;
		$y = 11;
		if (($x==10)xor($y==10))
			echo "Foi";
		else
			echo "Não foi";
		echo "<br><br>";
		$x = 10;
		$y = 10;
		if (($x==10)xor($y==10))
			echo "Foi";
		else
			echo "Não foi";
		echo "<br><br>";
		$n = "Felipe";
		$s = "Leonhardt";
		$nome= $n." ".$s;
		echo $nome;

		echo "<br><br>";
		$tx1 = "Fel";
		$tx2 = "ipe";
		$tx1 .= $tx2;
		echo $tx1;

		echo "<br><br>";
		$t = 0;
		$t += 1;
		echo $t;
		
		echo "<br><br>";
		$t = 0;
		$t -= 1;
		echo $t;
		
		echo "<br><br>";

		define("TAM", 100);
		echo TAM;
		echo "<br>";
		echo constant("TAM");

		echo "<br><br>";

		define("TESTE", true);
		define("REAJUSTE", 0.0289);
		define("USUARIO", "Felipe André Leonhardt");
		echo TAM;
		echo "<br>";
		echo TESTE;
		echo "<br>";
		echo REAJUSTE;
		echo "<br>";
		echo USUARIO;

		echo "<br><br>";
		define("tam", 200);
		echo TAM;
		echo "<br>";
		echo tam;

		echo "<br><br>";
		define("NOVO", 300, true);
		echo NOVO;
		echo "<br>";
		echo novo;
		
		





	?>
</body>
</html>