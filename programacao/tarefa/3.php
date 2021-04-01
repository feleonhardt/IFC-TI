<!DOCTYPE html>
<?php
$titulo = "Curso de PHP";
$data1=isset($_GET['data1'])?str_replace("/", "-", $_GET['data1']):'24-04-1978';
$data2=isset($_GET['data2'])?str_replace("/", "-", $_GET['data2']):'24-04-1978';
$sd=isset($_GET['sd'])?$_GET['sd']:0;
 ?>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <link rel="shortcut icon" type="image/x-icon" href="_css/php.png" />
    <meta charset="UTF-8"/>
    <title><?php echo $titulo ?></title>
</head>
  <body>
    <form class="" action="" method="get">
      <fieldset>
        <center>
        <label for="data">Data 1:</label><br>
        <input type="text" name="data1" value="<?php echo date("d/m/Y", strtotime($data1)); ?>"
        placeholder="Informe a data (dd/mm/aaaa)" required><br>
        <label for="parcelas">Data 2:</label><br>
        <input type="text" name="data2" value="<?php echo date("d/m/Y", strtotime($data2)); ?>"
        placeholder="Informe a data (dd/mm/aaaa)" required><br>
        <label for="sd">Quer contar sabados e domingos</label>
        <input type="radio" name="sd" value="false" <?php if ($sd == 'false'):echo "checked"; ?>
          <?php endif; ?>>Sim
        <input type="radio" name="sd" value="true" <?php if ($sd == 'true'):echo "checked"; ?>
          <?php endif; ?>>Não<br>
        <input type="submit" name="" value="Enviar">
        </center>
      </fieldset>
    </form>
    <?php
      if ($sd=='true') {
          $conta = (strtotime($data2) - strtotime($data1))*-1;
          $conta = floor($conta/ (60*60*24));
          $conta=round(($conta/7)*5);
      } else {
          $conta = strtotime($data1) - strtotime($data2);
          $conta = floor($conta/ (60*60*24));
      }
      echo "A diferença entre as datas é ".abs($conta)." dias";
     ?>
  </body>
</html>
