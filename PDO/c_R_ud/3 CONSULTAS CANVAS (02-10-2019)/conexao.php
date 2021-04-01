<?php
try {
  $HOST = "localhost";
  $BANCO = "exercicio_alunos";
  $USUARIO = "root";
  $SENHA = "";

  $PDO = new PDO("mysql:host=".$HOST.";dbname=".$BANCO.";charset=utf8", $USUARIO, $SENHA);
  $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $erro) {
  echo "Erro de econexão, detalhes: ".$erro->getMessage();
  // echo "conexao_erro";
}

 ?>
