<?php
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
      echo "<tr>";
        echo "<td>".$json[$i]->codigo."</td>";
        echo "<td><input type='text' name='novo_nome' value='".$json[$i]->nome."'></td>";
        echo "<td><input type='text' name='novo_telefone' value='".$json[$i]->telefone."'></td>";
        echo "<td><input type='email' name='novo_email' value='".$json[$i]->email."'></td>";
        echo "<td><input type='date' name='novo_nascimento' value='";
        $data = explode('/',$json[$i]->nascimento);
        $nascimento = $data[2].'-'.$data[1].'-'.$data[0];
        echo $nascimento;
        echo "'></td>";
        echo "<td><button class='waves-effect waves-blue-grey btn deep-orange darken-1' name='cancelar' id='cancelar' value=''><i class='material-icons'>close</i></button> <button class='waves-effect waves-blue-grey btn deep-orange darken-1' name='salva' value='".$i."'><i class='material-icons'>done</i></button></td>";
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
      echo "<tr colspan='3'>";
        echo "<th colspan='1'>Código</th>";
        echo "<th colspan='1'>Nome</th>";
        echo "<th colspan='1'>Telefone</th>";
        echo "<th colspan='1'>E-mail</th>";
        echo "<th colspan='1'>Nascimento</th>";
        echo "<th colspan='1'>Ação</th>";
      echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
}

function escreveLinhaNaTabela($json, $i){
  if ($GLOBALS['pesquisa'] != '' and $GLOBALS['salva'] != -99){
    pesquisar($json, $i);
  }else {
    echo "<tr>";
      echo "<td>".$json[$i]->codigo."</td>";
      echo "<td>".$json[$i]->nome."</td>";
      echo "<td>".$json[$i]->telefone."</td>";
      echo "<td>".$json[$i]->email."</td>";
      echo "<td>".$json[$i]->nascimento."</td>";
      echo "<td><button class='waves-effect waves-blue-grey btn deep-orange darken-1' name='apagar' id='apagar' value='".$i."'><i class='material-icons'>delete</i></button> <button class='waves-effect waves-blue-grey btn deep-orange darken-1' name='altera' value='".$i."'><i class='material-icons'>edit</i></button></td>";
    echo "</tr>";
  }
}

function fechaTabela(){
  echo "</tbody>";
  echo "</table>";
}

function pesquisar($dados, $n){
  if ($GLOBALS['pesquisa'] != '') {
    if ($_POST['campo_pesquisa'] == 'nome') {
      if (strpos($dados[$n]->nome,strtoupper($GLOBALS['pesquisa'])) !== false) {
        echo "<tr>";
          echo "<td>".$dados[$n]->codigo."</td>";
          echo "<td>".$dados[$n]->nome."</td>";
          echo "<td>".$dados[$n]->telefone."</td>";
          echo "<td>".$dados[$n]->email."</td>";
          echo "<td>".$dados[$n]->nascimento."</td>";
          echo "<td><button class='waves-effect waves-blue-grey btn deep-orange darken-1' name='apagar' id='apagar' value='".$n."'><i class='material-icons'>delete</i></button> <button class='waves-effect waves-blue-grey btn deep-orange darken-1' name='altera' value='".$n."'><i class='material-icons'>edit</i></button></td>";
        echo "</tr>";
      }
    }else if ($_POST['campo_pesquisa'] == 'fone') {
      if (strpos($dados[$n]->telefone,$GLOBALS['pesquisa']) !== false) {
        echo "<tr>";
          echo "<td>".$dados[$n]->codigo."</td>";
          echo "<td>".$dados[$n]->nome."</td>";
          echo "<td>".$dados[$n]->telefone."</td>";
          echo "<td>".$dados[$n]->email."</td>";
          echo "<td>".$dados[$n]->nascimento."</td>";
          echo "<td><button class='waves-effect waves-blue-grey btn deep-orange darken-1' name='apagar' id='apagar' value='".$n."'><i class='material-icons'>delete</i></button> <button class='waves-effect waves-blue-grey btn deep-orange darken-1' name='altera' value='".$n."'><i class='material-icons'>edit</i></button></td>";
        echo "</tr>";
      }
    }else if ($_POST['campo_pesquisa'] == 'email') {
      if (strpos($dados[$n]->email,strtolower($GLOBALS['pesquisa'])) !== false) {
        echo "<tr>";
          echo "<td>".$dados[$n]->codigo."</td>";
          echo "<td>".$dados[$n]->nome."</td>";
          echo "<td>".$dados[$n]->telefone."</td>";
          echo "<td>".$dados[$n]->email."</td>";
          echo "<td>".$dados[$n]->nascimento."</td>";
          echo "<td><button class='waves-effect waves-blue-grey btn deep-orange darken-1' name='apagar' id='apagar' value='".$n."'><i class='material-icons'>delete</i></button> <button class='waves-effect waves-blue-grey btn deep-orange darken-1' name='altera' value='".$n."'><i class='material-icons'>edit</i></button></td>";
        echo "</tr>";
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
          echo "<td>".$dados[$n]->codigo."</td>";
          echo "<td>".$dados[$n]->nome."</td>";
          echo "<td>".$dados[$n]->telefone."</td>";
          echo "<td>".$dados[$n]->email."</td>";
          echo "<td>".$dados[$n]->nascimento."</td>";
          echo "<td><button class='waves-effect waves-blue-grey btn deep-orange darken-1' name='apagar' id='apagar' value='".$n."'><i class='material-icons'>delete</i></button> <button class='waves-effect waves-blue-grey btn deep-orange darken-1' name='altera' value='".$n."'><i class='material-icons'>edit</i></button></td>";
        echo "</tr>";
      }
    }else if ($_POST['campo_pesquisa'] == 'data') {
      if (strpos($dados[$n]->nascimento,$GLOBALS['pesquisa']) !== false) {
        echo "<tr>";
          echo "<td>".$dados[$n]->codigo."</td>";
          echo "<td>".$dados[$n]->nome."</td>";
          echo "<td>".$dados[$n]->telefone."</td>";
          echo "<td>".$dados[$n]->email."</td>";
          echo "<td>".$dados[$n]->nascimento."</td>";
          echo "<td><button class='waves-effect waves-blue-grey btn deep-orange darken-1' name='apagar' id='apagar' value='".$n."'><i class='material-icons'>delete</i></button> <button class='waves-effect waves-blue-grey btn deep-orange darken-1' name='altera' value='".$n."'><i class='material-icons'>edit</i></button></td>";
        echo "</tr>";
      }
    }
    // if (strpos($dados[$n]->codigo,$GLOBALS['pesquisa']) !== false or strpos($dados[$n]->nome,$GLOBALS['pesquisa']) !== false or strpos($dados[$n]->telefone,$GLOBALS['pesquisa']) !== false or strpos($dados[$n]->email,$GLOBALS['pesquisa']) !== false or strpos($dados[$n]->nascimento,$GLOBALS['pesquisa']) !== false) {
    //   echo "<tr>";
    //     echo "<td>".$dados[$n]->codigo."</td>";
    //     echo "<td>".$dados[$n]->nome."</td>";
    //     echo "<td>".$dados[$n]->telefone."</td>";
    //     echo "<td>".$dados[$n]->email."</td>";
    //     echo "<td>".$dados[$n]->nascimento."</td>";
    //     echo "<td><button class='waves-effect waves-blue-grey btn deep-orange darken-1' name='apagar' id='apagar' value='".$n."'><i class='material-icons'>delete</i></button> <button class='waves-effect waves-blue-grey btn deep-orange darken-1' name='altera' value='".$n."'><i class='material-icons'>edit</i></button></td>";
    //   echo "</tr>";
    // }
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
  }else if ($item == 'email') {
    echo "<div class='col s4 m4 l4'>";
      echo "<span class='new badge blue-grey darken-4' data-badge-caption='$valor'>E-mail:</span>";
    echo "</div>";
  }else if ($item == 'mes') {
    echo "<div class='col s4 m4 l4'>";
      echo "<span class='new badge blue-grey darken-4' data-badge-caption='$valor'>Mês:</span>";
    echo "</div>";
  }else if ($item == 'data') {
    echo "<div class='col s4 m4 l4'>";
      echo "<span class='new badge blue-grey darken-4' data-badge-caption='$valor'>Data:</span>";
    echo "</div>";
  }
}
 ?>
