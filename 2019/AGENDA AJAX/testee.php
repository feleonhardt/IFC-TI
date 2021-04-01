<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <title></title>
  </head>
  <body>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>Nascimento</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>Nascimento</th>
            </tr>
        </tfoot>
    </table>
  </body>
</html>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable( {
        "ajax": "contatos_agenda.json"
    } );
} );
</script>
