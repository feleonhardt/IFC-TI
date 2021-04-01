<?php

function converte($vet){
  $vet = explode(';',$vet);
  $menor=0;
  for ($i=0; $i < count($vet) ; $i++) {
    if ($i==0) {
      $menor = $vet[$i];
    }else {
      if ($vet[$i]<$menor) {
        $menor = $vet[$i];
      }
    }
  }
  echo "Menor: ".$menor;
}

 ?>
