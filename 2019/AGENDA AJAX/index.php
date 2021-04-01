<?php
include "funcoes.php";

  $nome = isset($_POST['nome']) ? strtoupper($_POST['nome']) : '';
  $fone = isset($_POST['fone']) ? $_POST['fone'] : '';
  $email = isset($_POST['email']) ? $_POST['email'] : '';
  $nascimento = isset($_POST['nascimento']) ? $_POST['nascimento'] : '';
  $apagar = isset($_POST['apagar']) ? $_POST['apagar'] : '';

  $alterar = isset($_POST['altera']) ? $_POST['altera'] : '';
  $salva = isset($_POST['salva']) ? $_POST['salva'] : '';
  $novo_nome = isset($_POST['novo_nome']) ? $_POST['novo_nome'] : '';
  $novo_telefone = isset($_POST['novo_telefone']) ? $_POST['novo_telefone'] : '';
  $novo_email = isset($_POST['novo_email']) ? $_POST['novo_email'] : '';
  $novo_nascimento = isset($_POST['novo_nascimento']) ? $_POST['novo_nascimento'] : '';

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>AGENDA DE CONTATOS</title>
    <link rel="stylesheet" href="assets/css/materialize.css">
    <script src="assets/js/custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  </head>
  <body>
    <nav>
    <div class="nav-wrapper green accent-3">
      <a href="#" class="brand-logo center">AGENDA DE CONTATOS</a>
    </div>
  </nav>
      <div class="row">
        <div class="col s12 m4 l3">
          <form class="" action="" method="post">
            <div class="card blue-grey darken-1">
              <div class="card-heander white-text">
                <div class="card-title">
                  ADICIONAR CONTATOS
                </div>
              </div>
              <div class="card-body white-text">
                Nome:<input type="text" name="nome" value="" required><br>
                Telefone:<input type="text" name="fone" value="" required><br>
                E-mail:<input type="email" name="email" class="validate" value="" required><br>
                Data de nascimento:<input type="date" name="nascimento" class="datepicker" value="" required><br>
              </div>
              <div class="card-actions">
                <button class="btn waves-effect waves-light" type="submit" name="" value="">ENVIAR</button>
                <button class="btn waves-effect waves-light" type="reset" name="" value="">LIMPAR</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col s12 m8 l9">
          <form class="" action="" method="post">
            <?php
              $json = obtemValorDoJson();
              if ($nome != '') {
                adicionaContato($nome, $fone, $email, $nascimento);
              }
              escreveHeadDaTabela();
              if ($apagar!='') {
                excluir($apagar);
              }
              if ($salva != '') {
                salvaAlteracao($salva, $novo_nome, $novo_email, $novo_telefone, $novo_nascimento);
              }
              if ($alterar != '') {
                alterar($alterar);
              }else {
                //apresentarTabela();
              }
            fechaTabela();


            ?>
            <form>
        </div>
      </div>
    </body>
  <script src="assets/js/materialize.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
  <script type="text/javascript">
  /*var editor;
  $(document).ready(function() {
  editor = new $.fn.dataTable.Editor( {
      "ajax": "contatos_agenda.json",
      "table": "#tabela",
      "fields": [ {
              "label": "Código:",
              "name": "codigo"
          }, {
              "label": "Nome:",
              "name": "name"
          }, {
              "label": "Telefone:",
              "name": "telefone"
          }, {
              "label": "E-mail:",
              "name": "email"
          }, {
              "label": "Nascimento:",
              "name": "nascimento"
          }
      ]
  } );

  // New record
  $('a.editor_create').on('click', function (e) {
      e.preventDefault();

      editor.create( {
          title: 'Create new record',
          buttons: 'Add'
      } );
  } );

  // Edit record
  $('#tabela').on('click', 'a.editor_edit', function (e) {
      e.preventDefault();

      editor.edit( $(this).closest('tr'), {
          title: 'Edit record',
          buttons: 'Update'
      } );
  } );

  // Delete a record
  $('#tabela').on('click', 'a.editor_remove', function (e) {
      e.preventDefault();

      editor.remove( $(this).closest('tr'), {
          title: 'Delete record',
          message: 'Are you sure you wish to remove this record?',
          buttons: 'Delete'
      } );
  } );

  $('#tabela').DataTable( {
        "ajax": "contatos_agenda.json",
        columns: [
        { data: 'codigo' },
        { data: 'nome' },
        { data: 'telefone' },
        { data: 'email' },
        { data: 'nascimento' },
        {
              data: null,
              className: "center",
              defaultContent: '<a href="" class="editor_edit">Edit</a> / <a href="" class="editor_remove">Delete</a>'
          }
    ],
    "language": {
          "lengthMenu": "Display _MENU_ records per page",
          "zeroRecords": "Não existem resultados para esta pesquisa...",
          "info": "Exibindo _PAGE_ de _PAGES_",
          "infoEmpty": "Nenhum contato disponível",
          "infoFiltered": "(Filtrado de _MAX_ contatos)"
      }
    } );
} );
  </script>

  <script type="text/javascript">
  $(document).ready(function() {
    var table =  $('#tabela').DataTable( {
          "ajax": "contatos_agenda.json",
          columns: [
          { data: 'codigo' },
          { data: 'nome' },
          { data: 'telefone' },
          { data: 'email' },
          { data: 'nascimento' },
          {
                data: null,
                className: "center",
                defaultContent: '<button type="button" name="apagar" value="'+data.codigo+'">Excluir</button>'
            }
      ],
      "language": {
            "lengthMenu": "Display _MENU_ records per page",
            "zeroRecords": "Não existem resultados para esta pesquisa...",
            "info": "Exibindo _PAGE_ de _PAGES_",
            "infoEmpty": "Nenhum contato disponível",
            "infoFiltered": "(Filtrado de _MAX_ contatos)"
        }
      } );

      $('#tabela tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );

  } );
  </script>
</html>
