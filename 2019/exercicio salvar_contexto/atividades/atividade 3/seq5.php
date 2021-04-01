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
    <form class="" action="seq6.php" method="post">
      <?php
        for ($i=0; $i < count($itens) ; $i++) {
          echo "<input type='radio' name='rd' id='rd' value='$itens[$i]'>".$itens[$i]."<br>";
        }
      ?>
      <input type="submit" name="" value="ENVIAR">
    </form>
  </body>
</html>
