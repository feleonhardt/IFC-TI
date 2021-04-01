<!DOCTYPE html>
<?php
$PG=isset($_POST['PG']) ? $_POST['PG'] : 0;
$esc=isset($_POST['esc']) ? $_POST['esc'] : '';
$PA=isset($_POST['PA']) ? $_POST['PA'] : 0;
$r=isset($_POST['r']) ? $_POST['r'] : 0;
$Q=isset($_POST['Q']) ? $_POST['Q'] : 0;
$a1=isset($_POST['a1']) ? $_POST['a1'] : 0;
$apre=isset($_POST['apre']) ? $_POST['apre'] : '';
$arquivo=isset($_POST['arquivo']) ? $_POST['arquivo'] : '';
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
      a1 <input type="number" name="a1" value="" required><br>
      r <input type="number" name="r" value="" required><br>
      Q <input type="number" name="Q" value="" required><br>
      <input type="radio" name="esc" id="esc" value="PG" checked> PG<br>
      <input type="radio" name="esc" id="esc" value="PA"> PA<br>
      <hr>
      <input type="radio" name="apre" value="TELA" checked> TELA <br>
      <input type="radio" name="apre" value="JSON"> JSON <br>
      <input type="text" name="arquivo" value="" placeholder="Nome do arquivo"><br>
      <input type="submit" name="gerar" value="GERAR">
    </form>
  </body>
  <?php
  if (isset($_POST["a1"]) and isset($_POST["r"]) and isset($_POST["Q"])) {
    $resul= array();
    if ($esc == 'PG') {
      for ($i=1; $i <=$Q; $i++) {
        $pow = pow($r,($i-1));
        $resul[]=$a1*$pow;
        // echo $resul." ";
      }
    }else if($esc == 'PA') {
      for ($i=1; $i <=$Q; $i++) {
        $resul[]=$a1+($r*($i-1));
        // echo $resul." ";
      }
    }else{
      echo "ERRO";
    }
    echo "<hr>";
    for ($i=0; $i <count($resul) ; $i++) {
      echo " ".$resul[$i];
    }
    if ($apre == 'JSON') {
      $dados_json = json_encode($resul);
      $fp = fopen($arquivo.".json", "w");
      $escreve = fwrite($fp, $dados_json);
      fclose($fp);
    }
  }
   ?>
 </center>

</html>
