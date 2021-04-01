<?php

function converte($vet){
  $vet = explode(';',$vet);
  $maior=0;
  for ($i=0; $i < count($vet) ; $i++) {
    if ($i==0) {
      $maior = $vet[$i];
    }else {
      if ($vet[$i]>$maior) {
        $maior = $vet[$i];
      }
    }
  }
  echo "Maior: ".$maior;
}

 ?>
