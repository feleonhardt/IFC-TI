<?php
  include_once "assets/conf/default.inc.php";
  require_once "assets/conf/Conexao.php";
  $pdo = Conexao::getInstance();
  $excluir = isset($_GET['excluir']) ? $_GET['excluir'] : null;
  if ($excluir != null) {
    $exclusao = $pdo->query("DELETE from vendas.marca where codigo = {$excluir};");
    $exclusao->execute();
  }
  header('location:index.php');
 ?>
