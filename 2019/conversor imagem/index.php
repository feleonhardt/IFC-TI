<?php
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$linhas = isset($_POST['linhas']) ? $_POST['linhas'] : 0;
$colunas = isset($_POST['colunas']) ? $_POST['colunas'] : 0;
$max = isset($_POST['max']) ? $_POST['max'] : 0;
$code = isset($_POST['code']) ? $_POST['code'] : '';


 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="" method="post">
      <input type="text" name="nome" value="" placeholder="Nome do arquivo Ex.: 'fepp'">
      <input type="number" name="linhas" value="" placeholder="Linhas">
      <input type="number" name="colunas" value="" placeholder="Colunas">
      <input type="number" name="max" value="" placeholder="Valor máximo">
      <textarea name="code" rows="8" cols="80"></textarea>
      <input type="submit" name="" value="enviar">
    </form>
  </body>
</html>
<?php
var_dump($code);
  $vetor = explode(' ', $code);


  var_dump($vetor);


 ?>
