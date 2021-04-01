<?php

function converte($vet){

  $vet = explode(';',$vet);
  $vetor = array_count_values($vet);
  foreach($vetor as $key => $value){
        echo '<br>Valor: '.$key." = Vezes ".$value;
    }
}

 ?>
