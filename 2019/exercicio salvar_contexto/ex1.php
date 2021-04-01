<!DOCTYPE html>
<?php

	//<!-- - - - - - - - - - Definição das variáveis - - - - - - - - - -->
	$selecionar = array('PHP', 'PYTHON', 'JAVA', 'JS');
	$codigo = isset($_POST['codigo']) ? $_POST['codigo'] : '';
	$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
	$senha = isset($_POST['senha']) ? $_POST['senha'] : '';
	$sexo = isset($_POST['sexo']) ? $_POST['sexo'] : '';
	$fundamental_1 = isset($_POST['fundamental_1']) ? $_POST['fundamental_1'] : '';
	$fundamental_2 = isset($_POST['fundamental_2']) ? $_POST['fundamental_2'] : '';
	$ensino_medio = isset($_POST['ensino_medio']) ? $_POST['ensino_medio'] : '';
	$superior = isset($_POST['superior']) ? $_POST['superior'] : '';
	$estado = isset($_POST['estado']) ? $_POST['estado'] : '';
	$linguagem = isset($_POST['linguagem']) ? $_POST['linguagem'] : array();
	$obs = isset($_POST['obs']) ? $_POST['obs'] : '';
	echo $fundamental_1;
	?>
<html>
<head>
	<meta charset="utf-8">
	<title>EXERCÍCIO</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="shortcut icon" href="assets/img/icone_azul.png">
	<link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
</head>
<body>

	<!-- - - - - - - - Entrada de dados - - - - - - - - - -->

	<center>
	<form action="" method="post" class="">
			<div class="">
				Código <input type="text" name="codigo" id="codigo" value="<?php echo $codigo; ?>"><br>
				Usuário <input type="text" name="usuario" id="usuario" value="<?php echo $usuario; ?>"><br>
				Senha <input type="password" name="senha" id="senha" value="<?php echo $senha; ?>"><br>
				Sexo <br>
				<input type="radio" name="sexo" id="sexo" value="M" <?php if ($sexo=="M") echo "checked"; ?> > Masculino
				<input type="radio" name="sexo" id="sexo" value="F" <?php if ($sexo=="F") echo "checked"; ?> > Feminino <br>
				Curso <br>
				<input type="checkbox" name="fundamental_1" value="f1" <?php if ($fundamental_1=="f1") echo "checked"; ?> >Fundamental 1
				<input type="checkbox" name="fundamental_2" value="f2" <?php if ($fundamental_2=="f2") echo "checked"; ?> >Fundamental 2
				<input type="checkbox" name="ensino_medio" value="es" <?php if ($ensino_medio=="es") echo "checked"; ?> >Ensino Médio
				<input type="checkbox" name="superior" value="sp" <?php if ($superior=="sp") echo "checked"; ?> >Superior <br>
				Estado <br>
				<select class="" name="estado">
					<option value="AC" <?php if ($estado=="AC") echo "selected"; ?> >Acre (AC)</option>
					<option value="AL" <?php if ($estado=="AL") echo "selected"; ?> >Alagoas (AL)</option>
					<option value="AP" <?php if ($estado=="AP") echo "selected"; ?> >Amapá (AP)</option>
					<option value="AM" <?php if ($estado=="AM") echo "selected"; ?> >Amazonas (AM)</option>
					<option value="BA" <?php if ($estado=="BA") echo "selected"; ?> >Bahia (BA)</option>
					<option value="CE" <?php if ($estado=="CE") echo "selected"; ?> >Ceará (CE)</option>
					<option value="DF" <?php if ($estado=="DF") echo "selected"; ?> >Distrito Federal (DF)</option>
					<option value="ES" <?php if ($estado=="ES") echo "selected"; ?> >Espírito Santo (ES)</option>
					<option value="GO" <?php if ($estado=="GO") echo "selected"; ?> >Goiás (GO)</option>
					<option value="MA" <?php if ($estado=="MA") echo "selected"; ?> >Maranhão (MA)</option>
					<option value="MT" <?php if ($estado=="MT") echo "selected"; ?> >Mato Grosso (MT)</option>
					<option value="MS" <?php if ($estado=="MS") echo "selected"; ?> >Mato Grosso do Sul (MS)</option>
					<option value="MG" <?php if ($estado=="MG") echo "selected"; ?> >Minas Gerais (MG)</option>
					<option value="PA" <?php if ($estado=="PA") echo "selected"; ?> >Pará (PA) </option>
					<option value="PB" <?php if ($estado=="PB") echo "selected"; ?> >Paraíba (PB)</option>
					<option value="PR" <?php if ($estado=="PR") echo "selected"; ?> >Paraná (PR)</option>
					<option value="PE" <?php if ($estado=="PE") echo "selected"; ?> >Pernambuco (PE)</option>
					<option value="PI" <?php if ($estado=="PI") echo "selected"; ?> >Piauí (PI)</option>
					<option value="RJ" <?php if ($estado=="RJ") echo "selected"; ?> >Rio de Janeiro (RJ)</option>
					<option value="RN" <?php if ($estado=="RN") echo "selected"; ?> >Rio Grande do Norte (RN)</option>
					<option value="RS" <?php if ($estado=="RS") echo "selected"; ?> >Rio Grande do Sul (RS)</option>
					<option value="RO" <?php if ($estado=="RO") echo "selected"; ?> >Rondônia (RO)</option>
					<option value="RR" <?php if ($estado=="RR") echo "selected"; ?> >Roraima (RR)</option>
					<option value="SC" <?php if ($estado=="SC") echo "selected"; ?> >Santa Catarina (SC)</option>
					<option value="SP" <?php if ($estado=="SP") echo "selected"; ?> >São Paulo (SP)</option>
					<option value="SE" <?php if ($estado=="SE") echo "selected"; ?> >Sergipe (SE)</option>
					<option value="TO" <?php if ($estado=="TO") echo "selected"; ?> >Tocantins (TO)</option>
				</select> <br>
				Linguagens <br>
				<select class="" multiple name="linguagem[]">
					<?php
						for ($i=0; $i < count($selecionar) ; $i++) {
							if (in_array($selecionar[$i], $linguagem)) {
								echo "<option value='".$selecionar[$i]."' selected>".$selecionar[$i]."</option>";
							}
							else {
									echo "<option value='".$selecionar[$i]."'>".$selecionar[$i]."</option>";
							}
						}
					?>
				</select><br>
				Obs.:<br>
				<textarea name="obs" rows="8" cols="80"><?php echo $obs; ?></textarea> <br>
				<input type="submit" name="acao" value="ENVIAR">
			</div>
	</form>
	</center>
</body>
</html>
