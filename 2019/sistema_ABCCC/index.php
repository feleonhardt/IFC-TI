<?php
  $nome = isset($_POST['nome_cavalo']) ? $_POST['nome_cavalo'] : '';
  $data_nascimento = isset($_POST['data_nascimento']) ? $_POST['data_nascimento'] : '';
  $rp = isset($_POST['numero_rp']) ? $_POST['numero_rp'] : '';
  $sexos = array('ÉGUA', 'BAGUAL', 'CASTRADO');
  $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : '';
  $pelagem = isset($_POST['pelagem']) ? $_POST['pelagem'] : '';
  $apagar = isset($_POST['apagar']) ? $_POST['apagar'] : -1;
  $ok = false;
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
      <h1>CADASTRO</h1>
      <fieldset>
        <form class="" action="" method="post">
          Nome do animal
          <input type="text" name="nome_cavalo" id="nome_cavalo" value=""><br>
          RP
          <input type="text" name="numero_rp" id="numero_rp" value="<?php //if ($ok!=true) echo $rp; ?>"><br>
          Data de nascimento
          <input type="date" name="data_nascimento" id="data_nascimento" value="<?php //if ($ok!=true) echo $data_nascimento; ?>"><br>
          Sexo
          <?php
            for ($i=0; $i < count($sexos) ; $i++) {
              /*if ($sexos[$i]==$sexo) {
                echo "<input type='radio' name='sexo' id='sexo' value='".$sexos[$i]."' checked>".$sexos[$i];
              }else {*/
                echo "<input type='radio' name='sexo' id='sexo' value='".$sexos[$i]."'>".$sexos[$i];
              /*}*/
            }
           ?><br>
          Pelagem
          <input type="text" name="pelagem" id="pelagem" value="<?php //if ($ok!=true) echo $pelagem; ?>"><br>
          <?php if ($ok==false) {
            echo "<h3 class='vermelho'>Preencha todos os campos!</h3>";
          } ?>
          <input type="submit" name="acao" value="ENVIAR">
          <input type="reset" name="" value="LIMPAR">
          <?php


            $arquivo = file_get_contents('animais.json');

            $json = json_decode($arquivo);

            $cavalo = array();

            $cod=0;

            for ($x=0; $x < count($json->Animais); $x++) {
            //foreach ($json->Contatos as $key) {

            if ($x!=$apagar) {
              $animal = array(
                'codigo'      => $cod,
                'nome'        => $json->Animais[$x]->nome,
                'rp'          => $json->Animais[$x]->rp,
                'nascimento'  => $json->Animais[$x]->nascimento,
                'sexo'        => $json->Animais[$x]->sexo,
                'pelagem'     => $json->Animais[$x]->pelagem
              );
              $cod++;
              array_push($cavalo, $animal);
              }
            }
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
            $dados_identificador = array('Animais' => $cavalo);
            $dados_json = json_encode($dados_identificador);
            $fp = fopen("animais.json", "w");
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
                echo "<td><button name='apagar' id='apagar' value='".$i."'>Excluir</button><form action='acontecimento.php' method='post'>
                <a href='acontecimento.php' class='a_btn'>Acontecimentos</a></td></form>";
                //echo "<td><input type='radio' name='apagar' value='".$i."' style='border: 1px;'></td>";
              echo "</tr>";
            //endforeach;
            }
            echo "</tbody>";
            echo "</table>";
          ?>
        </form>
      </fieldset>
    </center>
  </body>
</html>
