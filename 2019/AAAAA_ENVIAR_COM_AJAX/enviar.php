<?php
  sleep(2);
  if (isset($_POST['cadastrar']) && $_POST['cadastrar'] == 'sim'):
    $novos_campos = array();
    $campos_post = $_POST['campos'];
    foreach ($campos_post as $indice => $valor) {
      $novos_campos[$valor['name']] = $valor['value'];
    }
    $arquivo = file_get_contents("contatos.json");
    $json = json_decode($arquivo);
    if ($json == null) {
      $array_json = array(
        'codigo'     => 0,
        'nome'       => $novos_campos['nome'],
        'telefone'   => $novos_campos['fone'],
        'email'      => $novos_campos['email'],
        'nascimento' => $novos_campos['nascimento']
      );
      $json[0] = $array_json;
    }else {
      $array_json = array(
        'codigo'     => count($json),
        'nome'       => $novos_campos['nome'],
        'telefone'   => $novos_campos['fone'],
        'email'      => $novos_campos['email'],
        'nascimento' => $novos_campos['nascimento']
      );
      $json[] = $array_json;
    }
    $dados_json = json_encode($json);
    $fp = fopen("contatos.json", "w");
    $escreve = fwrite($fp, $dados_json);
    fclose($fp);
  endif;
 ?>
