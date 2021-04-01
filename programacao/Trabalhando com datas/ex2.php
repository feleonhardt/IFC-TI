<!DOCTYPE html>
<?php
$data = isset($_POST['data'])?str_replace("/", "-", $_POST['data']):'24-04-1978';
$dias = isset($_POST['dias'])?$_POST['dias']+0:0;
$meses = isset($_POST['meses'])?$_POST['meses']+0:0;
$anos = isset($_POST['anos'])?$_POST['anos']+0:0;
$op = isset($_POST['op'])?$_POST['op']:'somar';
 ?>
<html lang="pt-br">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="css/estilo.css" />
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
</head>
  <body>
    <form action="" method="post">
      <fieldset>
        <legend>Exercicio </legend>
        Data de Compra: <input type="text" name="data" value="<?php echo date("d/m/Y", strtotime($data)); ?>"
        placeholder="Informe a data (dd/mm/aaaa)" required><br><br>
        Dias: <input type="number" name="dias" value="<?php echo $dias ?>"><br><br>
        Meses: <input type="number" name="meses" value="<?php echo $meses ?>"><br><br>
        Anos: <input type="number" name="anos" value="<?php echo $anos ?>"><br><br>
        <input type="radio" name="op" <?php if($op == "somar") echo "checked"; ?> value="somar">Somar
        <input type="radio" name="op" <?php if($op == "subtrair") echo "checked"; ?> value="subtrair">Subtrair
        <br><br><input type='submit' value='Enviar'><br><br>

      <?php
        require "funcoesDatas.php";
        $data = operacaoSomarSubtrair($data, $dias, $meses, $anos, $op);
        echo $data;
      ?>
     </fieldset>
    </form>
  </body>
</html>