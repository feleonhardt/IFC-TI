<!DOCTYPE html>
<?php
  $dataIn = isset($_POST['dataIn'])?str_replace("/", "-", $_POST['dataIn']):'24-04-1978';
  $dataFin = isset($_POST['dataFin'])?str_replace("/", "-", $_POST['dataFin']):'24-04-1978';
  $op = isset($_POST['op'])?$_POST['op']:0;
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
        <legend>Exercicio 03</legend>
        Data Inicial: <input type="text" name="dataIn" value="<?php echo date("d/m/Y", strtotime($dataIn)); ?>" placeholder="Informe a data (dd/mm/aaaa)" required><br><br>
        Data Final: <input type="text" name="dataFin" value="<?php echo date("d/m/Y", strtotime($dataFin)); ?>" placeholder="Informe a data (dd/mm/aaaa)" required><br><br>
        <input type="radio" name="op" value="false" <?php if ($op == 'false'):echo "checked"; ?><?php endif; ?>>Contar sábados e domingos
        <input type="radio" name="op" value="true" <?php if ($op == 'true'):echo "checked"; ?><?php endif; ?>>Não contar sábados e domingos<br><br>
        <input type="submit" name="" value="Enviar"><br><br>
    <?php
      require "funcoesDatas.php";
      $resultado = diferencaDatas($dataFin, $dataIn, $op);
      echo "<br>A diferença entre as datas é ".abs($resultado)." dias";
     ?>
     </fieldset>
     </form>
  </body>
</html>
