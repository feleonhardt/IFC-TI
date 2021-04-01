<?php
$busca = isset($_POST['consulta']) ? $_POST['consulta'] : '';
$dt_inicio = isset($_POST['dt_inicio']) ? $_POST['dt_inicio'] : '';
$dt_fim = isset($_POST['dt_fim']) ? $_POST['dt_fim'] : '';
$plano = isset($_POST['plano']) ? $_POST['plano'] : '';
$valor_inicial = isset($_POST['valor_inicial']) ? $_POST['valor_inicial'] : '';
$valor_final = isset($_POST['valor_final']) ? $_POST['valor_final'] : '';

$limpar = isset($_POST['limpar']) ? $_POST['limpar'] : false;

$excluir_consulta = isset($_POST['excluir_consulta']) ? $_POST['excluir_consulta'] : '';

if ($limpar==true) {
  $busca = '';
  $dt_inicio = '';
  $dt_fim = '';
  $plano = '';
  $valor_inicial = '';
  $valor_final = '';
}

// if ($excluir_consulta == 'SUS') {
//   // header("location:index_acao.php?acao=SUS&codigo=-99");
//   header("location:index_acao.php?acao=SUS&codigo=-99");
// }elseif ($excluir_consulta == 'PLANO') {
//   // header("location:index_acao.php?acao=PLANO&codigo=-99");
//   header("location:index_acao.php?acao=PLANO&codigo=-99");
// }elseif ($excluir_consulta == 'PARTICULAR') {
//   // header("location:index_acao.php?acao=PARTICULAR&codigo=-99");
//   header("location:index_acao.php?acao=PARTICULAR&codigo=-99");
// }elseif ($excluir_consulta == 'SOCIAL') {
//   // header("location:index_acao.php?acao=SOCIAL&codigo=-99");
//   header("location:index_acao.php?acao=SOCIAL&codigo=-99");
// }


// if ($excluir_consulta == 'SUS') {
//   excluir("index_acao.php?acao=SUS&codigo=-99");
// }elseif ($excluir_consulta == 'PLANO') {
//   excluir("index_acao.php?acao=PLANO&codigo=-99");
// }elseif ($excluir_consulta == 'PARTICULAR') {
//   excluir("index_acao.php?acao=PARTICULAR&codigo=-99");
// }elseif ($excluir_consulta == 'SOCIAL') {
//   excluir("index_acao.php?acao=SOCIAL&codigo=-99");
// }

if ($busca == 'DATA' and $dt_inicio != '' and $dt_fim != '') {
  $data_i = explode('/', $dt_inicio);
  $data_f = explode('/', $dt_fim);
  $data_inicio = $data_i[2]."-".$data_i[1]."-".$data_i[0];
  $data_fim = $data_f[2]."-".$data_f[1]."-".$data_f[0];
  $sql = $pdo->query("SELECT * FROM consultas WHERE data >= '{$data_inicio}' and data <= '{$data_fim}';");
}elseif ($busca == 'VALOR' and $valor_inicial != '' and $valor_final != '') {
  $sql = $pdo->query("SELECT * FROM consultas WHERE valor >= {$valor_inicial} and valor <= {$valor_final};");
}elseif ($busca == 'TIPO' and $plano != '') {
  $sql = $pdo->query("SELECT * FROM consultas WHERE tipo = '{$plano}';");
}
else {
  $sql = $pdo->query("SELECT * FROM consultas;");
}



  function tabela($sql){
    echo "<table border='1px'>";
    echo "<tr>";
      echo "<th>codigo</th><th>paciente</th><th>medico</th><th>data</th><th>tipo</th><th>valor</th><th>desconto</th><th>valor final</th><th>excluir</th>";
    echo "</tr>";
    $valorTotal = 0;
    $descontoTotal = 0;
    $valorFinalTotal = 0;
    $cont = 0;
    while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr class='";
        if ($linha['tipo'] == 'SUS') {
          echo "SUS";
          $desconto = 30;
        }elseif ($linha['tipo'] == 'Social') {
          echo "Social";
          $desconto = 40;
        }elseif ($linha['tipo'] == 'Plano de Saúde') {
          echo "Plano";
          $desconto = 20;
        }elseif ($linha['tipo'] == 'Particular') {
          echo "Particular";
          $desconto = 10;
        }
        if ($cont%2==0) {
          echo " cinza";
        }

        echo "'";
        $valorFinal = $linha['valor']-$desconto;
        echo">";
        $data = explode('-', $linha['data']);
        $data_tela = $data[2]."/".$data[1]."/".$data[0];
        $valor_tela = number_format($linha['valor'],2,',','.');
        $desconto_tela = number_format($desconto,2,',','.');
        $valorFinal_tela = number_format($valorFinal,2,',','.');
          echo "<td>{$linha['codigo']}</td><td>{$linha['paciente']}</td><td>{$linha['medico']}</td><td>{$data_tela}</td><td>{$linha['tipo']}</td><td>R$ {$valor_tela}</td><td>R$ {$desconto_tela}</td><td>R$ {$valorFinal_tela}</td>";
          echo "<td>";
            ?>
            <a href="javascript:excluir('index_acao.php?acao=excluir&codigo=<?php echo $linha['codigo']; ?>')">x</a>
            <?php
          echo "</td>";
        echo "</tr>";
        $valorTotal += $linha['valor'];
        $descontoTotal += $desconto;
        $valorFinalTotal += $valorFinal;
        $cont++;
    }
    echo "<tr style='font-weight: bold;'>";
    $valorTotal_tela = number_format($valorTotal,2,',','.');
    $descontoTotal_tela = number_format($descontoTotal,2,',','.');
    $valorFinalTotal_tela = number_format($valorFinalTotal,2,',','.');
      echo "<td></td><td></td><td></td><td></td><td></td><td>R$ {$valorTotal_tela}</td><td>R$ {$descontoTotal_tela}</td><td>R$ {$valorFinalTotal_tela}</td><td></td>";
    echo "</tr>";
    echo "</table>";
  }
 ?>
