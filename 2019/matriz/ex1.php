<!DOCTYPE html>
<?php
$matriz = array(array(1,2,3),
                array(4,5,6),
                array(7,8,9));
define("LIN",3);
define("COL",3);
 ?>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    for ($lin=0; $lin < LIN ; $lin++) {
      for ($col=0; $col < COL ; $col++) {
        echo $matriz[$lin][$col]."|";
      }
      echo "<br>";
    }

    echo "=======================<br>";

    foreach ($matriz as $linha) {
      foreach ($linha as $item) {
        echo $item."|";
      }
      echo "<br>";
    }
     ?>

     
  </body>
</html>
