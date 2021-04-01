
<?php

$arquivo = file_get_contents('table.json');
$tabela = json_decode($arquivo);

$busca = isset($_POST['busca']) ? $_POST['busca'] : null;
$esc = isset($_POST['esc']) ? $_POST['esc'] : null;
if (isset($_POST['limpar'])) {
  $busca = null;
  $esc = null;
}

if ($esc == "COD" and $busca != null){
  $consulta = $pdo->query("SELECT * FROM {$tabela} where codigo = {$busca} order by codigo;");
}elseif ($esc == "COD" and $busca == null){
  $consulta = $pdo->query("SELECT * FROM {$tabela} order by codigo;");
}elseif ($esc == "NOM") {
  $consulta = $pdo->query("SELECT * FROM {$tabela} where nome like '{$busca}%' order by nome;");
}elseif ($esc == "SIG") {
  $consulta = $pdo->query("SELECT * FROM {$tabela} where sigla like '{$busca}%' order by sigla;");
}elseif ($esc == "EMA") {
  $consulta = $pdo->query("SELECT * FROM {$tabela} where email like '{$busca}%' order by email;");
}elseif ($esc == "LOG") {
  $consulta = $pdo->query("SELECT * FROM {$tabela} where login like '{$busca}%' order by login;");
}elseif ($esc == "TIM") {
  $consulta = $pdo->query("SELECT * FROM {$tabela} where time like '{$busca}%' order by time;");
}elseif ($esc == "GOL" and $busca != null) {
  $consulta = $pdo->query("SELECT * FROM {$tabela} where gol <= '{$busca}' order by gol;");
}elseif ($esc == "GOL" and $busca == null) {
  $consulta = $pdo->query("SELECT * FROM {$tabela} order by gol;");
}elseif ($esc == "TOR" and $busca != null) {
  $consulta = $pdo->query("SELECT * FROM {$tabela} where torcedores <= '{$busca}' order by torcedores;");
}elseif ($esc == "TOR" and $busca == null) {
  $consulta = $pdo->query("SELECT * FROM {$tabela} order by torcedores;");
}else {
  $consulta = $pdo->query("SELECT * from {$tabela};");
}




function tabela($conexao, $tabela){
  echo "<table border='1px'>";
    $field = $GLOBALS['pdo']->query("SHOW COLUMNS FROM {$tabela};");
    echo "<tr>";
    $colunas = array();
    while ($linha = $field->fetch(PDO::FETCH_ASSOC)) {
      echo "<th>{$linha['Field']}</th>";
      $colunas[] = $linha['Field'];
    }
    echo "<th>Ação</th>";
    echo "</tr>";
    $count = 0;
    while ($linha = $conexao->fetch(PDO::FETCH_ASSOC)) {
      echo "<tr>";
      for ($i=0; $i < count($colunas) ; $i++) {
        echo "<td>{$linha[$colunas[$i]]}</td>";
      }
      echo "<td>";
      ?>
      <a href="javascript:excluir('tabela_acao.php?tabela=
      <?php echo $tabela; ?>
      &excluir=
      <?php echo $linha['codigo']; ?>
      ')">Excluir</a>
      <?php
      echo "</td></tr>";
      $count++;
    }
    if ($count==0) {
      echo "<tr><td colspan='4'>Nenhum registro!</td></tr>";
    }
    echo "</table>";
}
function opcoes($tabela, $esc){
  if ($tabela=='estados') {
    echo "<input type='radio' name='esc' value='COD'";
    if ($esc == 'COD') {
      echo " checked";
    }
    echo "> Código (=) |";
    echo "<input type='radio' name='esc' value='NOM'";
    if ($esc == 'NOM') {
      echo " checked";
    }
    echo "> Nome (like) |";
    echo "<input type='radio' name='esc' value='SIG'";
    if ($esc == 'SIG') {
      echo " checked";
    }
    echo "> Sigla (like)";
  }elseif ($tabela=='clientes') {
    echo "<input type='radio' name='esc' value='COD'";
    if ($esc == 'COD') {
      echo " checked";
    }
    echo "> Código (=) |";
    echo "<input type='radio' name='esc' value='NOM'";
    if ($esc == 'NOM') {
      echo " checked";
    }
    echo "> Nome (like) |";
    echo "<input type='radio' name='esc' value='EMA'";
    if ($esc == 'EMA') {
      echo " checked";
    }
    echo "> E-mail (like)";
  }elseif ($tabela=='vendedores') {
    echo "<input type='radio' name='esc' value='COD'";
    if ($esc == 'COD') {
      echo " checked";
    }
    echo "> Código (=) |";
    echo "<input type='radio' name='esc' value='NOM'";
    if ($esc == 'NOM') {
      echo " checked";
    }
    echo "> Nome (like) |";
    echo "<input type='radio' name='esc' value='LOG'";
    if ($esc == 'LOG') {
      echo " checked";
    }
    echo "> Login (like)";
  }elseif ($tabela=='jogadores') {
    echo "<input type='radio' name='esc' value='COD'";
    if ($esc == 'COD') {
      echo " checked";
    }
    echo "> Código (=) |";
    echo "<input type='radio' name='esc' value='TIM'";
    if ($esc == 'TIM') {
      echo " checked";
    }
    echo "> Time (like) |";
    echo "<input type='radio' name='esc' value='GOL'";
    if ($esc == 'GOL') {
      echo " checked";
    }
    echo "> Gols (<=)";
  }elseif ($tabela=='times') {
    echo "<input type='radio' name='esc' value='COD'";
    if ($esc == 'COD') {
      echo " checked";
    }
    echo "> Código (=) |";
    echo "<input type='radio' name='esc' value='NOM'";
    if ($esc == 'NOM') {
      echo " checked";
    }
    echo "> Nome (like) |";
    echo "<input type='radio' name='esc' value='TOR'";
    if ($esc == 'TOR') {
      echo " checked";
    }
    echo "> Torcedores (<=)";
  }
}



 ?>
 <script>
  function excluir(url) {
      if(confirm("Confirmar exclusão?")){
        location.href=url;
      }
  }
 </script>
