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
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/css/custom.css">

    <script src="assets/js/custom.js"></script>
    <title>Hello, world!</title>
  </head>
  <body>
    <form class="" action="" method="post">
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">ADICIONAR CONTATOS</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="card purple lighten-4">
                  <div class="card-heander">
                    <div class="card-title">
                      ADICIONAR CONTATOS
                    </div>
                  </div>
                  <div class="card-body">
                    Nome:<input class="form-control" type="text" name="nome" value="" required><br>
                    Telefone:<input class="form-control" type="text" name="fone" value="" required><br>
                    E-mail:<input class="form-control" type="email" name="email" value="" required><br>
                    Data de nascimento:<input class="form-control" type="date" name="nascimento" class="datepicker" value="" required><br>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <button class="btn btn-danger" type="reset" name="" value="">LIMPAR<i class="material-icons right">clear</i></button>
              <button class="btn btn-success" type="submit" name="" value="">ENVIAR<i class="material-icons right">send</i></button>
            </div>
          </div>
        </div>
      </div>
    </form>

    <form class="" action="" method="post">
      <nav class="navbar navbar-expand navbar-light bg-white">
        <div class="container">
          <a class="navbar-brand">AGENDA DE CONTATOS</a>
          <div class="d-flex ml-auto">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#globalNavbar" aria-controls="globalNavbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          </div>
          <div class="collapse navbar-collapse" id="globalNavbar">
            <div class="form-inline form-navbar my-2 my-lg-0 order-2 importante">
              <input class="form-control" type="text" name="pesquisa" id="pesquisa" value="<?php if ($pesquisa != '' and $salva == '') {
                echo $pesquisa;
              } ?>" placeholder="Pesquisar...">
            </div>
          </div>
          <ul class="navbar-nav mr-auto order-1">
            <li class="nav-item nav-link">
              <button class="btn btn-danger" type="submit" name="button"><i class="material-icons">search</i></button>
            </li>
            <li class="nav-item nav-link">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">ADICIONAR</button>
            </li>
          </ul>
        </div>
      </nav>
      <div class="row">
        <div class="col s12 m12 l12">
            <div class="card purple lighten-4">
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
        </div>
      </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
