<!DOCTYPE html>
<?php
include_once "conf/default.inc.php";
require_once "conf/Conexao.php";
$pdo = Conexao::getInstance();
 ?>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table border="1px">
      <tr>
        <th>Código</th>
        <th>Descrição</th>
        <th>Alterar</th>
      </tr>
      <?php
      $sql = $pdo->query("SELECT * from marca;");
      while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <tr>
          <td><?php echo $linha['codigo']; ?></td>
          <td><?php echo $linha['descricao']; ?></td>
          <td> <a href="alterar.php?acao=editar&codigo=<?php echo $linha['codigo']; ?>">Alterar</a> </td>
        </tr>
        <?php
      }
      ?>
    </table>
  </body>
</html>
