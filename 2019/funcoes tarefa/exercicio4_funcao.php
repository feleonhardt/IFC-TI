<?php
$lista_de_mes = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

function converte($dt){
  $mes = $GLOBALS['lista_de_mes'];
  $dt = explode('-',$dt);
  $d = $dt[2];
  $m = $dt[1];
  $a = $dt[0];

  if (checkdate($m,$d,$a)) {
    echo "<br>Por extenso: ".$d." de ".$mes[($m-1)]." de ". $a;
  }else {
    echo "<br><br>NULL";
  }
}

 ?>
