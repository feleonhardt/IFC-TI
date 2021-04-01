<!DOCTYPE html>
<html lang="pt-BR" />
<head>
  <meta charset="UTF-8" />
  <title>PHP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="css/estilo.css" />
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
</head>
<body>
  <form action="" method="post">
  <fieldset>
  	<legend>Exemplo Função</legend>
    <?php
      header('Content-Type: text/html; charset=UTF-8');

      mensagem();
      function mensagem(){
        echo "Mensagem dentro da função";
      }

      echo "<br><hr><br>";

      mensagem2("Júlia");
      echo "<br>";
      mensagem2("Daiane");
      function mensagem2($msg){
        echo $msg;
      }

      echo "<br><hr><br>";

      soma(3,4);
      function soma($n1, $n2){
        echo $n1 + $n2;
      }

      echo "<br><hr><br>";

      $resultado = soma2(3,4);
      $resultado = $resultado + $resultado;
      echo $resultado;
      function soma2($n1, $n2){
        return $n1 + $n2;
      }
      //guarda resultado para depois

      echo "<br><hr><br>";

      $teste = 10;
      echo soma3(1,3);
      function soma3($n1, $n2){
        return $n1 + $n2 + $GLOBALS['teste'];
      }

      echo "<br><hr><br>";

      include 'include.php';
      echo "Valor = ".$valor."<br>";
      echo soma4(1,3);
      function soma4($n1, $n2){
        return $n1 + $n2 + $GLOBALS['valor'];
      }
    ?>
  </fieldset>
  </form>
</body>
</html>