<?php
  $itens = isset($_POST['ckb']) ? $_POST['ckb'] : array();
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
      echo "<select multiple name='selecao[]' id='selecao[]'>";
        for ($i=0; $i < count($itens) ; $i++) {
          echo "<option value='".$itens[$i]."'>".$itens[$i]."</option>";
        }
      ?>
      <br>
      <input type="submit" name="" value="ENVIAR">
    </form>
  </body>
</html>
