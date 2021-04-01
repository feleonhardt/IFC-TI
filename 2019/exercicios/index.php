<?php
$texto = isset($_POST['num']) ? $_POST['num'] : '';
 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="" method="post">
      <textarea name="num" rows="8" cols="80"></textarea>
      <button type="submit" name="button">ENVIAR</button>
      <?php
      $texto = explode(';',$texto);

      $dados_json = json_encode($texto);
      $fp = fopen("valor.json", "w");
      $escreve = fwrite($fp, $dados_json);
      fclose($fp);
      //original media soma ordenado
      $json = file_get_contents("valor.json");
      $json = json_decode($json);
      if (count($json)!=='[""]') {
        echo "<br><br>Original<br>";
        $soma=0;
        foreach ($json as $key) {
          echo $key."<br>";
          $soma += $key;
        }
        $media = $soma/count($json);
        echo "<br><br>Soma<br>";
        echo $soma."<br>";
        echo "<br><br>Média<br>";
        echo $media."<br>";
        echo "<br><br>Ordenado<br>";
        sort($json);
        foreach ($json as $key) {
          echo $key."<br>";
        }
      }

       ?>

     </form>
  </body>
</html>
