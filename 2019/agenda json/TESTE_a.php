<?php
//  $cod = isset($_POST['num']) ? $_POST['num'] : 0;
  $nome = isset($_POST['nome']) ? strtoupper($_POST['nome']) : '';
  $fone = isset($_POST['fone']) ? $_POST['fone'] : '';
  $email = isset($_POST['email']) ? $_POST['email'] : '';
  $nascimento = isset($_POST['nascimento']) ? $_POST['nascimento'] : '';
  $apagar = isset($_POST['apagar']) ? $_POST['apagar'] : -1;
  $cod=0;
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>AGENDA DE CONTATOS</title>
    <link rel="stylesheet" href="assets/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>
    <script src="assets/js/custom.js"></script>
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
                Nome:<input type="text" name="nome" value=""><br>
                Telefone:<input type="text" name="fone" value=""><br>
                E-mail:<input type="email" name="email" class="validate" value=""><br>
                <label for="email">Email</label>
                Data de nascimento:<input type="date" name="nascimento" class="datepicker" value=""><br>
              </div>
              <div class="card-actions">
                <button class="btn waves-effect waves-light" type="submit" name="" value="">ENVIAR</button>
                <button class="btn waves-effect waves-light" type="reset" name="" value="">LIMPAR</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col s12 m8 l9">
          <form action="" method="post">
            <?php
              $arquivo = file_get_contents('contatos_agenda.json');

              $json = json_decode($arquivo);

              if ($nome != '') {
                $data = array();
                $data = explode('-',$nascimento);
                $nascimento = $data[2].'-'.$data[1].'-'.$data[0];
                $cliente = array(
                    'codigo'     => '',
                    'nome'       => $nome,
                    'telefone'  => $fone,
                    'email'      => $email,
                    'nascimento' => $nascimento
                );
                //var_dump($cliente);
                array_push($json, $cliente);

                //$dados_identificador = array('Contatos' => $json);
                $dados_json = json_encode($json);
                //$dados_json = json_encode($json);
                $fp = fopen("contatos.json", "w");
                $escreve = fwrite($fp, $dados_json);
                fclose($fp);
              }

              $arquivo = file_get_contents('contatos_agenda.json');
              $json = json_decode($arquivo);
              echo "<table border='1' id='tabela'>";
                echo "<thead>";
                  echo "<tr colspan='3'>";
                    echo "<th>C??digo</th>";
                    echo "<th>Nome</th>";
                    echo "<th>Telefone</th>";
                    echo "<th>E-mail</th>";
                    echo "<th>Nascimento</th>";
                    echo "<th>Excluir</th>";
                  echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
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
              echo "</tbody>";
              echo "</table>";

              function apaga(){
                $valor=isset($_POST['apagar']) ? $_POST['apagar'] : '';
                if ($valor!='') {
                  $arquivo = file_get_contents('contatos.json');

                  $json = json_decode($arquivo);

                  $json[$valor]="";

                }
              }
            ?>
          </form>
          <button type="button" onclick="apaga()" name="button"></button>
        </div>
      </div>
      <script src="assets/js/materialize.js"></script>
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
