<!DOCTYPE html>
<?php
$titulo = "Curso de PHP";
$data=isset($_GET['data'])?str_replace("/", "-", $_GET['data']):'24-04-1978';
$h = isset($_GET['h'])?$_GET['h']+0:0;
$ss = isset($_GET['ss'])?$_GET['ss']:'somar';
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
        <label for="data">Data de Compra:</label><br>
        <input type="text" name="data" value="<?php echo date("d/m/Y H:i:s", strtotime($data)); ?>"
        placeholder="Informe a data (dd/mm/aaaa hh:mm:ss)" required><br>
        <label for="h">Horas:</label><br>
        <input type="number" name="h" value="<?php echo $h ?>"><br>
        <label for="">Operações</label>
        <input type="radio" name="ss" value="somar" <?php if ($ss == 'somar'):echo "checked"; ?>
          <?php endif; ?>>Somar<br>
        <input type="radio" name="ss" value="subt" <?php if ($ss == 'subt'):echo "checked"; ?>
          <?php endif; ?>>Subtrair<br>
        <input type="submit" name="" value="Enviar">
        </center>
      </fieldset>
    </form>
    <?php
      if ($ss == "somar") {
          echo "O resultado é ".date("d/m/Y H:i:s", strtotime('+'.$h.'hours', strtotime($data)));
      } else {
          echo "O resultado é ".date("d/m/Y H:i:s", strtotime('-'.$h.'day', strtotime($data)));
      }
     ?>
  </body>
</html>
