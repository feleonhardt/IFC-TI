<?php
include_once "conf/default.inc.php";
require_once "conf/Conexao.php";

// $acao = isset($_GET['acao']) ? $_GET['acao'] : "";
// if ($acao == 'editar') {
//   $codigo = isset($_GET['codigo']) ? $_GET['codigo'] : "";
//   buscarDados($codigo);
// }
function buscarDados($codigo) {
  $pdo = Conexao::getInstance();
  $sql = $pdo->query("SELECT * from marca where codigo = {$codigo};");
  $dados = array();
  while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
    // echo "Código: {$linha['codigo']} | Descricao: {$linha['descricao']}";
    $dados['codigo'] = $linha['codigo'];
    $dados['descricao'] = $linha['descricao'];

  }
  // var_dump($dados);
  return $dados;
  // header("location: alterar.php?acao=alterar&codigo={$dados['codigo']}&descricao={$dados['descricao']}");
}
// else {
//   header("location: index.php");
// }


 ?>
