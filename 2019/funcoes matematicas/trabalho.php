<!DOCTYPE html>
<?php 
$n1= isset($_POST['n1']) ? $_POST['n1'] : 0;
$n2= isset($_POST['n2']) ? $_POST['n2'] : 0;
$n3= isset($_POST['n3']) ? $_POST['n3'] : 0;
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Trabalho</title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<h1>PROBLEMA</h1>
	<p>	Joãozinho, um super espião, possui uma tarefa de descobrir qual a quantia de dinheiro que um mercenário muito perigoso roubou do governo do Estados Unidos da América. Porém, após uma longa investigação, ele encontrou três pedaços de papéis rasgados, todos juntos formam um número secreto que contém a informação da quantia de dinheiro roubada.</p>
	<pre>
	      1º             2º              3º
	 ------------	 -----------	-------------
	|     87     |  |     54    |  |      94     |
	 ------------    -----------    -------------</pre>
	<p>	O número obtido está codificado entre números decimais, binários e octal, realize as converções:<br>
		Sabendo que o número secreto é a soma dos valores contidos nos três papéis;<br>
		
		1º O número obtido com os papeis convertido para binário;<br>
		2º O número binário obtido somado com 5;<br>
		3º A converção do número da soma para octal;<br>
		4º A soma do número octal com 255;<br></p>
		<hr>
		<h1>SOLUÇÃO</h1>

		<form action="" method="post">
			Número do 1º papel:<input type="number" name="n1" id="n1"><br>
			Número do 2º papel:<input type="number" name="n2" id="n2"><br>
			Número do 3º papel:<input type="number" name="n3" id="n3"><br>
			<input type="submit" name="acao" id="acao" value="Enviar">
		</form>

		<?php 
			$num = $n1 + $n2 + $n3;
			echo "<br>Soma: ".$num."<br>";
			$conversao = decbin($num);
			echo "Binário: ".$conversao."<br>";
			$num = $conversao + 5;
			echo "Soma: ".$num."<br>";
			$conversao = decoct($num);
			echo "Octal: ".$conversao."<br>";
			$num = $conversao + 255;
			echo "Soma: ".$num."<br>";
			$num = number_format($num,2,',','.');

			echo "<h1>O VALOR ROUBADO PELO MERCENÁRIO FOI DE R$ ".$num."</h1>";


		 ?>
</body>
</html>