<?php
include 'ex6_valor.php';

echo $valor.'<br>';

echo soma(1,3);

function soma($n1, $n2){
  return $n1+$n2+$GLOBALS['valor'];
}

 ?>
