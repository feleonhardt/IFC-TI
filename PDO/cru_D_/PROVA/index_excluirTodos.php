<?php
// include("conexao.php");
// $acao = isset($_GET['acao']) ? $_GET['acao'] : '';
// $codigo = isset($_GET['codigo']) ? $_GET['codigo'] : '';
$opcao = isset($_GET['opcao']) ? $_GET['opcao'] : '';

// if ($acao == 'excluir') {
//   if ($codigo != '') {
//     if ($codigo >= 0) {
//       $excluir = $pdo->query("DELETE FROM consultas where codigo = {$codigo};");
//     }
//   }
// }elseif ($acao == 'todos' and $opcao=='SUS' or $opcao=='PLANO DE SAUDE' or $opcao=='PARTICULAR' or $opcao=='SOCIAL') {
//   $excluir = $pdo->query("DELETE FROM consultas where tipo = '{$opcao}';");
// }
//
// header("location:index.php");

echo $opcao;



 ?>
