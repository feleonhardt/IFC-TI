<?php
$valores = isset($_POST['selecao']) ? $_POST['selecao'] : array();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="seq4.php" method="post">
      <?php
        for ($i=0; $i < count($valores) ; $i++) {
          echo "<input type='checkbox' name='ckb[]' id='ckb[]' value='$valores[$i]'>".$valores[$i]."<br>";
        }
      ?>
      <input type="submit" name="" value="ENVIAR">
    </form>
  </body>
</html>