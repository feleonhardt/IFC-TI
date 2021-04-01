<!DOCTYPE html>
<?php
    $acao = isset($_GET['acao']) ? $_GET['acao']:'';
    if($acao=='alterar'){
        $cod = isset($_GET['cod']) ? $_GET['cod']:-1;
        if ($cod!=-1) {
            $cod = integer($cod);
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
              $result = $PDO->query("SELECT * FROM autores WHERE codAutor = ".$cod.";");
    
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
        }
    }

?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
</head>
<body>
    
</body>
</html>