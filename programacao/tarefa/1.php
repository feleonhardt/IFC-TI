<!DOCTYPE html>
<?php
$titulo="Curso de PHP";
$data=isset($_GET['data'])?str_replace("/", "-", $_GET['data']):'24-04-1978';
$parcelas = isset($_GET['parcelas'])?$_GET['parcelas']:0;
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
        <input type="text" name="data" value="<?php echo date("d/m/Y", strtotime($data)); ?>"
        placeholder="Informe a data (dd/mm/aaaa)" required><br>
        <label for="parcelas">Número de Parcelas:</label><br>
        <input type="number" name="parcelas" value="<?php echo $parcelas ?>"><br>
        <input type="submit" name="" value="Enviar">
        </center>
      </fieldset>
    </form>
    <?php
        $cont=0;
      for ($i = 1; $i <= $parcelas ; $i++) {
          echo $i."º Parcela: ".date("d/m/Y", strtotime('+'.$cont.'month', strtotime($data)))."<br>";
          $cont++;
      }
     ?>
  </body>
</html>
