<!DOCTYPE html>
<?php

  include('conexao.php');

  $sql = "SELECT min(data_hora) as 'minima' FROM tbdados";
  $stmt = $PDO->prepare($sql);
  $stmt->execute();

  while ($linha = $stmt->fetch(PDO::FETCH_OBJ)) {
    $DataMin=$linha->minima;
  }
  // echo $DataMin."<br>";
  $sql = "SELECT max(data_hora) as 'maxima' FROM tbdados";
  $stmt = $PDO->prepare($sql);
  $stmt->execute();

  while ($linha = $stmt->fetch(PDO::FETCH_OBJ)) {
    $DataMax=$linha->maxima;
  }
  // echo $DataMax;

  $anoMinArray = explode(" ",$DataMin);
  $anoMinArray = explode("-",$anoMinArray[0]);
  $anoMin=$anoMinArray[0];
  $anoMaxArray = explode(" ",$DataMax);
  $anoMaxArray = explode("-",$anoMaxArray[0]);
  $anoMax=$anoMaxArray[0];



 ?>

<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>NodeMCU e MySQL</title>
  </head>
  <body>
    <form action="" method="post">
      <select class="" name="ano">
        <?php
        echo "<option value=''>Ano</option>";
        for ($i=$anoMin; $i <=$anoMax ; $i++) {
          echo "<option value='".$i."'>".$i."</option>";
        }
         ?>
      </select>
      <select class="" name="mes">
        <?php
        echo "<option value=''>Mês</option>";
          for ($x=1; $x <=9 ; $x++) {
            echo "<option value='0".$x."'>".$x."</option>";
          }
          echo "<option value='10'>10</option>";
          echo "<option value='11'>11</option>";
          echo "<option value='12'>12</option>";
         ?>
      </select>
      <input type="submit" name="acao" value="BUSCAR">
    </form><br>

    <?php
      $ano = isset($_POST['ano']) ? $_POST['ano'] : '';
      $mes = isset($_POST['mes']) ? $_POST['mes'] : '';
      $dataPesquisa = $ano."-".$mes;

      if ($_SERVER['REQUEST_METHOD'] == "POST" and $dataPesquisa != "-") {
        // $dataPesquisa = $_POST['data'];
        $dataArray = explode("-",$dataPesquisa);
        $dataPesquisa= $dataArray[0]."-".$dataArray[1];

        $sql = "SELECT * FROM tbdados WHERE data_hora LIKE '%".$dataPesquisa."%'";
      }else {
        // echo "<h1>Não recebeu</h1>";
        $dataAtual = date('Y-m');
        // echo "Mês atual: ".$dataAtual;
        $sql = "SELECT * FROM tbdados WHERE data_hora LIKE '%".$dataAtual."%'";
      }

      $stmt = $PDO->prepare($sql);
      $stmt->execute();
    ?>
    <table border="1 px">
      <tr>
        <th>Sensor1</th>
        <th>Sensor2</th>
        <th>Sensor3</th>
        <th>Data/Hora</th>
      </tr>
      <?php
        while ($linha = $stmt->fetch(PDO::FETCH_OBJ)) {

          $timestamp = strtotime($linha->data_hora);
          $dataTabela = date('d/m/Y H:i:s', $timestamp);

          echo "<tr>";
          echo "<td>".$linha->sensor1."</td>";
          echo "<td>".$linha->sensor2."</td>";
          echo "<td>".$linha->sensor3."</td>";
          echo "<td>".$dataTabela."</td>";
          echo "</tr>";
        }
      ?>
    </table>
  </body>
</html>
