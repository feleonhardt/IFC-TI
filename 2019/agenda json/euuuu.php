<DOCTYPE html>
<html>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<head>
</head>
<body>
    <div id="divConteudo">
        <table id="tabela">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Descrição</th>
                    <th>Grupo</th>
                </tr>
                <tr>
                    <th><input type="text" id="txtColuna1"/></th>
                    <th><input type="text" id="txtColuna2"/></th>
                    <th><input type="text" id="txtColuna3"/></th>
                    <th><input type="text" id="txtColuna4"/></th>
                    <th><input type="text" id="txtColuna5"/></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
              <?php
                $arquivo = file_get_contents("contatos_agenda.json");
                $json = json_decode($arquivo);
                for ($i=0; $i < count($json) ; $i++) {
                  //foreach($json as $registro):
                  echo "<tr>";
                    echo "<td>".$json[$i]->codigo."</td>";
                    echo "<td>".$json[$i]->nome."</td>";
                    echo "<td>".$json[$i]->telefone."</td>";
                    echo "<td>".$json[$i]->email."</td>";
                    echo "<td>".$json[$i]->nascimento."</td>";
                    echo "<td><button class='waves-effect waves-light btn-small' name='apagar' id='apagar' value='".$i."'>Excluir</button></td>";
                    //echo "<td><input type='radio' name='apagar' value='".$i."' style='border: 1px;'></td>";
                  echo "</tr>";
                //endforeach;
                }
               ?>
            </tbody>
        </table>
    </div>
    <script>
    $(function(){
    $("#tabela input").keyup(function(){
        var index = $(this).parent().index();
        var nth = "#tabela td:nth-child("+(index+1).toString()+")";
        var valor = $(this).val().toUpperCase();
        $("#tabela tbody tr").show();
        $(nth).each(function(){
            if($(this).text().toUpperCase().indexOf(valor) < 0){
                $(this).parent().hide();
            }
        });
    });

    $("#tabela input").blur(function(){
        $(this).val("");
    });
  });
  </script>
</body>
</html>
