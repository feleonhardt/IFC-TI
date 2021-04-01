<?php
  /*$nome = isset($_POST['nome_cavalo']) ? $_POST['nome_cavalo'] : '';
  $data_nascimento = isset($_POST['data_nascimento']) ? $_POST['data_nascimento'] : '';
  $rp = isset($_POST['numero_rp']) ? $_POST['numero_rp'] : '';
  $sexos = array('ÉGUA', 'BAGUAL', 'CASTRADO');
  $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : '';
  $pelagem = isset($_POST['pelagem']) ? $_POST['pelagem'] : '';
  $apagar = isset($_POST['apagar']) ? $_POST['apagar'] : -1;
  $ok = false;*/
  $codigo_animal = isset($_POST['acontecimento']) ? $_POST['acontecimento'] : '';
  echo $codigo_animal;
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="assets/css/custom.css">
  </head>
  <body>
    <center>
          <?php


            /*$arquivo = file_get_contents('acontecimento.json');

            $json = json_decode($arquivo);

            $acontecimentos = array();

            $cod=0;

            for ($x=0; $x < count($json->$codigo_animal); $x++) {
              $acontecimento = array(
                'codigo'      => $codigo_animal,
                'nome'        => $json->$codigo_animal
              );
              $cod++;
              array_push($acontecimentos, $acontecimento);
            }
            var_dump($acontecimento);
            if ($nome!='') {
              $data = array();
              $data = explode('-',$data_nascimento);
              $data_nascimento_separada = $data[2].'-'.$data[1].'-'.$data[0];
              $cavalo[count($cavalo)] = array(
                'codigo'      => $cod,
                'nome'        => $nome,
                'rp'          => $rp,
                'nascimento'  => $data_nascimento_separada,
                'sexo'        => $sexo,
                'pelagem'     => $pelagem
              );
              $cod++;
            }
            $dados_identificador = array('Animais' => $acontecimentos);
            $dados_json = json_encode($dados_identificador);
            $fp = fopen("acontecimento.json", "w");
            $escreve = fwrite($fp, $dados_json);
            fclose($fp);
            $arquivo = file_get_contents('animais.json');
            $json = json_decode($arquivo);
            echo "<table border='1' id='tabela'>";
              echo "<thead>";
                echo "<tr colspan='3'>";
                  echo "<th>Código</th>";
                  echo "<th>Nome</th>";
                  echo "<th>RP</th>";
                  echo "<th>Nascimento</th>";
                  echo "<th>Sexo</th>";
                  echo "<th>Pelagem</th>";
                  echo "<th>Ação</th>";
                echo "</tr>";
              echo "</thead>";
              echo "<tbody>";
            for ($i=0; $i < count($json->Animais) ; $i++) {
              //foreach($json->Contatos as $registro):
              echo "<tr>";
                echo "<td>".$json->Animais[$i]->codigo."</td>";
                echo "<td>".$json->Animais[$i]->nome."</td>";
                echo "<td>".$json->Animais[$i]->rp."</td>";
                echo "<td>".$json->Animais[$i]->nascimento."</td>";
                echo "<td>".$json->Animais[$i]->sexo."</td>";
                echo "<td>".$json->Animais[$i]->pelagem."</td>";
                echo "<td><button name='apagar' id='apagar' value='".$i."'>Excluir</button>
                <a href='acontecimento.php' class='a_btn'>Acontecimentos</a></td>";
                //echo "<td><input type='radio' name='apagar' value='".$i."' style='border: 1px;'></td>";
              echo "</tr>";
            //endforeach;
            }
            echo "</tbody>";
            echo "</table>";*/
            ?>
    </center>
  </body>
</html>
