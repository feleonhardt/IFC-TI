<!DOCTYPE html>
<?php
  $turnos = array('MATUTINO', 'VESPERTINO', 'NOTURNO', 'INTEGRAL');
  $cursos = array('FUNDAMENTAL 1', 'FUNDAMENTAL 2', 'ENSINO MÉDIO', 'SUPERIOR');
  $estados = array('Acre (AC)', 'Alagoas (AL)', 'Amapá (AP)', 'Amazonas (AM)', 'Bahia (BA)', 'Ceará (CE)', 'Distrito Federal (DF)', 'Espírito Santo (ES)', 'Goiás (GO)', 'Maranhão (MA)', 'Mato Grosso (MT)', 'Mato Grosso do Sul (MS)', 'Minas Gerais (MG)', 'Pará (PA) ', 'Paraíba (PB)', 'Paraná (PR)', 'Pernambuco (PE)', 'Piauí (PI)', 'Rio de Janeiro (RJ)', 'Rio Grande do Norte (RN)', 'Rio Grande do Sul (RS)', 'Rondônia (RO)', 'Roraima (RR)', 'Santa Catarina (SC)', 'São Paulo (SP)', 'Sergipe (SE)', 'Tocantins (TO)');
  $linguagens = array('PHP', 'PYTHON', 'JAVA', 'JS');
  $turno=isset($_POST['turno']) ? $_POST['turno'] : '';
  $curso=isset($_POST['curso']) ? $_POST['curso'] : array();
  $estado=isset($_POST['estado']) ? $_POST['estado'] : '';
  $linguagem=isset($_POST['linguagem']) ? $_POST['linguagem'] : array();
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
			<div class="input">
        <?php
        echo "<fieldset>Turno:<br>";
        for ($i=0; $i < count($turnos) ; $i++) {
          if ($turno==$turnos[$i]) {
            echo "<input type='radio' name='turno' id='turno' value='".$turnos[$i]."' checked>".$turnos[$i];
          }else {
            echo "<input type='radio' name='turno' id='turno' value='".$turnos[$i]."'>".$turnos[$i];
          }
        }
        echo "</fieldset>";
        echo "<br><fieldset>Cursos:<br>";
        for ($i=0; $i < count($cursos) ; $i++) {
					if (in_array($cursos[$i], $curso)) {
						echo "<input name='curso[]' id='curso[]' type='checkbox' value='$cursos[$i]' checked>$cursos[$i]";
					}else{
						echo "<input name='curso[]' id='curso[]' type='checkbox' value='$cursos[$i]'>$cursos[$i]";
					}
				}
        echo "</fieldset>";
        echo "<br><fieldset>Estado:<br>";
        echo "<select name='estado'>";
        for ($i=0; $i < count($estados) ; $i++) {
					if ($estados[$i]== $estado) {
						echo "<option value='$estados[$i]' selected>".$estados[$i]."</option>";
					}else{
            echo "<option value='$estados[$i]'>".$estados[$i]."</option>";
            }
				}
        echo "</select></fieldset>";
        echo "<br><fieldset>Linguagens<br>";
        echo "<select multiple name='linguagem[]'>";
        for ($i=0; $i < count($linguagens) ; $i++) {
          if (in_array($linguagens[$i], $linguagem)) {
            echo "<option value='$linguagens[$i]' selected>".$linguagens[$i]."</option>";
          }else{
            echo "<option value='$linguagens[$i]'>".$linguagens[$i]."</option>";
            }
        }
        echo "</select></fieldset><br>";
        ?>
        <div class="sebmit">
          <input type="submit" name="" value="ENVIAR">
          <input type="reset" name="" value="LIMPAR">
        </div>
      </div>
	</form>
	</center>
</body>
</html>
