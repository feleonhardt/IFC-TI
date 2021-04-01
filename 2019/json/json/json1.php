<?php
// Array com dados
$cliente1 = array(
    'codigo'   => '001',
    'nome'     => 'William',
    'telefone' => '012 9999-6352'
);

$cliente2 = array(
    'codigo'   => '002',
    'nome'     => 'Adriano',
    'telefone' => '012 8888-4452'
);

$cliente3 = array(
    'codigo'   => '003',
    'nome'     => 'Maria',
    'telefone' => '013 3434-4444'
);

// Atribui os 3 arrays para apenas um array
$dados = array($cliente1, $cliente2, $cliente3);

// Tranforma o array $dados em JSON
$dados_json = json_encode($dados);

/* Cria o arquivo valores.json
‘w’ : Cria o arquivo e escreve os dados,
      se o arquivo já existir será substituído pelo novo;
‘a’ : Cria o arquivo e escreve os dados,
      se o arquivo já existir os dados novos serão
      adicionados ao arquivo existente;
‘r’ : Abre o arquivo que já existe para leitura,
      e somente leitura;
*/
$fp = fopen("cadastro.json", "w");

// Escreve o conteúdo JSON no arquivo
fwrite($fp, $dados_json);

// Fecha o arquivo
fclose($fp);

// Atribui o conteúdo do arquivo para variável $arquivo
$arquivo = file_get_contents('cadastro.json');

// Decodifica o formato JSON e retorna um Objeto
$json = json_decode($arquivo);

// Loop para percorrer o Objeto
foreach ($json as $key) {
    echo $key->codigo." | ".$key->nome." | ".$key->telefone."<br>";
}
?>
