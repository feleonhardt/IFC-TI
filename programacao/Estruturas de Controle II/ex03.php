<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo3.css" />
    <meta charset="UTF-8" />
    <link rel="shortcut icon" type="image/x-icon" href="img/php.png" />
    <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <title>Exercicios PHP</title>
</head>
<body>
	<?php
		$codigo = "0";
		if(isset($_POST['codigo'])){
			$codigo = $_POST['codigo'];
		}
		$preco = "0";
		if(isset($_POST['preco'])){
			$preco = $_POST['preco'];
		}
	?>
<div id="borda1">
	<img src="img/borda2.jpg">
</div>
<div id="corpo">
	<form action="" method="post">
		<br>
		<fieldset>
			<legend>Exercício 03</legend>
				<br>
				Códigos de origem:
					<ul>
						<li>1 - Sul</li>
						<li>2 - Norte</li>
						<li>3 - Leste</li>
						<li>4 - Oeste</li>
						<li>5 ou 6 - Nordeste</li>
						<li>7 ou 8 - Centro-Oeste</li>
					</ul>
				<label>Código de origem: </label>
                <input type="number" name="codigo" id="n" />
                <br><br>
				<label>Preço de custo: R$ </label>
                <input type="number" name="preco" id="n" step="0.001" />
                <br><br>
                <center><input type="submit" value="Verificar"></center>
				<br>
					<?php
				   		switch ($codigo) {
				   			case '1':
				   				echo "O preço do produto vindo do Sul é R$ ".$preco;
				   				break;
				   			case '2':
				   				echo "O preço do produto vindo do Norte é R$ ".$preco;
				   				break;
				   			case '3':
				   				echo "O preço do produto vindo do Leste é R$ ".$preco;
				   				break;
				   			case '4':
				   				echo "O preço do produto vindo do Oeste é R$ ".$preco;
				   				break;
				   			case '5':
				   			case '6':
				   				echo "O preço do produto vindo do Nordeste é R$ ".$preco;
				   				break;
				   			case '7':
				   			case '8':
				   				echo "O preço do produto vindo do Centro-Oeste é R$ ".$preco;
				   				break;
				   			default:
				   				echo "Produto importado";
				   				break;
				   		}
				   	?>
		</fieldset>
	</form>
</div>
<div id="borda2">
	<img src="img/borda2.jpg">
</div>
</html>
</body>