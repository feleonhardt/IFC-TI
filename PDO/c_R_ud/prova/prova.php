<?php
  try {
    $pdo = new PDO('mysql:host=localhost;dbname=prova', "root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $consulta = $pdo->query("SELECT * FROM produto;");
    echo '<table border=1>';
    echo '<tr><td>Codigo</td><td>Descrição</td>
              <td>Data Venda</td><td>Valor</td>
              <td>Quantidade</td><td>Valor Item</td></tr>';
    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
      $v = $linha['valor'];
      $q = $linha['quantidade'];
      $total = $v * $q;
      
      echo "<tr ><td>{$linha['codigo']}</td> 
                <td>{$linha['descricao']}</td>
                <td>{$linha['dataVenda']}</td>
                <td>{$linha['valor']}</td>
                <td>{$linha['quantidade']}</td> 
                <td>$total</td></tr>";
    }
    $consulta = $pdo->query("SELECT sum(valor * quantidade) as valorTotal FROM produto;");
    $valorTotal = $consulta->fetch(PDO::FETCH_ASSOC);

    $consulta = $pdo->query("SELECT sum(quantidade) as totalQuantidade FROM prova.produto;");
    $totalQuantidade = $consulta->fetch(PDO::FETCH_ASSOC);
    echo '<tr><td></td><td></td>
              <td></td><td></td>
              <td>'.$totalQuantidade['totalQuantidade'].'</td><td>'.$valorTotal['valorTotal'].'</td></tr>';
    echo '</table>';
  } catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }
?>
