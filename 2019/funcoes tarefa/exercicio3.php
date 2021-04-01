<?php
include 'exercicio3_funcao.php';
$hrs = isset($_POST['hrs']) ? $_POST['hrs'] : 0;
 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="" method="post">
      <input type="time" name="hrs" id="hrs" value="">
      <input type="submit" name="" value="ENVIAR">
    </form>
    <?php
    if ($hrs!=0) {
      converte($hrs);
    }
     ?>
  </body>
</html>
