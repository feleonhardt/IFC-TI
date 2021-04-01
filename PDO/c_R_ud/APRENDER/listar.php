<?php
  try {
    $HOST = "localhost";
    $BANCO = "vendas";
    $USUARIO = "root";
    $SENHA = "";

    $PDO = new PDO("mysql:host=".$HOST.";dbname=".$BANCO.";charset=utf8", $USUARIO, $SENHA);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $consulta = $PDO->query("SELECT * FROM marca;");

    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
      echo "Código: {$linha['codigo']} - Descrição: {$linha['descricao']}<br />";
    }

    // while ($linha = $consulta->fetch()) {
    //   echo "Código: {$linha[0]} - Descrição: {$linha[1]}<br />";
    // }
  } catch (PDOException $erro) {
    echo "Erro de econexão, detalhes: ".$erro->getMessage();
    // echo "conexao_erro";
  }

?>
