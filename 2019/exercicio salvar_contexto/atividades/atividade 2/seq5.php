<?php
$item = isset($_POST['selecao']) ? $_POST['selecao'] : '';
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Parabéns ....</h1>
    <form class="" action="" method="post">
      <?php
          echo "<input type='text' value='$item'>";
      ?>
    </form>
  </body>
</html>
