
      <?php
      include("cabecalho.html");
      $arquivo = file_get_contents($_POST['nm'].'.json');
      $json = json_decode($arquivo);
      echo "[['Número','Progressão']";
      for ($i=0; $i <count($json) ; $i++) {
        echo ",[".($i+1).",".$json[$i]."]";
      }
      echo "]";
      include("rodape.php");
      ?>
