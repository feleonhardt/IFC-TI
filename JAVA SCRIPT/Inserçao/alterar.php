<!DOCTYPE html>
<?php
include("index_acao.php");
$acao = isset($_GET['acao']) ? $_GET['acao'] : "";
if ($acao == 'editar') {
  $codigo = isset($_GET['codigo']) ? $_GET['codigo'] : "";
  $dados = buscarDados($codigo);
}
 ?>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="alterar_acao.php" method="post">
      Código:
      <input type="text" name="codigo" value="<?php echo $dados['codigo']; ?>"><br>
      Descrição:
      <input type="text" name="descricao" value="<?php echo $dados['descricao']; ?>"><br>
      <button type="submit" name="acao" value="editar">ALTERAR</button>
    </form>
  </body>
</html>
