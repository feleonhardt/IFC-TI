<?php

function obtemValorDoJson(){
  $arquivo = file_get_contents('contatos_agenda.json');
  $open = json_decode($arquivo);
  $json = $open->data;
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
      'telefone'   => $fone,
      'email'      => $email,
      'nascimento' => $nascimento,
      'acao'       => "<button class='waves-effect waves-light btn-small red' name='apagar' id='apagar' value='".$cod."'>Excluir</button><button class='waves-effect waves-light btn-small yellow darken-1' name='altera' value='".$cod."'>Alterar</button>"
  );
  if ($json != null){
    array_push($json, $cliente);
  }else{
    $json[0] = $cliente;
  }
  enviaParaJson($json);
}

function enviaParaJson($json){
  $json = array('data' => $json);
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
  //escreveHeadDaTabela();
  for ($i=0; $i < count($json) ; $i++) {
    escreveLinhaNaTabela($json, $i);
  }
  //fechaTabela();
}

function alterar($altera){
  $json = obtemValorDoJson();
  //escreveHeadDaTabela();
  for ($i=0; $i < count($json) ; $i++) {
    if ($i == $altera) {
      echo "<tr>";
        echo "<td>".$json[$i]->codigo."</td>";
        echo "<td><input type='text' name='novo_nome' value='".$json[$i]->nome."'></td>";
        echo "<td><input type='number' name='novo_telefone' value='".$json[$i]->telefone."'></td>";
        echo "<td><input type='email' name='novo_email' value='".$json[$i]->email."'></td>";
        echo "<td><input type='date' name='novo_nascimento' value='";
        $data = explode('/',$json[$i]->nascimento);
        $nascimento = $data[2].'-'.$data[1].'-'.$data[0];
        echo $nascimento;
        echo "'></td>";
        echo "<td><button class='waves-effect waves-light btn-small red' name='apagar' id='apagar' value='".$i."'>Excluir</button><button class='waves-effect waves-light btn-small green darken-2' name='salva' value='".$i."'>Salvar</button></td>";
      echo "</tr>";
    }else {
      escreveLinhaNaTabela($json, $i);
    }
  }
  //fechaTabela();
}

function escreveHeadDaTabela(){
  echo "<table border='1' id='tabela'>";
    echo "<thead>";
      echo "<tr colspan='3'>";
        echo "<th>Código</th>";
        echo "<th>Nome</th>";
        echo "<th>Telefone</th>";
        echo "<th>E-mail</th>";
        echo "<th>Nascimento</th>";
        echo "<th>Ação</th>";
      echo "</tr>";
    echo "</thead>";
    echo "<tbody id='result'>";
}

function escreveLinhaNaTabela($json, $i){
  echo "<tr>";
    echo "<td>".$json[$i]->codigo."</td>";
    echo "<td>".$json[$i]->nome."</td>";
    echo "<td>".$json[$i]->telefone."</td>";
    echo "<td>".$json[$i]->email."</td>";
    echo "<td>".$json[$i]->nascimento."</td>";
    echo "<td><button class='waves-effect waves-light btn-small red' name='apagar' id='apagar' value='".$i."'>Excluir</button><button class='waves-effect waves-light btn-small yellow darken-1' name='altera' value='".$i."'>Alterar</button></td>";
  echo "</tr>";
}

function fechaTabela(){
  echo "</tbody>";
  echo "</table>";
}

function salvaAlteracao($salva, $novo_nome, $novo_email, $novo_telefone, $novo_nascimento){
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
 ?>
