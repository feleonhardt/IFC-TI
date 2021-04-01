<?php
include_once "conf/default.inc.php";
require_once "conf/Conexao.php";
$pdo = Conexao::getInstance();

if (empty($_POST['usuario']) or empty($_POST['senha'])) {
  header("location: index.php");
  exit();
}

$sql = $pdo->query("SELECT * from usuarios where nome_usuario = '{$_POST['usuario']}' and senha = '{$_POST['senha']}'");
// $sql->bindParam(':usuario', $_POST['usuario']);
// $sql->bindParam(':senha', $_POST['senha']);
// $sql->execute();

while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
  echo $linha['email'];
}
 ?>
