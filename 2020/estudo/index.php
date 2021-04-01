<?php
try {
    $HOST = "localhost";
    $BANCO = "publicacoes";
    $USUARIO = "root";
    $SENHA = "";

    $PDO = new PDO("mysql:host=".$HOST.";dbname=".$BANCO.";charset=utf8", $USUARIO, $SENHA);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  } catch (PDOException $erro) {
    echo "Erro de econexão, detalhes: ".$erro->getMessage();
    // echo "conexao_erro";
  }

  ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo</title>
</head>
<body>
        <form action="index_acao.php" method="POST">
            Nome: <input type="text" name="nome"><br>
            Data Nascimento: <input type="date" name="data"><br>
            <input type="hidden" name="acao" value="adicionar">
            <input type="submit">
        </form>
<br><br>
    <?php
        $result = $PDO->query("SELECT * FROM autores;");
    
        echo "<table border=1>";
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                    echo "<td>".$row['codAutor']."</td>";
                    echo "<td>".$row['nome']."</td>";
                    echo "<td>".$row['dataNasc']."</td>";
                    echo "<td>";
                    ?>
                    <a href="javascript:excluir('index_acao.php?acao=excluir&excluir=
                    <?php echo $row['codAutor']; ?>
                    ')">Excluir</a>
                    <?php
                    echo "</td>";
                    echo "<td>";
                    ?>
                    <a href="altera.php?acao=alterar&cod=
                    <?php echo $row['codAutor']; ?>
                    ')">Alterar</a>
                    <?php
                    echo "</td>";
                echo "</tr>";
            }
        echo "</table>";
    ?>
</body>
<script>
 function excluir(url) {
     if(confirm("Confirmar exclusão?")){
       location.href=url;
     }
 }
</script>
</html>