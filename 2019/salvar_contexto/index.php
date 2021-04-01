<!DOCTYPE html>
<?php

	//<!-- - - - - - - - - - Definição das variáveis - - - - - - - - - -->

	$primeiro = isset($_POST['1']) ? $_POST['1'] : '';
	$segundo = isset($_POST['2']) ? $_POST['2'] : '';
	$textarea = isset($_POST['textarea']) ? $_POST['textarea'] : '';

	$item_radio = isset($_POST['radio']) ? $_POST['radio'] : '';

	$item_mes = isset($_POST['mes']) ? $_POST['mes'] : '';

	$lazer = isset($_POST['lazer']) ? $_POST['lazer'] : array();
	$vet_lazer = array('Informática','Música','Basquete','Tênis','Volêi');

	$lazer_multiple = isset($_POST['selLazer']) ? $_POST['selLazer'] : array();
	$vet_lazer_multiple = array('Informática','Música','Basquete','Tênis','Volêi');

	$titulo = "Salvar contexto";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="shortcut icon" href="assets/img/icone_azul.png">
	<link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
</head>
<body>

	<!-- - - - - - - - Entrada de dados - - - - - - - - - -->

	<center>
	<form action="" method="post" class="form">
		<div class="input">
			Primeiro caracter: <input type="text" name="1" id="1" value="<?php echo $primeiro; ?>" maxlength="1"><br>
			Segundo caracter: <input type="text" name="2" id="2" value="<?php echo $segundo; ?>" maxlength="1"><br>
			Textarea:
			<textarea name="textarea" id="textarea" rows="8" cols="80"><?php echo $textarea; ?></textarea>
			Apenas leitura:
			<textarea name="leitura" id="leitura" rows="8" cols="80" readonly><?php echo $textarea; ?></textarea>
			Radio:
			<fieldset class="fieldset">
				Sexo:<input type="radio" name="radio" id="radio" value="M" class="checkbox" <?php if ($item_radio=='M') echo "checked";?>>Masculino<br>
				<input type="radio" name="radio" id="radio" value="F" class="checkbox" <?php if ($item_radio=='F') echo "checked";?>>Feminino
			</fieldset>
			Select:
			<fieldset class="fieldset">
				Selecione o mês
				<select class="select" name="mes" id="mes">
					<option value="1" <?php if ($item_mes=='1') echo "selected";?>>Janeiro</option>
					<option value="2" <?php if ($item_mes=='2') echo "selected";?>>Fevereiro</option>
					<option value="3" <?php if ($item_mes=='3') echo "selected";?>>Março</option>
					<option value="4" <?php if ($item_mes=='4') echo "selected";?>>Abril</option>
					<option value="5" <?php if ($item_mes=='5') echo "selected";?>>Maio</option>
					<option value="6" <?php if ($item_mes=='6') echo "selected";?>>Junho</option>
					<option value="7" <?php if ($item_mes=='7') echo "selected";?>>Julho</option>
					<option value="8" <?php if ($item_mes=='8') echo "selected";?>>Agosto</option>
					<option value="9" <?php if ($item_mes=='9') echo "selected";?>>Setembro</option>
					<option value="10" <?php if ($item_mes=='10') echo "selected";?>>Outubro</option>
					<option value="11" <?php if ($item_mes=='11') echo "selected";?>>Novembro</option>
					<option value="12" <?php if ($item_mes=='12') echo "selected";?>>Dezembro</option>
				</select>
			</fieldset>
			Checkbox:
			<fieldset class="fieldset">
				Selecione o lazero<br>
				<?php
				for ($i=0; $i < count($vet_lazer) ; $i++) {
					if (in_array($vet_lazer[$i], $lazer)) {
						echo "<input name='lazer[]' id='lazer[]' type='checkbox' value='$vet_lazer[$i]' checked>$vet_lazer[$i]";
					}else{
						echo "<input name='lazer[]' id='lazer[]' type='checkbox' value='$vet_lazer[$i]'>$vet_lazer[$i]";
					}
				}
				?>
			</fieldset>
			Select multiple:
			<fieldset class="fieldset">
				Selecione o lazer
				<select name="selLazer[]" id="selLazer[]" multiple size="6">
					<option value="0"></option>
					<?php
					for ($x=0; $x < count($vet_lazer_multiple) ; $x++) {
						if (in_array($vet_lazer[$x], $lazer_multiple)) {
							echo "<option value='$vet_lazer_multiple[$x]' select>$vet_lazer_multiple[$x]</option>";
						}else{
							echo "<option value='$vet_lazer_multiple[$x]'>$vet_lazer_multiple[$x]</option>";
						}
					}
					?>
				</select>
			</fieldset>
		</div>
		<div class="submit">
			<input type="submit" name="acao" value="ENVIAR">
			<input type="reset" name="" value="Limpar">
		</div>
		<br>

	</form>
	<?php
	echo "<fieldset class='fieldset'>";
	//<!-- - - - - - - - - - Cálculos - - - - - - - - - -->
	echo $primeiro."<br>";
	echo $segundo."<br>";



	//<!-- - - - - - - - Saída de dados - - - - - - - -->

echo "</fieldset>";
		?>
	</center>
</body>
</html>
