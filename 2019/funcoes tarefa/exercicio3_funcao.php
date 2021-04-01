<?php
function converte($hora){
  $hora = explode(':', $hora);
  if ($hora[0]>'12') {
    echo ($hora[0] - 12).":".$hora[1]." PM";
  }else {
    echo $hora[0].":".$hora[1]." AM";
  }
}

 ?>
