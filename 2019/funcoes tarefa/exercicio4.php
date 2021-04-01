<?php
include 'exercicio4_funcao.php';
$data = isset($_POST['data']) ? $_POST['data'] : 0;
 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="" method="post">
      <input type="date" name="data" id="data" value="">
      <input type="submit" name="" value="ENVIAR">
    </form>
    <?php
    if ($data!=0) {
      converte($data);
    }
     ?>
  </body>
</html>
