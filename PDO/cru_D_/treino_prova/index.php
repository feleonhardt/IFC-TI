<!DOCTYPE html>
<?php
  include("conexao.php");
 ?>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo "<table border='1px'>";
    echo "<tr>";
    echo "<th>codigo</th><th>passageiro</th><th>poltrona</th><th>data</th><th>origem</th><th>destino</th><th>valor</th><th>checkin</th>";
    echo "</tr>";
    $consulta = $pdo->query("SELECT * from passagens;");
    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
      echo "<tr>";
      echo "<td>{$linha['codigo']}</td><td>{$linha['passageiro']}</td>";
      echo "</tr>";
    }

    echo "</table>";

     ?>
  </body>
</html>
