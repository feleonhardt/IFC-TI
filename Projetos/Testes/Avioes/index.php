<!DOCTYPE html>
<html lang="pt-BR">

<?php 
  require 'connect/connect.php';
  $busca = isset($_POST['busca'])?$_POST['busca']:'';
  $radio = isset($_POST['radio'])?$_POST['radio']:'pesquisar';
  $remover = isset($_POST['remover'])?$_POST['remover']:'';
  $opcao = isset($_POST['radio'])?$_POST['radio']:1;
  if ($opcao == 'pesquisar') {
    $opcao = 1;
  } elseif ($opcao == 'inserir') {
    $opcao = 2;
  } elseif ($opcao == 'remover') {
    $opcao = 3;
  }
  $modelo = isset($_POST['modelo'])?$_POST['modelo']:'';
  $fabricante = isset($_POST['fabricante'])?$_POST['fabricante']:'';
  $capacidadeMaxPassageiros = isset($_POST['capacidadeMaxPassageiros'])?$_POST['capacidadeMaxPassageiros']:'';
  $alcance = isset($_POST['alcance'])?$_POST['alcance']:'';
  $selectPesquisa = isset($_POST['selectPesquisa'])?$_POST['selectPesquisa']:'id';
  $selectRemover = isset($_POST['selectRemover'])?$_POST['selectRemover']:'id';
?>

<head>
  <meta charset="UTF-8" />
  <title>Aviões</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
  <script type="text/javascript">
    function opcoes(x){
      if (x == 1) {
        document.getElementById('pesquisa').style.display='block';
      } else {
        document.getElementById('pesquisa').style.display='none';
      }
      if (x == 2) {
        document.getElementById('inserir').style.display='block';
      } else {
        document.getElementById('inserir').style.display='none';
      }
      if (x == 3) {
        document.getElementById('remover').style.display='block';
      } else {
        document.getElementById('remover').style.display='none';
      }
    }
  </script>
</head>

<body onload="opcoes(<?php echo $opcao; ?>)">
  <form method="post">
    <h5>Aviões</h5>
    <hr class="dividir" />
    <br />
    <center>
    <div class="radio radio-inline">
      <input id="1" type="radio" name="radio" value="pesquisar" <?php echo $radio == 'pesquisar' ? 'checked ' : ' '; ?> onclick="opcoes(1)" />
      <label for="1">Pesquisar</label>
    </div>
    <div class="radio radio-inline">
      <input id="2" type="radio" name="radio" value="inserir" <?php echo $radio == 'inserir' ? 'checked ' : ' '; ?> onclick="opcoes(2)" />
      <label for="2">Inserir</label>
    </div>
    <div class="radio radio-inline">
      <input id="3" type="radio" name="radio" value="remover" <?php echo $radio == 'remover' ? 'checked ' : ' '; ?> onclick="opcoes(3)" />
      <label for="3">Remover</label>
    </div>
    </center>
  <div id="pesquisa">
      <div class="input">
        <input type="text" name="busca" value="<?php echo $busca; ?>" />
        <label>Pesquisa</label>
      </div>
      <select name="selectPesquisa">
        <option value="" disabled selected>Categoria</option>
        <option value="id" <?php echo $selectPesquisa == 'id' ? 'selected ' : ' '; ?>>Código</option>
        <option value="modelo" <?php echo $selectPesquisa == 'modelo' ? 'selected ' : ' '; ?>>Modelo</option>
        <option value="fabricante" <?php echo $selectPesquisa == 'fabricante' ? 'selected ' : ' '; ?>>Fabricante</option>
        <option value="capacidadeMaxPassageiros" <?php echo $selectPesquisa == 'capacidadeMaxPassageiros' ? 'selected ' : ' '; ?>>Capacidade Máxima de Passageiros</option>
        <option value="alcance" <?php echo $selectPesquisa == 'alcance' ? 'selected ' : ' '; ?>>Alcance</option>
      </select>
  </div>
  <div id="inserir">
      <div class="input">
        <input type="text" name="modelo" id="modelo" value="<?php echo $modelo; ?>" />
        <label>Modelo</label>
      </div>
      <div class="input">
        <input type="text" name="fabricante" id="fabricante" value="<?php echo $fabricante; ?>" />
        <label>Fabricante</label>
      </div>
      <div class="input">
        <input type="text" name="capacidadeMaxPassageiros" id="capacidadeMaxPassageiros" value="<?php echo $capacidadeMaxPassageiros; ?>" />
        <label>Capacidade Máxima de Passageiros</label>
      </div>
      <div class="input">
        <input type="text" name="alcance" id="alcance" value="<?php echo $alcance; ?>" />
        <label>Alcance</label>
      </div>
  </div>
  <div id="remover">
      <div class="input">
        <input type="text" name="remover" id="remover" value="<?php echo $remover; ?>" />
        <label>Remover</label>
      </div>
      <select name="selectRemover">
        <option value="" disabled selected>Categoria</option>
        <option value="id" <?php echo $selectRemover == 'id' ? 'selected ' : ' '; ?>>Código</option>
        <option value="modelo" <?php echo $selectRemover == 'modelo' ? 'selected ' : ' '; ?>>Modelo</option>
        <option value="fabricante" <?php echo $selectRemover == 'fabricante' ? 'selected ' : ' '; ?>>Fabricante</option>
        <option value="capacidadeMaxPassageiros" <?php echo $selectRemover == 'capacidadeMaxPassageiros' ? 'selected ' : ' '; ?>>Capacidade Máxima de Passageiros</option>
        <option value="alcance" <?php echo $selectRemover == 'alcance' ? 'selected ' : ' '; ?>>Alcance</option>
      </select>
  </div>
  <div class="input">
    <input type="submit" value="Enviar" />
    <input type="reset" value="Limpar" />
  </div>
  </form>
  <form>
  <br /><br /><br />
  <h5>Tabela</h5>
  <hr class="dividir" />
  </form>
  <form class="formMaior">
  <table>
    <thead>
      <th scope="col">Código</th>
      <th scope="col">Modelo</th>
      <th scope="col">Fabricante</th>
      <th scope="col">Capacidade Máxima de Passageiros</th>
      <th scope="col">Alcance</th>
    </thead>
    <?php
      if ($radio == 'pesquisar') {
        if ($selectPesquisa == 'id') {
          if ($busca == '') {
            $busca = ' order by id';
          } else {
            $busca = ' where '. $selectPesquisa.' = '. $busca. ' order by '.$selectPesquisa;
          }
          $sql = 'select * from '. $tabelaAvioes. $busca;
        } elseif ($selectPesquisa == 'modelo') {
          $sql = 'select * from '. $tabelaAvioes. ' where '. $selectPesquisa.' like "'. $busca. '%" order by '.$selectPesquisa;
        } elseif ($selectPesquisa == 'fabricante') {
          $sql = 'select * from '. $tabelaAvioes. ' where '. $selectPesquisa.' like "'. $busca. '%" order by '.$selectPesquisa;
        } elseif ($selectPesquisa == 'capacidadeMaxPassageiros') {
          if ($busca == '') {
            $busca = ' order by capacidadeMaxPassageiros';
          } else {
            $busca = ' where '. $selectPesquisa.' = '. $busca. ' order by '.$selectPesquisa;
          }
          $sql = 'select * from '. $tabelaAvioes. $busca;
        } elseif ($selectPesquisa == 'alcance') {
          if ($busca == '') {
            $busca = ' order by alcance';
          } else {
            $busca = ' where '. $selectPesquisa.' = '. $busca. ' order by '.$selectPesquisa;
          }
          $sql = 'select * from '. $tabelaAvioes. $busca;
        }
      } elseif ($radio == 'inserir') {
        $sql2 = "insert into avioes(modelo, fabricante, capacidadeMaxPassageiros, alcance) values('". $modelo. "', '".$fabricante . "', ". $capacidadeMaxPassageiros. ", ". $alcance. ");";
        $sql = 'select * from avioes';
      } elseif ($radio == 'remover') {
        if ($selectRemover == 'id' || $selectRemover == 'alcance' || $selectRemover == 'capacidadeMaxPassageiros') {
          $sql2 = 'delete from avioes where '. $selectRemover. ' = '. $remover;
        } elseif ($selectRemover == 'modelo' || $selectRemover == 'fabricante') {
          $sql2 = 'delete from avioes where '. $selectRemover. " = '". $remover. "'";
        }
        $sql = 'select * from avioes';
      }
      if (isset($sql2)) {
        mysqli_query($conexao, $sql2);
      }
      $resultado = mysqli_query($conexao, $sql);
      while ($row = mysqli_fetch_array($resultado)) {
        echo '<tr>';
        echo '<td>'. $row['id']. '</td>';
        echo '<td>'. $row['modelo']. '</td>';
        echo '<td>'. $row['fabricante']. '</td>';
        echo '<td>'. $row['capacidadeMaxPassageiros']. '</td>';
        echo '<td>'. number_format($row['alcance'], 0, ',', '.'). ' Km</td>';
        echo '</tr>';
      }
    ?>
  </table>
  </form>
</body>

</html>
