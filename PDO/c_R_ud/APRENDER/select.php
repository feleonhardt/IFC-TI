<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <form action="" method="post">
        <?php
          try {
            $HOST = "localhost";
            $BANCO = "vendas";
            $USUARIO = "root";
            $SENHA = "";

            $PDO = new PDO("mysql:host=".$HOST.";dbname=".$BANCO.";charset=utf8", $USUARIO, $SENHA);
            $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $consulta = $PDO->query("SELECT * FROM marca;");
            echo "<select name='marca'>";
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
              echo "<option value='{$linha['codigo']}'>".strtoupper($linha['descricao'])."</option>";
            }
            echo "</select>";
          } catch (PDOException $erro) {
            echo "Erro de econexão, detalhes: ".$erro->getMessage();
            // echo "conexao_erro";
          }

        ?>
    </form>
  </body>
</html>
