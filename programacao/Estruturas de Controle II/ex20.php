<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo3.css" />
    <meta charset="UTF-8" />
    <link rel="shortcut icon" type="image/x-icon" href="img/php.png" />
    <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <title>Exercicio</title>
</head>
<body>
	<?php
		$tipo = 0;
		if(isset($_POST['tipo'])){
			$tipo = $_POST['tipo'];
		}
		$qtd = 0;
		if(isset($_POST['qtd'])){
			$qtd = $_POST['qtd'];
		}
		$pg = 0;
		if(isset($_POST['pg'])){
			$pg = $_POST['pg'];
		}
	?>
<div id="borda1">
	<img src="img/borda2.jpg">
</div>
<div id="corpo">
	<form action="" method="post">
		<br>
		<fieldset>
			<legend>Exercício 20</legend>
				<br>
				<label for="tipo">Tipo de carne:</label>
		        <select name="tipo" id="n">
		          <option value=""></option>
		          <option value="Filé Duplo">Filé Duplo</option>
		          <option value="Alcatra">Alcatra</option>
		          <option value="Picanha">Picanha</option>
		        </select>
		        <br><br>
				<label>Qtd. de carne (Kg):</label>
                <input type="number" name="qtd" id="n" step="0.0001" />
                <br><br>
                <label for="pg">Tipo de pagamento:</label>
                <select name="pg" id="n">
		          <option value=""></option>
		          <option value="Cartão Tabajara">Cartão Tabajara</option>
		          <option value="Dinheiro">Dinheiro</option>
		          <option value="Cartão">Cartão</option>
		        </select>
		        <br><br>
                <center><input type="submit" value="Calcular"></center>
				<br>
					<?php
						if($tipo == "Filé Duplo"){
							if($qtd<=5){
								$total = $qtd*4.90;
							}
							else{
								$total = $qtd*5.80;
							}
						}
						elseif($tipo == "Alcatra"){
							if($qtd<=5){
								$total = $qtd*5.90;
							}
							else{
								$total = $qtd*6.80;
							}
						}
						elseif($tipo == "Picanha"){
							if($qtd<=5){
								$total = $qtd*6.90;
							}
							else{
								$total = $qtd*7.80;
							}
						}

						if($pg == "Cartão Tabajara"){
							$desconto = $total*0.05;
						}
						else{
							$desconto = 0;
						}

						echo "CUPOM FISCAL<br>Tipo de carne: ".$tipo."<br>Quantidade: ".$qtd." Kg<br>Preço Total: R$ ".$total."<br>Tipo de Pagamento: ".$pg."<br>Valor do desconto: R$ ".$desconto."<br>Valor a pagar: R$ ".($total-$desconto);
					?>
		</fieldset>
	</form>
</div>
<div id="borda2">
	<img src="img/borda2.jpg">
</div>
</body>
</html>