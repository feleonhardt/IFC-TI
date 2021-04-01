<!DOCTYPE html>
<?php
$nm=isset($_POST['nm']) ? $_POST['nm'] : '';

 ?>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <center>
        <?php include("menu.html"); ?><br><br>
    <form action="" method="post">
      Nome do arquivo <input type="text" name="nm" value="" required>
      <input type="submit" name="" value="ANALISAR">
    </form><br>
  <?php
    if (isset($_POST["nm"])) {
  $arquivo = file_get_contents($nm.'.json');
  $json = json_decode($arquivo);
  $a1=$json[0];
  $Q=count($json);
  $cont_pa=1;
  $dif1_pa=$json[1]-$json[0];
  for ($i=1; $i <count($json) ; $i++) {
    $dif2_pa=$json[$i]-$json[$i-1];
    if ($dif1_pa==$dif2_pa) {
      $cont_pa++;
    }
  }
  $cont_pg=1;
  $dif1_pg=$json[1]/$json[0];
  for ($i=1; $i <count($json) ; $i++) {
    $dif2_pg=$json[$i]/$json[$i-1];
    if ($dif1_pg==$dif2_pg) {
      $cont_pg++;
    }
  }
  if ($cont_pa==count($json)) {
    $progressao='PA';
    $r=$dif1_pa;
  }else if ($cont_pg==count($json)) {
    $progressao='PG';
    $r=$dif1_pg;
  }else {
    $progressao = 'Nenhuma';
    $a1='/';
    $r='/';
    $Q='/';
  }

    echo "a1: ".$a1;
    echo "<br>r: ".$r;
    echo "<br>Q: ".$Q;
    echo "<br>".$progressao;
  }
   ?>
 </center>
</body>
</html>
