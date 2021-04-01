<?php
include_once "assets/conf/default.inc.php";
require_once "assets/conf/Conexao.php";
$pdo = Conexao::getInstance();
$excluir = isset($_GET['excluir']) ? $_GET['excluir'] : null;
if ($excluir != null) {
  if ($excluir == 'checkin') {
    $exclusao = $pdo->query("DELETE from passagens where checkin = 0;");
    $exclusao->execute();
  }else {
    $exclusao = $pdo->query("DELETE from passagens where codigo = {$excluir};");
    $exclusao->execute();
  }
}
header('location:index.php');
 ?>
