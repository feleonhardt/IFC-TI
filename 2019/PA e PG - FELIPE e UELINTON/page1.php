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
     	  border: 2px solid #76ff03;
      }
    </style>
  </head>
  <body>
    <?php include("menu.html"); ?>
    <div class="container center">
      <form action="" method="post">
        <div class="row">
          <div class="input-field col s6 offset-l3">
            <input id="a1" name="a1" value="" required type="text" class="validate">
            <label for="a1">a1</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 offset-l3">
            <input id="r" name="r" value="" required type="text" class="validate">
            <label for="r">r</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 offset-l3">
            <input id="Q" name="Q" value="" required type="text" class="validate">
            <label for="Q">q</label>
          </div>
        </div>
      <div class="row">
        <div class="col s6 offset-l3">
          <div class="row">
            <div class="col s6 left" align="right">
              <label>
                <input class="with-gap" name="esc" id="esc" value="PA" checked type="radio"  />
                <span>PA</span>
              </label>
            </div>
            <div class="col s6" align="left">
              <label>
                <input class="with-gap" name="esc" id="esc" value="PG" type="radio"  />
                <span>PG</span>
              </label>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col s6" align="right">
              <label>
                <input class="with-gap" name="apre" id="apre" value="TELA" checked type="radio">
                <span>TELA</span>
              </label>
            </div>
            <div class="col s6" align="left">
              <label>
                <input class="with-gap" name="apre" id="apre" value="JSON" type="radio">
                <span>JSON</span>
              </label>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="input-field col l6 offset-l3">
          <div class="input-field campo_arquivo" style="display: none">
            <input id="arquivo" name="arquivo" value="" type="text">
            <label for="arquivo">NOME DO ARQUIVO</label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col l6 offset-l3">
          <button type="submit" name="acao" class="waves-effect black waves-light btn-large" style="color: #76ff03">GERAR DADOS</button>
        </div>
      </div>
    </form><br>
    <div class="resultado center">
      <?php
      if (isset($_POST["a1"]) and isset($_POST["r"]) and isset($_POST["Q"])) {
        $resul= array();
        if ($esc == 'PG') {
          for ($i=1; $i <=$Q; $i++) {
            $pow = pow($r,($i-1));
            $resul[]=$a1*$pow;
          }
        }else if($esc == 'PA') {
          for ($i=1; $i <=$Q; $i++) {
            $resul[]=$a1+($r*($i-1));
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
    </div>
  </div>
</body>
 <script type="text/javascript">
 	$(document).ready(function() {
 		M.updateTextFields();
    $('input[name="apre"]').change(function () {
    if ($('input[name="apre"]:checked').val() === "JSON") {
        $('.campo_arquivo').show();
        $('#arquivo').attr("required", "required");
    } else {
        $('.campo_arquivo').hide();
        $('#arquivo').removeAttr("required");
    }
});
 	});
 </script>
</html>
