<?php

function escreve($numero){
  for ($i=1; $i <= $numero ; $i++) {
    for ($z=1; $z <= $i ; $z++) {
      echo $z." ";
    }
    echo "<br>";
  }
}
 ?>
