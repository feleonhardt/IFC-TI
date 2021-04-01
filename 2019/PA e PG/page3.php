
      <?php
      include("cabecalho.html");
      $arquivo = file_get_contents($_POST['arquivo'].'.json');
      $json = json_decode($arquivo);
      echo "[['Número','An']";
      for ($i=0; $i <count($json) ; $i++) {
        echo ",[".($i+1).",".$json[$i]."]";
      }
      echo "]";
      include("rodape.html");
      ?>
