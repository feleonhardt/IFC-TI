<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo.css"/>
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <meta charset="UTF-8"/>
    <title>Vetor</title>
</head>
<?php 
	$strText = isset($_POST["rbSexo"])? $_POST["rbSexo"] : "M";
	$strTexto = isset($_POST["selMeses"])? $_POST["selMeses"] : "4";
?>
<body>
	<div id="box">
	<form action="" method="post">
		<br><br>
		<fieldset>
			<legend>Exercicio 01</legend>
			<center>
				<label>Selecione o sexo</label>
				<input type="radio" name="rbSexo" id="rbSexo" value="M" <?php if($strText == "M") echo "checked;"?>>Masculino
				<input type="radio" name="rbSexo" id="rbSexo" value="F" <?php if($strText == "F") echo "checked;"?>>Feminino
				<br><br>
				<label>Selecione o mês</label>
				<select name="selMeses" id="selMeses">
					<option value="1" <?php if ($strTexto == '1') echo "selected"; ?>>Janeiro</option>
					<option value="2" <?php if ($strTexto == '2') echo "selected"; ?>>Fevereiro</option>
					<option value="3" <?php if ($strTexto == '3') echo "selected"; ?>>Março</option>
					<option value="4" <?php if ($strTexto == '4') echo "selected"; ?>>Abril</option>
					<option value="5" <?php if ($strTexto == '5') echo "selected"; ?>>Maio</option>
					<option value="6" <?php if ($strTexto == '6') echo "selected"; ?>>Junho</option>
					<option value="7" <?php if ($strTexto == '7') echo "selected"; ?>>Julho</option>
					<option value="8" <?php if ($strTexto == '8') echo "selected"; ?>>Agosto</option>
					<option value="9" <?php if ($strTexto == '9') echo "selected"; ?>>Setembro</option>
					<option value="10" <?php if ($strTexto == '10') echo "selected"; ?>>Outubro</option>
					<option value="11" <?php if ($strTexto == '11') echo "selected"; ?>>Novembro</option>
					<option value="12" <?php if ($strTexto == '12') echo "selected"; ?>>Dezembro</option>
				</select>
				<br><input type="submit" value="Calcular">
			</center>
		</fieldset>
	</form>
	</div>
</body>
</html>