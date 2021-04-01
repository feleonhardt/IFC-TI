<?php
$valores = isset($_POST['val']) ? $_POST['val'] : array();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="seq3.php" method="post">
      <?php
        for ($i=0; $i < count($valores) ; $i++) {
          echo "<br><input type='checkbox' name='ckb[]' id='ckb[]' value='$valores[$i]'>".$valores[$i];
        }
      ?>
      <br><input type="submit" name="" value="ENVIAR">
    </form>
  </body>
</html>
