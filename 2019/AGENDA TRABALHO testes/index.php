<?php
include "funcoes.php";


$salva = isset($_POST['salva']) ? $_POST['salva'] : '';
// if (isset($_POST['limpar'])) {
//   $salva=-99;
// }
  $pesquisa = isset($_POST['pesquisa']) ? $_POST['pesquisa'] : '';
$campo_pesquisa = isset($_POST['campo_pesquisa']) ? $_POST['campo_pesquisa'] : '';
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>AGENDA DE CONTATOS</title>
    <link rel="stylesheet" href="assets/css/materialize.css">
    <!-- <link rel="stylesheet" href="assets/css/custom.css"> -->

    <!-- <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/> -->
    <!-- <script type="text/javascript" src="DataTables/datatables.min.js"></script> -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <!-- <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script> -->
    <script src="assets/js/jQuery.js"></script>

    <!-- <script src="assets/js/custom.js"></script> -->
  </head>
  <body>
    <nav>
      <div class="nav-wrapper blue-grey darken-4">
        <a href="#" class="brand-logo center">AGENDA DE CONTATOS</a>
      </div>
    </nav>
    <div class="modal" id="add">
      <form class="" action="" method="post">
        <div class="modal-content">
          <h4>ADICIONAR CONTATOS</h4>
          <div class="card-body">
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input type="text" id="nome" name="nome" value="" class="validate" required>
                <label for="nome">Nome</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input type="email" id="email" name="email" value="" class="validate" required>
                <label for="email">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <i class="material-icons prefix">phone</i>
                <input type="text" id="fone" name="fone" value="" class="validate" required>
                <label for="fone">Telefone</label>
              </div>
              <div class="input-field col s6">
                <i class="material-icons prefix">date_range</i>
                <input type="date" id="nascimento" name="nascimento" value="" class="validate" placeholder="" required>
                <label for="nascimento">Data de Nascimento</label>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn-large waves-effect waves-blue-grey deep-orange darken-1 modal-close" type="reset" name="" value="">CANCELAR<i class="material-icons right">clear</i></button>
            <button class="btn-large waves-effect waves-blue-grey deep-orange darken-1" type="submit" name="" value="">ENVIAR<i class="material-icons right">send</i></button>
          </div>
        </div>
      </form>
    </div>

  <form action="" method="post">
    <div class="row">
      <div class="col s10 m10 l10">
        <ul class="collapsible popout">
          <li>
            <div class="collapsible-header input-field">
              <i class="material-icons">expand_more</i>Filtrar
                <?php
                if ($pesquisa != '' and $salva == ''){
                  notificacao($campo_pesquisa, $pesquisa);
                  echo '<div class="right">';
                    echo '<button class="btn-small waves-effect waves-blue-grey deep-orange darken-1" name="salva" value="-99">Limpar</button>';
                  echo '</div>';
                }
                ?>
              </div>
            <div class="collapsible-body">
              <div class="row">
                <div class="col s2 m2 l2">
                  <div class="input-field col s12">
                    <select name="campo_pesquisa">
                      <option value="nome" <?php if($campo_pesquisa == 'nome' and $salva == '') echo "selected" ?>>Nome</option>
                      <option value="fone" <?php if($campo_pesquisa == 'fone' and $salva == '') echo "selected" ?>>Telefone</option>
                      <option value="email" <?php if($campo_pesquisa == 'email' and $salva == '') echo "selected" ?>>E-mail</option>
                      <option value="mes" <?php if($campo_pesquisa == 'mes' and $salva == '') echo "selected" ?>>Mês</option>
                      <option value="data" <?php if($campo_pesquisa == 'data' and $salva == '') echo "selected" ?>>Data</option>
                    </select>
                    <label>Filtrar por:</label>
                  </div>
                </div>
                <div class="input-field col s9 m9 l9">
                  <input type="text" name="pesquisa" id="pesquisa"
                    <?php
                    if ($pesquisa != '' and $salva == '') {
                      echo 'value="'.$pesquisa.'"';
                    }
                    ?> placeholder="Digite sua pesquisa...">
                  <label>Pesquisar por:</label>
                </div>
                <div class="input-field col s1 m1 l1">
                  <button class="btn waves-effect waves-blue-grey deep-orange darken-1" type="submit" name="pesquisar"><i class="material-icons">search</i>Buscar</button>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="col s2 center input-field">
        <button class="btn-large waves-effect waves-blue-grey deep-orange darken-1 modal-trigger" href="#add"><i class="material-icons">person_add</i></button>
      </div>
    </div>

    <div class="card deep-orange lighten-5">
                  <?php


                    $json = obtemValorDoJson();
                    if (isset($_POST['nome'])) {
                      adicionaContato(strtoupper($_POST['nome']), $_POST['fone'], strtolower($_POST['email']), $_POST['nascimento']);
                    }
                    if (isset($_POST['apagar'])) {
                      excluir($_POST['apagar']);
                    }
                    if ($salva != '' and $salva != -99) {
                      salvaAlteracao($_POST['salva'], strtoupper($_POST['novo_nome']), strtolower($_POST['novo_email']), $_POST['novo_telefone'], $_POST['novo_nascimento']);
                    }
                    if (isset($_POST['altera'])) {
                      alterar($_POST['altera']);
                    }else {
                      apresentarTabela();
                    }

                  ?>
      </div>
  </form>
  <script src="assets/js/materialize.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    $('.modal').modal();
    $('.collapsible').collapsible();
    $('select').formSelect();
    $('.chips').chips();
  });
  </script>
  </body>
</html>
