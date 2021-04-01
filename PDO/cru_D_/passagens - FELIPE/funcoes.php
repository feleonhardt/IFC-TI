<?php
$esc = isset($_POST['esc']) ? $_POST['esc'] : null;
$inicial = isset($_POST['inicial']) ? $_POST['inicial'] : null;
$final = isset($_POST['final']) ? $_POST['final'] : null;
$checkin = isset($_POST['checkin']) ? $_POST['checkin'] : null;
$limpar = isset($_POST['limpar']) ? $_POST['limpar'] : null;

if ($limpar==true) {
  $esc=null;
  $inicial = null;
  $final = null;
  $checkin = null;
}


if ($esc == "LOCAL") {
  if ($inicial!=null and $final != null) {
    $consulta = $pdo->query("SELECT * from passagens where origem like '{$inicial}%' and destino like '{$final}%' order by codigo;");
  }elseif ($inicial!=null) {
    $consulta = $pdo->query("SELECT * from passagens where origem like '{$inicial}%' order by codigo;");
  }elseif ($final != null) {
    $consulta = $pdo->query("SELECT * from passagens where destino like '{$final}%' order by codigo;");
  }else {
    $consulta = $pdo->query("SELECT * FROM passagens;");
  }
}elseif ($esc == "DATA") {
  if ($inicial!=null and $final != null) {
    $data_inicial = explode('/',$inicial);
    $inicio = $data_inicial[2]."-".$data_inicial[1]."-".$data_inicial[0];
    $data_final = explode('/',$final);
    $fim = $data_final[2]."-".$data_final[1]."-".$data_final[0];
    $consulta = $pdo->query("SELECT * from passagens where data>= '{$inicio}' and data<= '{$fim}' order by data;");
  }elseif ($inicial != null) {
    $data_inicial = explode('/',$inicial);
    $inicio = $data_inicial[2]."-".$data_inicial[1]."-".$data_inicial[0];
    $consulta = $pdo->query("SELECT * from passagens where data>= '{$inicio}' order by data;");
  }elseif ($final != null) {
    $data_final = explode('/',$final);
    $fim = $data_final[2]."-".$data_final[1]."-".$data_final[0];
    $consulta = $pdo->query("SELECT * from passagens where data<= '{$fim}' order by data;");
  }else {
    $consulta = $pdo->query("SELECT * from passagens order by data;");
  }
}elseif ($esc == "VALOR") {
  if ($inicial!=null and $final != null) {
    $consulta = $pdo->query("SELECT * from passagens where valor>= {$inicial} and valor<= {$final} order by valor;");
  }
}elseif ($esc == "CHECK") {
  if ($checkin=='NAO') {
    $valor = 0;
  }else {
    $valor = 1;
  }
  $consulta = $pdo->query("SELECT * from passagens where checkin = {$valor} order by codigo;");
}else {
  $consulta = $pdo->query("SELECT * FROM passagens;");
}

function tabela($consulta){
  echo "<table border='1px'>";
  echo "<tr>";
  $field = $GLOBALS['pdo']->query("SHOW COLUMNS FROM passagens;");
  $campos = array();
  while ($linha = $field->fetch(PDO::FETCH_ASSOC)) {
    echo "<th>{$linha['Field']}</th>";
    $campos[] = $linha['Field'];
  }
  echo "<th>Ação</th>";
  echo "</tr>";
  $soma = 0;
  $cont = 0;
  while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {

    echo "<tr";
    if ($cont%2==0) {
      echo " class='cinza'";
    }
    if ($linha['checkin']==0) {
      echo " style='color: red; font-style: italic;'";
    }
    echo ">";
    echo "<td>{$linha['codigo']}</td><td>{$linha['passageiro']}</td><td>{$linha['poltrona']}</td>";
    $data = explode('-',$linha['data']);
    $data_tela = $data[2]."/".$data[1]."/".$data[0];
    // var_dump($data);
    echo "<td>{$data_tela}</td>";
    echo "<td>{$linha['origem']}</td><td>{$linha['destino']}</td><td>R$ ".number_format($linha['valor'],2,',','.')."</td>";
      // for ($i=0; $i < (count($campos)-1) ; $i++) {
      //   echo "<td>{$linha[$campos[$i]]}</td>";
      // }

      echo "<td>";
        if ($linha['checkin'] == 1) {
          echo "sim";
        }else {
          echo "não";
        }
      echo "</td>";

      $soma += $linha['valor'];
      $cont++;
      ?>
      <td>
        <a href="javascript:excluir('index_acao.php?excluir=<?php echo $linha['codigo']; ?>')">Excluir</a>
      </td>
      <?php
    echo "</tr>";
  }
  echo "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td>R$ ".number_format($soma,2,',','.')."</td><td></td><td></td></tr>";
  echo "</table>";
}




 ?>
 <script>
  function excluir(url) {
      if(confirm("Confirmar exclusão?")){
        location.href=url;
      }
  }
 </script>
