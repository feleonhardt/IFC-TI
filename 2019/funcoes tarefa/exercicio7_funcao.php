<?php

function converte($vet){
  $vet = explode(';',$vet);
  $soma=0;
  foreach ($vet as $value) {
    $soma+=$value;
  }
  $med = $soma/count($vet);
  echo "Média: ".$med;
}

 ?>
