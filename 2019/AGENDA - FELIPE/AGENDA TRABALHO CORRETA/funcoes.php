<?php
$pesquisa = isset($_POST['pesquisa']) ? $_POST['pesquisa'] : '';

$salva = isset($_POST['salva']) ? $_POST['salva'] : '';

$altera = isset($_POST['altera']) ? $_POST['altera'] : '';

// Se o select 'dominios' tiver valor e este ser diferente de 'ok', passa o value da opcao selecionada para a variavel 'pesquisar'
if (isset($_POST['dominios'])) {
  if ($_POST['dominios'] != "ok") {
    $pesquisa = $_POST['dominios'];
  }
}

// Se o select 'meses' tiver valor e este ser diferente de 'ok', passa o value da opcao selecionada para a variavel 'pesquisar'
if (isset($_POST['meses'])){
  if ($_POST['meses'] != "ok") {
    $pesquisa = $_POST['meses'];
  }
}

$campo_pesquisa = isset($_POST['campo_pesquisa']) ? $_POST['campo_pesquisa'] : '';

// Se 'apagar' possuir valor e este ser diferente de '', a variavel 'salva' recebe o valor '-99'
if (isset($_POST['apagar'])) {
  if ($_POST['apagar'] != '') {
    $salva = -99;
  }
}

// Se 'salvar' possuir valor diferente de '', a variavel 'pesquisa' recebe o valor ''
if ($salva != '') {
  $campo_pesquisa = '';
}

// Se apagar tiver valor, chama a funcao 'excluir'
if (isset($_POST['apagar'])) {
  excluir($_POST['apagar']);
}

// Se o input 'add_nome' estiver preenchido, chama a funcao 'adicionarContato'
if (isset($_POST['add_nome'])) {
  adicionaContato(strtoupper($_POST['add_nome']), $_POST['add_fone'], strtolower($_POST['add_email']), $_POST['add_nascimento']);
}

// Se 'salva' possuir valor e este ser diferente de '-99'(button limpar), chama a funcao 'salvaAlteracao'
if ($salva != '' and $salva != -99) {
  salvaAlteracao($_POST['salva'], strtoupper($_POST['novo_nome']), strtolower($_POST['novo_email']), $_POST['novo_telefone'], $_POST['novo_nascimento']);
}

// Informa os meses do ano em um vetor
$vetor_meses = array(
  'Janeiro',
  'Fevereiro',
  'Março',
  'Abril',
  'Maio',
  'Junho',
  'Julho',
  'Agosto',
  'Setembro',
  'Outubro',
  'Novembro',
  'Dezembro'
);

// Inicializa a variavel 'resultados' como '0' para ser utilizada em um contador
$resultados = 0;

// Realiza a apresentacao da tabela por meio da funcao 'alterar' ou 'apresentarTabela'
function tabela(){
  if (isset($_POST['altera'])) {
    alterar($_POST['altera']);
  }else {
    apresentarTabela();
  }
}

// Obtem o valor do Json para ser usado durante as execucoes
function obtemValorDoJson(){
  $arquivo = file_get_contents('contatos_agenda.json');
  $json = json_decode($arquivo);
  return $json;
}

// Adiciona um novo contato
function adicionaContato($nome, $fone, $email, $nascimento){
  $json = obtemValorDoJson();
  $data = explode('-',$nascimento);
  $nascimento = $data[2].'/'.$data[1].'/'.$data[0];
  if ($json != null){
    $cod= $json[(count($json)-1)]->codigo;
    $cod++;
  }else {
    $cod=0;
  }
  $cliente = array(
      'codigo'     => $cod,
      'nome'       => $nome,
      'telefone'  => $fone,
      'email'      => $email,
      'nascimento' => $nascimento
  );
  if ($json != null){
    array_push($json, $cliente);
  }else{
    $json[0] = $cliente;
  }
  enviaParaJson($json);
}

// Envia o vetor que recebe no parametro para o json
function enviaParaJson($json){
  $dados_json = json_encode($json);
  $fp = fopen("contatos_agenda.json", "w");
  $escreve = fwrite($fp, $dados_json);
  fclose($fp);
}

// Chama as funcoes utilizadas para excluir um contato
function excluir($apagar){
  $json = obtemValorDoJson();
  $json = retiraNull($json, $apagar);
  $json = ordenaCodigoContatos($json);
  enviaParaJson($json);
}

// Apos a exclusao de um contato, faz a reordenacao do codigo de cada cadastro
function ordenaCodigoContatos($vet){
  for ($i=0; $i < count($vet); $i++) {
    $vet[$i]->codigo = $i;
  }
  return $vet;
}

// Retira o cadastro da posicao recebida e deixa a posicao com o valor 'null'
function retiraNull($vetor, $apaga){
  $vetor_limpo = array();
  for ($i=0; $i < count($vetor) ; $i++) {
    if ($i != $apaga){
        array_push($vetor_limpo, $vetor[$i]);
    }
  }
  return $vetor_limpo;
}

// Chama as funcoes nescessarias para a apresentacao da tabela
function apresentarTabela(){
  $json = obtemValorDoJson();
  escreveHeadDaTabela();
  for ($i=0; $i < count($json) ; $i++) {
    escreveLinhaNaTabela($json, $i);
  }
  fechaTabela();
}

// Escreve a tabela e na linha que o botão 'alterar' foi pressionado, coloca os valores em input's para serem editados
function alterar($altera){
  $json = obtemValorDoJson();
  escreveHeadDaTabela();
  for ($i=0; $i < count($json) ; $i++) {
    if ($i == $altera) {
      echo "<tr style='background-color: white !important;' >";
        echo "<td><input type='text' style='text-align:center;' size='22' id='novo_nome' name='novo_nome' value='".$json[$i]->nome."' class='validate' required></td>";
        echo "<td><input type='tel'  style='text-align:center;' size='15' id='novo_telefone' name='novo_telefone' value='".$json[$i]->telefone."' class='validate' maxlength='16' pattern='\([0-9]{2}\)[\s][0-9]{1}[\s][0-9]{4}-[0-9]{4}' onkeypress='mascara(this)' placeholder='(xx) x xxxx-xxxx'  required></td>";
        echo "<td><input type='email'  style='text-align:center;' size='22' name='novo_email' value='".$json[$i]->email."' class='validate' required></td>";
        echo "<td><input type='date' style='text-align:center;' name='novo_nascimento' value='";
        $data = explode('/',$json[$i]->nascimento);
        $nascimento = $data[2].'-'.$data[1].'-'.$data[0];
        echo $nascimento;
        echo "' class='validate' required></td>";
        echo "<td><button class='waves-effect waves-blue-grey btn deep-orange darken-1' name='cancelar' id='cancelar' value=''><i class='material-icons'>close</i></button> <button class='waves-effect waves-blue-grey btn deep-orange darken-1' id='salva' name='salva' value='".$i."'><i class='material-icons'>done</i></button></td>";
      echo "</tr>";
    }else {
      escreveLinhaNaTabela($json, $i);
    }
  }
  fechaTabela();
}

// Escreve o cabecalho da tabela
function escreveHeadDaTabela(){
  echo "<table border='1' id='tabela' class='highlight responsive-table'>";
    echo "<thead>";
      echo "<tr>";
        echo "<th width='25%'>Nome</th>";
        echo "<th width='14%'>Telefone</th>";
        echo "<th width='24%'>E-mail</th>";
        echo "<th width='19%'>Nascimento</th>";
        echo "<th>Ação</th>";
      echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
}

// Escreve cada a linha na tabela com os valores da posicao que recebe no parametro
function escreveLinhaNaTabela($json, $i){
  if ($GLOBALS['pesquisa'] != '' and $GLOBALS['salva'] != -99){
    pesquisar($json, $i);
  }else {
    echo "<tr>";
      echo "<td width='25%'>".$json[$i]->nome."</td>";
      echo "<td width='14%'>".$json[$i]->telefone."</td>";
      echo "<td width='24%'>".$json[$i]->email."</td>";
      echo "<td width='19%'>".$json[$i]->nascimento."</td>";
      echo "<td><button class='waves-effect waves-blue-grey btn deep-orange darken-1' name='apagar' id='apagar' value='".$i."'><i class='material-icons'>delete</i></button> <button class='waves-effect waves-blue-grey btn deep-orange darken-1' id='altera' name='altera' value='".$i."'><i class='material-icons'>edit</i></button></td>";
    echo "</tr>";
    $GLOBALS['resultados']++;
  }
}

// Escreve o fechamento da tabela
function fechaTabela(){
  echo "</tbody>";
  echo "</table>";
  msgNaoExiste();
}

// Escreve uma mensagem, caso nao existir cadastro na tabela ou nao existir resultado para a pesquisa realizada
function msgNaoExiste() {
  if ($GLOBALS['pesquisa'] != '' and $GLOBALS['salva'] != -99 and $GLOBALS['resultados']==0 and $GLOBALS['altera'] == '') {
    echo "<br>Não existe resultados para a pesquisa: <b>".$GLOBALS['pesquisa']."</b> em <b>";
    if ($GLOBALS['campo_pesquisa'] == 'nome') {
      echo "nome";
    }else if ($GLOBALS['campo_pesquisa'] == 'fone') {
      echo "telefone";
    }else if ($GLOBALS['campo_pesquisa'] == 'domi') {
      echo "domínio";
    }else if ($GLOBALS['campo_pesquisa'] == 'email') {
      echo "e-mail";
    }else if ($GLOBALS['campo_pesquisa'] == 'mes') {
      echo "mês";
    }else if ($GLOBALS['campo_pesquisa'] == 'data') {
      echo "data";
    }
    echo "</b>!<br><br>";
  }elseif (($GLOBALS['pesquisa'] == '' or $GLOBALS['pesquisa'] != '' and $GLOBALS['salva'] == -99) and $GLOBALS['resultados']==0 and $GLOBALS['altera'] == '') {
    echo "<b style='font-size: 20px;'>Nenhum cadastro existente!</b><br>";
    echo "Para adicionar um cadastro pressione o botão '<i id='aviso' class='material-icons'>person_add</i>' na barra de navegação.";
  }
}

// Quando chamada, verifica se o valor da pesquisa existe na posicao recebida como parametro
function pesquisar($dados, $n){
  if (!empty($GLOBALS['pesquisa']) and isset($_POST['campo_pesquisa'])) {
    if ($_POST['campo_pesquisa'] == 'nome') {
      if (strpos($dados[$n]->nome,strtoupper($GLOBALS['pesquisa'])) !== false) {
        echo "<tr>";
          echo "<td>".$dados[$n]->nome."</td>";
          echo "<td>".$dados[$n]->telefone."</td>";
          echo "<td>".$dados[$n]->email."</td>";
          echo "<td>".$dados[$n]->nascimento."</td>";
          echo "<td><button class='waves-effect waves-blue-grey btn deep-orange darken-1' name='apagar' id='apagar' value='".$n."'><i class='material-icons'>delete</i></button> <button class='waves-effect waves-blue-grey btn deep-orange darken-1' id='altera' name='altera' value='".$n."'><i class='material-icons'>edit</i></button></td>";
        echo "</tr>";
        $GLOBALS['resultados']++;
      }
    }else if ($_POST['campo_pesquisa'] == 'fone') {
      if (strpos($dados[$n]->telefone,$GLOBALS['pesquisa']) !== false) {
        echo "<tr>";
          echo "<td>".$dados[$n]->nome."</td>";
          echo "<td>".$dados[$n]->telefone."</td>";
          echo "<td>".$dados[$n]->email."</td>";
          echo "<td>".$dados[$n]->nascimento."</td>";
          echo "<td><button class='waves-effect waves-blue-grey btn deep-orange darken-1' name='apagar' id='apagar' value='".$n."'><i class='material-icons'>delete</i></button> <button class='waves-effect waves-blue-grey btn deep-orange darken-1' id='altera' name='altera' value='".$n."'><i class='material-icons'>edit</i></button></td>";
        echo "</tr>";
        $GLOBALS['resultados']++;
      }
    }else if ($_POST['campo_pesquisa'] == 'domi') {
      if (strpos($dados[$n]->email,strtolower($GLOBALS['pesquisa'])) !== false) {
        echo "<tr>";
          echo "<td>".$dados[$n]->nome."</td>";
          echo "<td>".$dados[$n]->telefone."</td>";
          echo "<td>".$dados[$n]->email."</td>";
          echo "<td>".$dados[$n]->nascimento."</td>";
          echo "<td><button class='waves-effect waves-blue-grey btn deep-orange darken-1' name='apagar' id='apagar' value='".$n."'><i class='material-icons'>delete</i></button> <button class='waves-effect waves-blue-grey btn deep-orange darken-1' id='altera' name='altera' value='".$n."'><i class='material-icons'>edit</i></button></td>";
        echo "</tr>";
        $GLOBALS['resultados']++;
      }
    }else if ($_POST['campo_pesquisa'] == 'email') {
      if (strpos($dados[$n]->email,strtolower($GLOBALS['pesquisa'])) !== false) {
        echo "<tr>";
          echo "<td>".$dados[$n]->nome."</td>";
          echo "<td>".$dados[$n]->telefone."</td>";
          echo "<td>".$dados[$n]->email."</td>";
          echo "<td>".$dados[$n]->nascimento."</td>";
          echo "<td><button class='waves-effect waves-blue-grey btn deep-orange darken-1' name='apagar' id='apagar' value='".$n."'><i class='material-icons'>delete</i></button> <button class='waves-effect waves-blue-grey btn deep-orange darken-1' id='altera' name='altera' value='".$n."'><i class='material-icons'>edit</i></button></td>";
        echo "</tr>";
        $GLOBALS['resultados']++;
      }
    }else if ($_POST['campo_pesquisa'] == 'mes') {
      switch (strtolower($GLOBALS['pesquisa'])) {
        case 'janeiro':
          $var = "/01/";
          break;
        case 'fevereiro':
          $var = "/02/";
          break;
        case 'março':
          $var = "/03/";
          break;
        case 'abril':
          $var = "/04/";
          break;
        case 'maio':
          $var = "/05/";
          break;
        case 'junho':
          $var = "/06/";
          break;
        case 'julho':
          $var = "/07/";
          break;
        case 'agosto':
          $var = "/08/";
          break;
        case 'setembro':
          $var = "/09/";
          break;
        case 'outubro':
          $var = "/10/";
          break;
        case 'novembro':
          $var = "/11/";
          break;
        case 'dezembro':
          $var = "/11/";
          break;

        default:
          $var = "//";
          break;
      }
      if (strpos($dados[$n]->nascimento,$var) !== false) {
        echo "<tr>";
          echo "<td>".$dados[$n]->nome."</td>";
          echo "<td>".$dados[$n]->telefone."</td>";
          echo "<td>".$dados[$n]->email."</td>";
          echo "<td>".$dados[$n]->nascimento."</td>";
          echo "<td><button class='waves-effect waves-blue-grey btn deep-orange darken-1' name='apagar' id='apagar' value='".$n."'><i class='material-icons'>delete</i></button> <button class='waves-effect waves-blue-grey btn deep-orange darken-1' id='altera' name='altera' value='".$n."'><i class='material-icons'>edit</i></button></td>";
        echo "</tr>";
        $GLOBALS['resultados']++;
      }
    }else if ($_POST['campo_pesquisa'] == 'data') {
      if (strpos($dados[$n]->nascimento,$GLOBALS['pesquisa']) !== false) {
        echo "<tr>";
          echo "<td>".$dados[$n]->nome."</td>";
          echo "<td>".$dados[$n]->telefone."</td>";
          echo "<td>".$dados[$n]->email."</td>";
          echo "<td>".$dados[$n]->nascimento."</td>";
          echo "<td><button class='waves-effect waves-blue-grey btn deep-orange darken-1' name='apagar' id='apagar' value='".$n."'><i class='material-icons'>delete</i></button> <button class='waves-effect waves-blue-grey btn deep-orange darken-1' id='altera' name='altera' value='".$n."'><i class='material-icons'>edit</i></button></td>";
        echo "</tr>";
        $GLOBALS['resultados']++;
      }
    }
  }
}

// Salva as alteracoes feitas nos input's colocados pela funcao 'alterar'
function salvaAlteracao($salva, $novo_nome, $novo_email, $novo_telefone, $novo_nascimento){
  $GLOBALS['pesquisa'] = '';
  $json = obtemValorDoJson();
  $data = explode('-',$novo_nascimento);
  $novo_nascimento = $data[2].'/'.$data[1].'/'.$data[0];
  $alterado = array(
      'codigo'     => $json[$salva]->codigo,
      'nome'       => $novo_nome,
      'telefone'   => $novo_telefone,
      'email'      => $novo_email,
      'nascimento' => $novo_nascimento
  );
  $json[$salva] = $alterado;
  enviaParaJson($json);
}

// Apresenta uma notificacao na barra de filtragem informando o campo selecionado e a pesquisa da filtragem
function notificacao($item, $valor){
  if ($item == 'nome') {
    echo "<div class='col s4 m4 l4'>";
      echo "<span class='new badge blue-grey darken-4' data-badge-caption='$valor'>Nome:</span>";
    echo "</div>";
  }else if ($item == 'fone') {
    echo "<div class='col s4 m4 l4'>";
      echo "<span class='new badge blue-grey darken-4' data-badge-caption='$valor'>Telefone:</span>";
    echo "</div>";
  }else if ($item == 'domi') {
    echo "<div class='col s4 m4 l4'>";
      echo "<span class='new badge blue-grey darken-4' data-badge-caption='$valor'>Domínio:</span>";
    echo "</div>";
  }else if ($item == 'email') {
    echo "<div class='col s4 m4 l4'>";
      echo "<span class='new badge blue-grey darken-4' data-badge-caption='$valor'>E-mail:</span>";
    echo "</div>";
  }else if ($item == 'mes') {
    echo "<div class='col s4 m4 l4'>";
      echo "<span class='new badge blue-grey darken-4' data-badge-caption='$valor'>Aniversário:</span>";
    echo "</div>";
  }else if ($item == 'data') {
    echo "<div class='col s4 m4 l4'>";
      echo "<span class='new badge blue-grey darken-4' data-badge-caption='$valor'>Data:</span>";
    echo "</div>";
  }
}

// Obtem os dominios presentes no Json e apresenta, sem repetir, cada um dentro de um <option>
function dominio(){
  $json = obtemValorDoJson();
  $dominio = array();
  for ($i=0; $i < count($json); $i++) {
    $completo = $json[$i]->email;
    $completo = explode('@',$completo);
    $email = $completo[((count($completo))-1)];
    if (!in_array($email, $dominio)) {
      $dominio[] = $email;
      sort($dominio);
    }
  }
  for ($n=0; $n < count($dominio) ; $n++) {
    echo "<option value='@".$dominio[$n]."'";
    if (isset($_POST['dominios'])) {
      if ($GLOBALS['campo_pesquisa'] == 'domi' and $GLOBALS['pesquisa'] == ('@'.$dominio[$n]) and $GLOBALS['salva'] == '') {
        echo " selected";
      }
    }
    echo ">@".$dominio[$n]."</option>";
  }
}

// Obtem os meses presentes no 'vetor_meses' e apresenta cada um dentro de um <option>
function meses(){
    $vet_meses = $GLOBALS['vetor_meses'];
  for ($n=0; $n < count($vet_meses) ; $n++) {
    echo "<option value='".$vet_meses[$n]."'";
    if (isset($_POST['meses'])) {
      if ($GLOBALS['campo_pesquisa'] == 'mes' and $GLOBALS['pesquisa'] == ($vet_meses[$n]) and $GLOBALS['salva'] == '') {
        echo " selected";
      }
    }
    echo ">".$vet_meses[$n]."</option>";
  }
}

 ?>
