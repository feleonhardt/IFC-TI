<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>PHP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="css/estilo.css" />
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
</head>
  <?php
    $data = isset($_POST['data'])?str_replace("/", "-", $_POST['data']):'24-04-1978';
    $horas = isset($_POST['horas'])?$_POST['horas']+0:0;
    $minutos = isset($_POST['minutos'])?$_POST['minutos']+0:0;
    $segundos = isset($_POST['segundos'])?$_POST['segundos']+0:0;
    $op = isset($_POST['op'])?$_POST['op']:'somar';
  ?>
<body>
  <form action="" method="post">
  <fieldset>
  	<legend>Exercicio</legend>
      Data: <input type="text" name="data" value="<?php echo date("d/m/Y H:i:s", strtotime($data));?>" placeholder="Informe a data (dd/mm/aaaa hora:minutos:segundos)" required="true"><br><br>
      Horas: <input type="number" name="horas" value="<?php echo $horas;?>" required="true"><br><br>
      Minutos: <input type="number" name="minutos" value="<?php echo $minutos;?>" required="true"><br><br>
      Segundos: <input type="number" name="segundos" value="<?php echo $segundos;?>" required="true"><br><br>
      <input type="radio" name="op" <?php if($op == "somar") echo "checked"; ?> value="somar">Somar
      <input type="radio" name="op" <?php if($op == "subtrair") echo "checked"; ?> value="subtrair">Subtrair
      <br><br><input type='submit' value='Enviar'><br><br>

      <?php
        require "funcoesDatas.php";
        $hora = operacaoSomarSubtrairHora($data, $horas, $minutos, $segundos, $op);
        echo $hora;
      ?>
  </fieldset>
  </form>
</body>
</html>