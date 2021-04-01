<?php
  $busca = isset($_POST['busca']) ? $_POST['busca'] : null;
 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <form action="" method="post">
      <input type="text" name="busca" value="">
      <input type="submit" name="" value="BUSCAR">
    </form>
    <?php
      try {
        $HOST = "localhost";
        $BANCO = "vendas";
        $USUARIO = "root";
        $SENHA = "";

        $PDO = new PDO("mysql:host=".$HOST.";dbname=".$BANCO.";charset=utf8", $USUARIO, $SENHA);
        $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $consulta = $PDO->query("SELECT * FROM marca where descricao like '$busca%' order by descricao;");

      } catch (PDOException $erro) {
        echo "Erro de econexão, detalhes: ".$erro->getMessage();
        // echo "conexao_erro";
      }

    ?>
    <br>
    <table border="1px">
      <tr>
        <td>Código</td>
        <td>Descrição</td>
      </tr>
      <?php
      while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr><td>{$linha['codigo']}</td><td>{$linha['descricao']}</td></tr>";
      }
       ?>
    </table>
  </body>
</html>
