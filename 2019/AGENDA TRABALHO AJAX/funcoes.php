<?php
$pesquisa = isset($_POST['pesquisa']) ? $_POST['pesquisa'] : '';
$pesquisa_nome = isset($_POST['pesquisa_nome']) ? $_POST['pesquisa_nome'] : '';
$pesquisa_fone = isset($_POST['pesquisa_fone']) ? $_POST['pesquisa_fone'] : '';
$pesquisa_data = isset($_POST['pesquisa_data']) ? $_POST['pesquisa_data'] : '';
$pesquisa_email = isset($_POST['pesquisa_email']) ? $_POST['pesquisa_email'] : '';
$alterar_contato = isset($_POST['alterar_contato']) ? $_POST['alterar_contato'] : 'sem';
$salva = isset($_POST['salva']) ? $_POST['salva'] : '';
$altera = isset($_POST['altera']) ? $_POST['altera'] : '';

// if (isset($_POST['dominios'])) {
//   if ($_POST['dominios'] != "ok") {
//     $pesquisa = $_POST['dominios'];
//   }
// }
// if (isset($_POST['meses'])){
//   if ($_POST['meses'] != "ok") {
//     $pesquisa = $_POST['meses'];
//   }
// }
$campo_pesquisa = isset($_POST['campo_pesquisa']) ? $_POST['campo_pesquisa'] : '';
if (isset($_POST['apagar'])) {
  if ($_POST['apagar'] != '') {
    $salva = -99;
  }
}
if ($salva != '') {
  $campo_pesquisa = '';
}
if (isset($_POST['apagar'])) {
  excluir($_POST['apagar']);
}
if (isset($_POST['add_nome'])) {
  adicionaContato(strtoupper($_POST['add_nome']), $_POST['add_fone'], strtolower($_POST['add_email']), $_POST['add_nascimento']);
}
if ($salva != '' and $salva != -99) {
  salvaAlteracao($_POST['salva'], strtoupper($_POST['novo_nome']), strtolower($_POST['novo_email']), $_POST['novo_telefone'], $_POST['novo_nascimento']);
}

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
$resultados = 0;

function tabela(){
  if (isset($_POST['altera'])) {
    alterar($_POST['altera']);
  }else {
    apresentarTabela();
  }
}

function obtemValorDoJson(){
  $arquivo = file_get_contents('contatos_agenda.json');
  $json = json_decode($arquivo);
  return $json;
}

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

function enviaParaJson($json){
  $dados_json = json_encode($json);
  $fp = fopen("contatos_agenda.json", "w");
  $escreve = fwrite($fp, $dados_json);
  fclose($fp);
}

function excluir($apagar){
  $json = obtemValorDoJson();
  $json = retiraNull($json, $apagar);
  $json = ordenaCodigoContatos($json);
  enviaParaJson($json);
}

function ordenaCodigoContatos($vet){
  for ($i=0; $i < count($vet); $i++) {
    $vet[$i]->codigo = $i;
  }
  return $vet;
}

function retiraNull($vetor, $apaga){
  $vetor_limpo = array();
  for ($i=0; $i < count($vetor) ; $i++) {
    if ($i != $apaga){
        array_push($vetor_limpo, $vetor[$i]);
    }
  }
  return $vetor_limpo;
}

function apresentarTabela(){
  $json = obtemValorDoJson();
  escreveHeadDaTabela();
  for ($i=0; $i < count($json) ; $i++) {
    escreveLinhaNaTabela($json, $i);
  }
  fechaTabela();
}

function alterar($altera){
  $json = obtemValorDoJson();
  escreveHeadDaTabela();
  for ($i=0; $i < count($json) ; $i++) {
    if ($i == $altera) {
      echo "<tr style='background-color: white !important;' >";
        echo "<td><input type='text' style='text-align:center;' size='22' id='novo_nome' name='novo_nome' value='".$json[$i]->nome."'  onkeyup='alteraMaiusculo_novo()' class='validate' required></td>";
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

function escreveHeadDaTabela(){
  echo "<table border='1' id='tabela' class='highlight responsive-table'>";
    echo "<thead>";
      echo "<tr>";
        echo "<th width='31%'>Nome</th>";
        echo "<th width='12%'>Telefone</th>";
        echo "<th width='26%'>E-mail</th>";
        echo "<th width='19%'>Nascimento</th>";
        echo "<th>Ação</th>";
      echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
}

function escreveLinhaNaTabela($json, $i){
  if ($GLOBALS['pesquisa'] != '' and $GLOBALS['salva'] != -99){
    pesquisar($json, $i);
  }else {
    echo "<tr>";
      echo "<td style='display:none;'>".$json[$i]->codigo."</td>";
      echo "<td width='31%' title='nome' class='editavel'>".$json[$i]->nome."</td>";
      echo "<td width='12%' title='telefone' class='editavel'>".$json[$i]->telefone."</td>";
      echo "<td width='26%' title='email' class='editavel'>".$json[$i]->email."</td>";
      echo "<td width='19%' title='nascimento' class='editavel'>".$json[$i]->nascimento."</td>";
      // echo "<td><button class='waves-effect waves-blue-grey btn deep-orange darken-1' name='apagar' id='apagar' value='".$i."'><i class='material-icons'>delete</i></button> <button class='waves-effect waves-blue-grey btn deep-orange darken-1 modal-trigger' href='#alterar'  id='altera_contato' name='altera_contato' value='".$i."'><i class='material-icons'>edit</i></button></td>";
    echo "</tr>";
    $GLOBALS['resultados']++;
  }
}

function fechaTabela(){
  echo "</tbody>";
  echo "</table>";
  msgNaoExiste();
}

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

function dominio(){
  $json = obtemValorDoJson();
  $dominio = array();
  for ($i=0; $i < count($json); $i++) {
    $completo = $json[$i]->email;
    $completo = explode('@',$completo);
    $email = $completo[((count($completo))-1)];
    if (!in_array($email, $dominio)) {
      $dominio[] = $email;
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

function meses(){
    $vet_meses = $GLOBALS['vetor_meses'];
  for ($n=0; $n < count($vet_meses) ; $n++) {
    switch (strtolower($vet_meses[$n])) {
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
    }
    echo "<option value='".$var."'";
    if (isset($_POST['meses'])) {
      if ($GLOBALS['campo_pesquisa'] == 'mes' and $GLOBALS['pesquisa'] == ($vet_meses[$n]) and $GLOBALS['salva'] == '') {
        echo " selected";
      }
    }
    echo ">".$vet_meses[$n]."</option>";
  }
}

 ?>
