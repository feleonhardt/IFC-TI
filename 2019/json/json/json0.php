<?php
  $cod = isset($_POST['num']) ? $_POST['num'] : 0;
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      Código:<input type="number" name="num" value="" maxlength="3" required><br>
      <input type="submit" name="" value="enviar">
    </form>
  </body>
</html>



<?php

$vetor_valores = array();
$abrir_arquivo = file_get_contents('valores.json');

// Decodifica o formato JSON e retorna um Objeto
$json_abrir = json_decode($abrir_arquivo);

// Loop para percorrer o Objeto
foreach ($json_abrir as $value) {
    array_push($vetor_valores, $value);
}
if ($cod != '') {
  array_push($vetor_valores, $cod);
}
// Array com dados
//$vetor_valores = array(1,4,7,9,2,5,0,3,8,2,1);

// Tranforma o array $dados em JSON
$dados_json = json_encode($vetor_valores);

/* Cria o arquivo valores.jsonagenda-bs/index.php
‘w’ : Cria o arquivo e escreve os dados,
      se o arquivo já existir será substituído pelo novo;
‘a’ : Cria o arquivo e escreve os dados,{"codigo":"003","nome":"Maria","telefone":"013 3434-4444"}
      se o arquivo já existir 1,4,7,9,2,5,0);os dados novos serão
      adicionados ao arquivo existente;
‘r’ : Abre o arquivo que já existe para leitura,
      e somente leitura;
*/
$fp = fopen("valores.json", "w");

// Escreve o conteúdo JSON no arquivo
fwrite($fp, $dados_json);

// Fecha o arquivo
fclose($fp);

// Atribui o conteúdo do arquivo para variável $arquivo
$arquivo = file_get_contents('valores.json');

// Decodifica o formato JSON e retorna um Objeto
$json = json_decode($arquivo);

// Loop para percorrer o Objeto
foreach ($json as $value) {
    echo $value."<br>";
}
?>
