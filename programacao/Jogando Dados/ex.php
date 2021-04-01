<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo.css" />
    <meta charset="UTF-8" />
    <link rel="shortcut icon" type="image/x-icon" href="img/php.png" />
    <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <style type="text/css">
    	.oi {
    		width: 200px;
    		height: 200px;
    	}
    </style>
    <title>Exercicios PHP</title>
</head>
<body>
	<?php
		$qtd = "";
		if(isset($_POST['qtd'])){
			$qtd = $_POST['qtd'];
		}
	?>
<div id="borda1">
	<img src="img/borda2.jpg">
</div>
<div id="corpo">
	<form action="" method="post">
		<br>
		<fieldset>
			<legend>Dados</legend>
				<br>
				<label for="tipo">Quantidade dados: </label>
				<select name="qtd" id="n">
		          <option value=""></option>
		          <option value="1">1</option>
		          <option value="2">2</option>
		        </select>
                <br><br>
                <center><input type="submit" value="Jogar"></center>
				<br>
				<center>
				<?php
					if($qtd == 1){
						$d1 = mt_rand(1, 6);
						echo "<img class='oi' src = 'img/$d1.png' height='100'>";
					}
					elseif($qtd == 2){
						$d1 = mt_rand(1, 6);
						$d2 = mt_rand(1, 6);
						echo "<img class='oi' src = 'img/$d1.png' height='100'>";
						echo "<img class='oi' src = 'img/$d2.png' height='100'>";
					}
				?>
			</center>
		</fieldset>
	</form>
</div>
<div id="borda2">
	<img src="img/borda2.jpg">
</div>
</body>
</html>