<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo.css"/>
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet"/>
    <meta charset="UTF-8"/>
    <title>Vetor</title>
</head>
<?php
	$lazeresc = array();
	if(isset($_POST['selLazer'])){
		$lazeresc = $_POST['selLazer'];
	}
	$lazer = array("Informática", "Música", "Basquete", "Tenis", "Volei");
?>
<body>
	<div id="box">
		<form action="" method="post">
		<br><br>
			<fieldset>
				<legend>Exercicio checkboX</legend>
				<center>
	                <br><label>Lazer</label><br>
	                <?php 
						for ($i = 0; $i < count($lazer); $i++) { 
							if (in_array($lazer[$i], $lazeresc)) 
								echo "<input name=\"selLazer[]\" id=\"selLazer[]\" type=\"checkbox\" value=\"".$lazer[$i]."\">".$lazer[$i]."\n";
							else
								echo "<input name=\"selLazer[]\" id=\"selLazer[]\" type=\"checkbox\" value=\"".$lazer[$i]."\" checked>".$lazer[$i]."\n";
						}
					?>
					<br><br><input type="submit" value="Enviar">
				</center>
			</fieldset>
		</form>
	</div>
</body>
</html>