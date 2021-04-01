<?php
  try {
    $pdo = new PDO('mysql:host=localhost;dbname=prova', "root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $consulta = $pdo->query("SELECT *, valor * quantidade as valorItem 
                             FROM produto;");

    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
      echo "Código: {$linha['codigo']} - 
            Descrição: {$linha['descricao']} - 
            Data Venda :{$linha['dataVenda']} - 
            Valor Unitário :{$linha['valor']} - 
            Quantidade :{$linha['quantidade']} - 
            Valor Item :{$linha['valorItem']}
            <br />";
    }
  } catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }
?>
