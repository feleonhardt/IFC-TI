<!DOCTYPE html>
<?php
$data = isset($_POST['data'])?str_replace("/", "-", $_POST['data']):'24-04-1978';
$parcelas = isset($_POST['parcelas'])?$_POST['parcelas']:0;
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
        <legend>Exercicio 01</legend>
        Data de Compra: <input type="text" name="data" value="<?php echo date("d/m/Y", strtotime($data)); ?>"
        placeholder="Informe a data (dd/mm/aaaa)" required><br><br>
        Número de Parcelas: <input type="number" name="parcelas" value="<?php echo $parcelas ?>"><br><br>
        <input type="submit" name="" value="Enviar"><br><br>
    <?php
        require "funcoesDatas.php";
        parcelas($data, $parcelas);
     ?>
     </fieldset>
    </form>
  </body>
</html>
