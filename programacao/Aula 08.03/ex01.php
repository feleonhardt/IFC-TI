<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo.css" />
    <meta charset="UTF-8" />
    <link rel="shortcut icon" type="image/x-icon" href="img/php.png" />
    <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
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
				<?php
					if($qtd == 1){
						$d1 = mt_rand(1, 6);
						switch ($d1) {
							case '1':
								echo "<img src='img/1.PNG'>";
								break;
							case '2':
								echo "<img src='img/2.PNG'>";
								break;
							case '3':
								echo "<img src='img/3.PNG'>";
								break;
							case '4':
								echo "<img src='img/4.PNG'>";
								break;
							case '5':
								echo "<img src='img/5.PNG'>";
								break;
							case '6':
								echo "<img src='img/6.PNG'>";
								break;
						}
					}
					elseif($qtd == 2){
						$d1 = mt_rand(1, 6);
						$d2 = mt_rand(1, 6);
						switch ($d1) {
							case '1':
								echo "<img src='img/1.PNG' height=100>";
								break;
							case '2':
								echo "<img src='img/2.PNG' height=100>";
								break;
							case '3':
								echo "<img src='img/3.PNG' height=100>";
								break;
							case '4':
								echo "<img src='img/4.PNG' height=100>";
								break;
							case '5':
								echo "<img src='img/5.PNG' height=100>";
								break;
							case '6':
								echo "<img src='img/6.PNG' height=100>";
								break;
						}
						switch ($d2) {
							case '1':
								echo "<img src='img/1.PNG' height=100>";
								break;
							case '2':
								echo "<img src='img/2.PNG' height=100>";
								break;
							case '3':
								echo "<img src='img/3.PNG' height=100>";
								break;
							case '4':
								echo "<img src='img/4.PNG' height=100>";
								break;
							case '5':
								echo "<img src='img/5.PNG' height=100>";
								break;
							case '6':
								echo "<img src='img/6.PNG' height=100>";
								break;
						}
					}



				?>
		</fieldset>
	</form>
</div>
<div id="borda2">
	<img src="img/borda2.jpg">
</div>
</body>
</html>