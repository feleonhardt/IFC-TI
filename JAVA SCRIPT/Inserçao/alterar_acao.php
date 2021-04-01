<?php
include_once "conf/default.inc.php";
require_once "conf/Conexao.php";

$acao = isset($_POST['acao']) ? $_POST['acao'] : "";

if ($acao == 'editar') {
  $codigo = isset($_POST['codigo']) ? $_POST['codigo'] : "";
  $descricao = isset($_POST['descricao']) ? $_POST['descricao'] : "";
  if ($codigo != '' and $descricao != '') {
    $pdo = Conexao::getInstance();
    // echo $codigo." ".$descricao;
    $sql = $pdo->query("UPDATE marca SET descricao = '{$descricao}' where codigo = {$codigo};");
    $sql->execute();
  }
}


header("location: index.php");

 ?>
