<!DOCTYPE html>
<html lang="pt-BR" />
<head>
  <meta charset="UTF-8" />
  <title>PHP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="css/estilo.css" />
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
</head>
<?php
    $prestacao = 0;
      if(isset($_POST['prestacao'])){
        $prestacao = $_POST['prestacao'];
      }
    $dias = 0;
      if(isset($_POST['dias'])){
        $dias = $_POST['dias'];
      }
?>
</html>
<body>
  <form action="" method="post">
  <fieldset>
  	<legend>Exercicio 07</legend>
          <label>Valor Prestação: R$ </label><br>
          <input type='number' name='prestacao' step=0.001 required value='<?php echo $prestacao ?>'/><br><br>
          <label>Dias em atraso: R$ </label><br>
          <input type='number' name='dias' required value='<?php echo $dias ?>'/><br><br>
          <center><input type='submit' value='Calcular'></center><br>
  </fieldset>
<?php
     
     valorPagamento($prestacao, $dias);

     function valorPagamento ($prestacao, $dias){
      $quantidade = 0;
     $valorTotal = 0;
      echo "<fieldset>";
        if ($prestacao > 0 ){
          if($dias == 0){
            $valorPago = $prestacao;
          }
          else{
            $valorPago = $prestacao + ($prestacao * 0.03) + ($prestacao * ($dias * 0.001) );
          }
          $valorTotal = $valorTotal + $valorPago;
          $quantidade++;
          echo "<b>Valor pagamento: ".$valorPago."</b>";
          echo "<br><br><label>Valor Prestação: R$ </label><br>";
          echo "<input type='number' name='prestacao' step=0.001 required/><br><br>";
          echo "<label>Dias em atraso: R$ </label><br>";
          echo "<input type='number' name='dias' required/><br><br>";
          echo "<input type='submit' value='Calcular'><br>";
        }
        else {
          echo "Relatório do dia:<br>Quantidade: ".$quantidade."<br>Valor total:".$valorTotal."<br>";
        }
      echo "</fieldset>";
    }
    
?>
  </form>
</body>
</html>