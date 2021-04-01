<?php
include 'exercicio7_funcao.php';
$vet = isset($_POST['vet']) ? $_POST['vet'] : '';
 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="" method="post">
      <textarea name="vet" rows="8" cols="80" placeholder="Digite os números do vetor separados por ';'"></textarea>
      <input type="submit" name="" value="ENVIAR">
    </form>
    <?php
    if ($vet!='') {
      converte($vet);
    }
     ?>
  </body>
</html>
