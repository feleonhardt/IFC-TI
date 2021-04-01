<?php
try {
  $host="localhost";
  $banco="teste_cadastro";
  $usuario="root";
  $senha="";

  $pdo = new pdo("mysql:host=".$host.";dbname=".$banco.";charset=utf8",$usuario,$senha);
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $erro) {
  echo "Erro: ".$erro->getMessage();
}

 ?>
