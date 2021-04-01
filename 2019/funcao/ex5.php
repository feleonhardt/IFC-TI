<?php
$teste = 10;

echo soma(1,3);

function soma($n1, $n2){
  return $n1+$n2+$GLOBALS['teste'];
}

 ?>
