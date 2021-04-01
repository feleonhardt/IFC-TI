<!DOCTYPE html>
<?php
$nm=isset($_POST['nm']) ? $_POST['nm'] : '';

 ?>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="assets/css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/casa.png">
    <script type="text/javascript" src="assets/js/jQuery.js"></script>
    <script type="text/javascript" src="assets/js/materialize.js"></script>
    <style type="text/css">
    .brand-logo{
      margin-left: 20px !important;
    }
    ul{
      margin-right: 5px !important;
    }
    form{
      align-items: center;
    }
    body{
      background-color: #222 ;
    }
    input{
      color: #fff !important;
    }
    .resultado{
      color: #fff !important;
    }
    	[type="radio"]:checked + span:after,
  	[type="radio"].with-gap:checked + span:before,
  	[type="radio"].with-gap:checked + span:after {
   	border: 2px solid #0091ea;
  }
    </style>
  </head>
  <body>
    <?php include("menu.html"); ?>

    <div class="center container">
      <form action="" method="post">
        <div class="row">
          <div class="input-field col l6 offset-l3">
            <input id="nm" name="nm" value="" required type="text">
            <label for="nm">NOME DO ARQUIVO</label>
            <button type="submit" name="" class="waves-effect waves-light black btn-large" style="color: #76ff03">ANALISAR</button><br><br>
            <div class="resultado">
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
                  $dife_pg=$dif1_pg;
                  $dif1_pg = number_format($dif1_pg, 4, '.',',');
                  for ($i=1; $i <count($json) ; $i++) {
                    $dif2_pg=$json[$i]/$json[$i-1];
                    $dif2_pg = number_format($dif2_pg, 4, '.',',');
                    if ($dif1_pg==$dif2_pg) {
                      $cont_pg++;
                    }
                  }
                  if ($cont_pa==count($json)) {
                    $progressao='PA';
                    $r=$dif1_pa;
                  }else if ($cont_pg==count($json)) {
                    $progressao='PG';
                    $r=$dife_pg;
                  }else {
                    $progressao = 'Nenhuma';
                    $a1='/';
                    $r='/';
                    $Q='/';
                  }
                  echo "<hr>";
                  echo "a1: ".$a1;
                  echo "<br>r: ".$r;
                  echo "<br>Q: ".$Q;
                  echo "<br>".$progressao;
                }
                ?>
              </div>
            </div>
          </div>
        </form>
      </div>
    </body>
    <script type="text/javascript">
    	$(document).ready(function() {
    		M.updateTextFields();
    	});
    </script>
</html>
