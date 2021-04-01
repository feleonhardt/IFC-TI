<?php
include "funcoes.php";

  $nome = isset($_POST['nome']) ? strtoupper($_POST['nome']) : '';
  $fone = isset($_POST['fone']) ? $_POST['fone'] : '';
  $email = isset($_POST['email']) ? strtolower($_POST['email']) : '';
  $nascimento = isset($_POST['nascimento']) ? $_POST['nascimento'] : '';
  $apagar = isset($_POST['apagar']) ? $_POST['apagar'] : '';

  $alterar = isset($_POST['altera']) ? $_POST['altera'] : '';
  $salva = isset($_POST['salva']) ? $_POST['salva'] : '';
  $novo_nome = isset($_POST['novo_nome']) ? strtoupper($_POST['novo_nome']) : '';
  $novo_telefone = isset($_POST['novo_telefone']) ? $_POST['novo_telefone'] : '';
  $novo_email = isset($_POST['novo_email']) ? strtolower($_POST['novo_email']) : '';
  $novo_nascimento = isset($_POST['novo_nascimento']) ? $_POST['novo_nascimento'] : '';
  $pesquisa = isset($_POST['pesquisa']) ? $_POST['pesquisa'] : '';

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>AGENDA DE CONTATOS</title>
    <link rel="stylesheet" href="assets/css/materialize.css">
    <!-- <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/> -->
    <!-- <script type="text/javascript" src="DataTables/datatables.min.js"></script> -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <!-- <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script> -->
    <script src="assets/js/init.js"></script>

    <!-- <script src="assets/js/custom.js"></script> -->
  </head>
  <body>
    <nav>
    <div class="nav-wrapper blue-grey darken-4">
      <a href="#" class="brand-logo center">AGENDA DE CONTATOS</a>
    </div>
  </nav><br>

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
                <div class="col s1 m1 l1"></div>
                <div class="col s9 m9 l9">
                  <input type="text" name="pesquisa" id="pesquisa" value="<?php if ($pesquisa != '' and $salva == '') {
                    echo $pesquisa;
                  } ?>" placeholder="Pesquisar...">
                </div>
                <div class="col s1 m1 l1 white-text">
                  <button class="btn-large waves-effect waves-blue-grey deep-orange darken-1" type="submit" name="button"><i class="material-icons">search</i></button>
                </div>
                <div class="col s1 m1 l1">
                  <a class="btn-large waves-effect waves-blue-grey deep-orange darken-1 modal-trigger" href="#add"><i class="material-icons">add</i></a>
                </div>
              </div>

              <!-- <a class="btn-large waves-effect waves-blue-grey deep-orange darken-1 modal-trigger" href="#add"><i class="material-icons">add</i></a> -->


              <div class="card deep-orange lighten-5">
            <?php
              $json = obtemValorDoJson();
              if ($nome != '') {
                adicionaContato($nome, $fone, $email, $nascimento);
              }
              if ($apagar!='') {
                excluir($apagar);
              }
              if ($salva != '') {
                salvaAlteracao($salva, $novo_nome, $novo_email, $novo_telefone, $novo_nascimento);
              }
              if ($alterar != '') {
                alterar($alterar);
              }else {
                apresentarTabela();
              }

            ?>
          </div>
          </form>
    </body>
<script src="assets/js/materialize.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('.modal').modal();
});
</script>
</html>
