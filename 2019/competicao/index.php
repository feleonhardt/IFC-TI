<?php
  $cod = isset($_POST['num']) ? $_POST['num'] : 0;
  $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
  $escolaridade = isset($_POST['escolaridade']) ? $_POST['escolaridade'] : '';
  $idioma = isset($_POST['idioma']) ? $_POST['idioma'] : array();
  $sistem = isset($_POST['sistem']) ? $_POST['sistem'] : '';
  $tecnologia = isset($_POST['tecnologia']) ? $_POST['tecnologia'] : array();




?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      Nome:<input type="text" name="nome" value="">
      Escolaridade:
      <select class="" name="escolaridade">
        <?php
        $arquivo_escolaridade = file_get_contents('escolaridade.json');
        $json_escolaridade = json_decode($arquivo_escolaridade);

        for ($x=0; $x < count($json_escolaridade); $x++) {
          echo "<option value='$json_escolaridade[$x]'>$json_escolaridade[$x]</option>";
        }
        ?>
      </select><br>
      Idiomas:<br>
        <?php
        $arquivo_idiomas = file_get_contents('idiomas.json');
        $json_idiomas = json_decode($arquivo_idiomas);

        for ($x=0; $x < count($json_idiomas); $x++) {
          echo "<input type='checkbox'name='idioma[]' value='$json_idiomas[$x]'>".$json_idiomas[$x];
        }
         ?>
         <br>
         Sistema Operacional:<br>
         <?php
         $arquivo_sistemas = file_get_contents('sistemas.json');
         $json_sistemas = json_decode($arquivo_sistemas);

         for ($x=0; $x < count($json_sistemas); $x++) {
           echo "<input type='radio' name='sistem' value='$json_sistemas[$x]'>".$json_sistemas[$x];
         }
          ?>
          <br>Tecnologias:<br>
          <select class="" name="tecnologia[]" multiple>
            <?php
            $arquivo_tec = file_get_contents('tec.json');
            $json_tec = json_decode($arquivo_tec);

            for ($x=0; $x < count($json_tec); $x++) {
              echo "<option value='$json_tec[$x]'>".$json_tec[$x]."</option>";
            }
             ?>
          </select>

      <input type="submit" name="" value="CADASTRAR">

    </form>
    <?php
    $arquivo = file_get_contents('contatos.json');
    $cod=0;
    $json = json_decode($arquivo);

    $cliente = array();
    for ($x=0; $x < count($json->Contatos); $x++) {
      $key = array(
        'codigo'      => $cod,
        'nome'        => $json->Contatos[$x]->nome,
        'escolaridade'    => $json->Contatos[$x]->escolaridade,
        'idiomas'       => $json->Contatos[$x]->idiomas,
        'sistemas'       => $json->Contatos[$x]->sistemas,
        'tecno'  => $json->Contatos[$x]->tecno
      );
      $cod++;
      array_push($cliente, $key);
    }
    if ($nome != '') {
      $cliente[count($cliente)] = array(
        'codigo'      => $cod,
        'nome'        => $nome,
        'escolaridade'    => $escolaridade,
        'idiomas'       => $idioma,
        'sistemas'       => $sistem,
        'tecno'  => $tecnologia
      );
      $cod++;
    }
    $dados_identificador = array('Contatos' => $cliente);
    $dados_json = json_encode($dados_identificador);
    $fp = fopen("contatos.json", "w");
    $escreve = fwrite($fp, $dados_json);
    fclose($fp);

    $arquivo = file_get_contents('contatos.json');
    $json = json_decode($arquivo);
    echo "<table border='1' id='tabela'>";
      echo "<thead>";
        echo "<tr colspan='3'>";
          echo "<th>Código</th>";
          echo "<th>Nome</th>";
          echo "<th>Escolaridade</th>";
          echo "<th>Idiomas</th>";
          echo "<th>Sis. Op.</th>";
          echo "<th>Tec.</th>";
        echo "</tr>";
      echo "</thead>";
      echo "<tbody>";
    for ($i=0; $i < count($json->Contatos) ; $i++) {
      echo "<tr>";
        echo "<td>".$json->Contatos[$i]->codigo."</td>";
        echo "<td>".$json->Contatos[$i]->nome."</td>";
        echo "<td>".$json->Contatos[$i]->escolaridade."</td>";
        //echo "<td>".$json->Contatos[$i]->idiomas."</td>";
        echo "<td>";
        for ($z=0; $z < count($json->Contatos[$i]->idiomas) ; $z++) {
          echo $json->Contatos[$i]->idiomas[$z];
          if (($z+1)==count($json->Contatos[$i]->idiomas)) {
            echo "";
          }else{
            echo ",";
          }
        }
        echo "</td>";
        echo "<td>".$json->Contatos[$i]->sistemas."</td>";
        //echo "<td>".$json->Contatos[$i]->tecno."</td>";
        echo "<td>";
        for ($y=0; $y < count($json->Contatos[$i]->tecno) ; $y++) {
          echo $json->Contatos[$i]->tecno[$y];
          if (($y+1)==count($json->Contatos[$i]->tecno)) {
            echo "";
          }else{
            echo ",";
          }
        }

        echo "</td>";
      echo "</tr>";
    //endforeach;
    }
    echo "</tbody>";
    echo "</table>";
     ?>
  </body>
</html>

<?php

?>
