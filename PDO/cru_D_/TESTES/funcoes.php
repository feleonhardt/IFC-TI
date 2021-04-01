
<?php

$busca = isset($_POST['busca']) ? $_POST['busca'] : null;

if ($busca != null) {
  $consulta = $pdo->query("SELECT * FROM marca where codigo = {$busca} order by codigo;");
}else {
  $consulta = $pdo->query("SELECT * from marca;");
}




function tabela($conexao){
  echo "<table border='1px'>";
    echo "<tr><th>Código</th><th>Descrição</th><th>Ação</th></tr>";
    $count = 0;
    while ($linha = $conexao->fetch(PDO::FETCH_ASSOC)) {
      echo "<tr><td>{$linha['codigo']}</td><td>{$linha['descricao']}</td><td>";
      ?>
      <a href="javascript:excluir('index_acao.php?excluir=
      <?php echo $linha['codigo']; ?>
      ')">Excluir</a>
      <?php
      echo "</td></tr>";
      $count++;
    }
    if ($count==0) {
      echo "<tr><td colspan='3'>Nenhum registro!</td></tr>";
    }
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
