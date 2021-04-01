<?php
  $cod = isset($_POST['num']) ? $_POST['num'] : 0;
  $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
  $fone = isset($_POST['fone']) ? $_POST['fone'] : '';

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      Código:<input type="number" name="num" value="" maxlength="3" min="3"><br>
      Nome:<input type="text" name="nome" value=""><br>
      Telefone:<input type="text" name="fone" value=""><br>
      <input type="submit" name="" value="enviar">
    </form>
  </body>
</html>

<?php
$vetor_codigo = array();
$abrir_codigo = file_get_contents('codigo.json');
$json_abrir_codigo = json_decode($abrir_codigo);
foreach ($json_abrir_codigo as $value) {array_push($vetor_codigo, $value);}
if ($cod != '') {array_push($vetor_codigo, $cod);}
$dados_json_codigo = json_encode($vetor_codigo);
$fp_codigo = fopen("codigo.json", "w");
fwrite($fp_codigo, $dados_json_codigo);
fclose($fp_codigo);
$arquivo_cod = file_get_contents('codigo.json');
$json_cod = json_decode($arquivo_cod);
foreach ($json_cod as $value) {echo $value."<br>";}





$vetor_nome = array();
$abrir_nome = file_get_contents('nomes.json');
$json_abrir_nome = json_decode($abrir_nome);
foreach ($json_abrir_nome as $value) {array_push($vetor_nome, $value);}
if ($cod != '') {array_push($vetor_nome, $nome);}
$dados_json_nome = json_encode($vetor_nome);
$fp_nome = fopen("nomes.json", "w");
fwrite($fp_nome, $dados_json_nome);
fclose($fp_nome);
$arquivo_name = file_get_contents('nomes.json');
$json_name = json_decode($arquivo_name);
foreach ($json_name as $value) {echo $value."<br>";}




$vetor_telefone = array();
$abrir_telefone = file_get_contents('telefones.json');
$json_abrir_telefone = json_decode($abrir_telefone);
foreach ($json_abrir_telefone as $value) {array_push($vetor_telefone, $value);}
if ($cod != '') {array_push($vetor_telefone, $fone);}
$dados_json_telefone = json_encode($vetor_telefone);
$fp_telefone = fopen("telefones.json", "w");
fwrite($fp_telefone, $dados_json_telefone);
fclose($fp_telefone);
$arquivo_fone = file_get_contents('telefones.json');
$json_fone = json_decode($arquivo_fone);
foreach ($json_fone as $value) {
  echo $value."<br>";
}

for ($i=0; $i < count($json_cod) ; $i++) {
  echo "<br> cod: ".$json_cod[$i]." | nome: ".$json_name[$i]." | tel: ".$json_fone[$i];
}
?>
