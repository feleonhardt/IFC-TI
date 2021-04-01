<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo2.css" />
    <meta charset="UTF-8" />
    <link rel="shortcut icon" type="image/x-icon" href="img/php.png" />
    <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <title>Exercicio</title>
</head>
<body>
	<?php
		$r1 = "";
		if(isset($_POST['r1'])){
			$r1 = $_POST['r1'];
		}
		$r2 = "";
		if(isset($_POST['r2'])){
			$r2 = $_POST['r2'];
		}
		$r3 = "";
		if(isset($_POST['r3'])){
			$r3 = $_POST['r3'];
		}
		$r4 = "";
		if(isset($_POST['r4'])){
			$r4 = $_POST['r4'];
		}
		$r5 = "";
		if(isset($_POST['r5'])){
			$r5 = $_POST['r5'];
		}
	?>
<div id="borda1">
	<img src="img/borda2.jpg">
</div>
<div id="corpo">
	<form action="" method="post">
		<br><br>
		<fieldset>
			<legend>Exercício 17</legend>
				<br>
				<center><label>Telefonou para a vítima?</label>
                <br>Sim<input type="radio" name="r1" value="Sim" id="button">
                <br>Não<input type="radio" name="r1" value="Não" id="button">
                <br><br>
                <label>Esteve no local do crime?</label>
                <br>Sim<input type="radio" name="r2" value="Sim" id="button">
                <br>Não<input type="radio" name="r2" value="Não" id="button">
                <br><br>
                <label>Mora perto da vítima?</label>
                <br>Sim<input type="radio" name="r3" value="Sim" id="button">
                <br>Não<input type="radio" name="r3" value="Não" id="button">
                <br><br>
                <label>Devia para a vítima?</label>
                <br>Sim<input type="radio" name="r4" value="Sim" id="button">
                <br>Não<input type="radio" name="r4" value="Não" id="button">
                <br><br>
                <label>Já trabalhou com a vítima?</label>
                <br>Sim<input type="radio" name="r5" value="Sim" id="button">
                <br>Não<input type="radio" name="r5" value="Não" id="button">
                <br><br>
                <input type="submit" value="Verificar sentença"></center>
				<br>
					<?php
						$cont = 0;
						if($r1 == "Sim"){
							$cont++;
						}
						if($r2 == "Sim"){
							$cont++;
						}
						if($r3 == "Sim"){
							$cont++;
						}
						if($r4 == "Sim"){
							$cont++;
						}
						if($r5 == "Sim"){
							$cont++;
						}
						switch ($cont) {
							case '2':
								echo "<center><h4><b>Suspeita</b></h4></center>";
								break;
							case '3':
							case '4':
								echo "<center><h4><b>Cúmplice</b></h4></center>";
								break;
							case '5':
								echo "<center><h4><b>Assassino</b></h4></center>";
								break;
							default:
								echo "<center><h4><b>Inocente</b></h4></center>";
								break;
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