<?php
include 'exercicio2_funcao.php';
$num = isset($_POST['num']) ? $_POST['num'] : 0;
 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="" method="post">
      <input type="number" name="num" id="num" value="">
      <input type="submit" name="" value="ENVIAR">
    </form>
    <?php
    escreve($num);

     ?>
  </body>
</html>
