<!DOCTYPE html>
<?php
include('conexao.php');
$tabela = isset($_POST['tabela']) ? $_POST['tabela'] : null;
if ($tabela == 'vazio') {
  $tabela=null;
}
$busca = isset($_POST['busca']) ? $_POST['busca'] : null;
 ?>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="assets/js/jQuery.js"></script>
    <script src="assets/js/funcoes.js"></script>
    <script src="assets/js/custom.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/materialize.css">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <script type="text/javascript" src="assets/js/materialize.js">

    </script>
  </head>
  <body>
    <div class="row">
      <div class="col s0 m1 l1"></div>
      <div class="col s12 m10 l10 ">
        <!-- QUADRO filtrar -->
        <ul class="collapsible popout z-depth-5 deep-orange lighten-5">
          <li id="branco">
            <div id="branco" class="collapsible-header input-field z-depth-5 deep-orange lighten-5">
              <i class="material-icons">filter_list</i>Filtrar
            </div>
            <!-- CORPO do filtrar -->
            <div id="branco" class="collapsible-body  deep-orange lighten-5">
              <div class="row">
                <div class="col l12">
                  <div class="row" id="sem_margim">
                    <form action="" method="post">
                      <?php
                      // 3) Vendedor (código, login, senha, nome, e-mail, telefone);
                      // 8) Funcionário (código, nome, salário, data de admissão);
                      // 9) Carro (código, ano de fabricação, data da venda, valor);
                      // 12) Computador (código, fabricante, processador, memória, hd);
                      // 13) Prédio (código, nome, número de salas, número de andares);
                      // 16) Escola (código, nome, cidade, número de alunos, nome da diretora);
                      $consulta = $PDO->query("SELECT table_name FROM information_schema.tables WHERE table_schema = 'select_canvas';");
                      echo "<div class='col s12 l3'>";
                        echo "<h6 style='color: #ffff00'>Refinar por tabela:</h6>";
                        echo "<select name='tabela' id='tabela'>";
                          echo "<option value='vazio' disabled selected>Selecione uma tabela</option>";
                          $tabelas= array();
                          while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                            // echo "<tr><td>{$linha['codigo']}</td><td>{$linha['nome']}</td><td>{$linha['salario']}</td><td>{$linha['data_admissao']}</td></tr>";
                            echo "<option value='{$linha['table_name']}'>".strtoupper($linha['table_name'])."</option>";
                            $tabelas[]=$linha['table_name'];
                          }
                        echo "</select>";
                      echo "</div>";
                      echo "<div class='col s12 l3'>";
                        echo "<h6 style='color: #ffff00'>Refinar por coluna:</h6>";
                        echo "<div id='coluna_disable' style='display: block'>";
                          echo "<select name='coluna' id='coluna' class='disable'>";
                            echo "<option class='disable' value=''>Refine tabela</option>";
                          echo "</select>";
                        echo "</div>";
                        for ($i=0; $i < count($tabelas); $i++) {
                          echo "<div id='".$tabelas[$i]."' style='display: none'>";
                            $consulta = $PDO->query("DESC ".$tabelas[$i].";");
                            echo "<select name='coluna_".$tabelas[$i]."' id='coluna_".$tabelas[$i]."'>";
                              echo "<option value=''disabled selected>Selecione uma coluna</option>";
                              while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                                echo "<option value='{$linha['Field']}'>".strtoupper($linha['Field'])."</option>";
                              }
                            echo "</select>";
                          echo "</div>";
                        }
                        echo "</div>";
                        echo "<div class='col s12 l3'>";
                          echo "<h6 style='color: #ffff00'>Refinar pesquisa:</h6>";
                          echo "<div id='sem_busca' style='display: block'>";
                            echo "<input type='text' name='busca' id='sem_busca' value='Refine coluna' disabled>";
                          echo "</div>";
                          echo "<div id='busca' style='display: none'>";
                            echo "<input type='text' name='busca' id='busca' placeholder='Digite uma busca'>";
                          echo "</div>";
                        echo "</div>";
                      ?>
                      <div class="col s12 l3">

                        <button type="submit" class="btn-large yellow accent-4 waves-effect" name="acao" style="color: rgba(77, 10, 78,1); width: 100%;">BUSCAR</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </li>
          </ul>
        </div><br><br>
        <?php
          $ok=false;
          for ($i=0; $i < count($tabelas) ; $i++) {
            if (isset($_POST["coluna_".$tabelas[$i]]) and $_POST["coluna_".$tabelas[$i]] !='' and $ok==false) {
              $coluna=$_POST["coluna_".$tabelas[$i]];
              $ok=true;
            }
          }
          if ($ok==false) {
            $coluna='';
          }
          if ($tabela != null) {
            $consulta = $PDO->query("DESC {$tabela};");
            $colunas = array();
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
              $colunas[]=$linha['Field'];
            }
          }
          if ($tabela != null and $coluna == '' and $busca == null){
            $consulta = $PDO->query("SELECT * FROM {$tabela};");
            echo "<table border='1 px' class='col l10 offset-l1'>";
              echo "<tr><th colspan='".count($colunas)."' style='background-color: rgba(77, 10, 78,1); color: #ffee00;'>".$tabela."</th></tr>";
              echo "<tr>";
                for ($z=0; $z <count($colunas) ; $z++) {
                  echo "<th";
                  if ($colunas[$z] == 'codigo'){
                    echo " width='10%'";
                  }
                  echo">".$colunas[$z]."</th>";
                }
              echo "</tr>";
              while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                  for ($n=0; $n <count($colunas) ; $n++) {
                    echo "<td>".$linha[$colunas[$n]]."</td>";
                  }
                echo "</tr>";
              }
            echo "</table>";
          }else  if ($tabela == null and $coluna == '' and $busca == null or $tabela == null and $coluna == '' and $busca != null or $tabela == null and $coluna != '' and $busca == null or $tabela == null and $coluna != '' and $busca != null){
            for ($v=0; $v < count($tabelas) ; $v++) {
              $consulta = $PDO->query("DESC ".$tabelas[$v].";");
              $colunas = array();
              echo "<table border='1 px' class='col l10 offset-l1'>";
                while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                  $colunas[]=$linha['Field'];
                }
              echo "<tr><th colspan='".count($colunas)."' style='background-color: rgba(77, 10, 78,1); color: #ffee00;'>".$tabelas[$v]."</th></tr>";
              echo "<tr>";
              for ($z=0; $z <count($colunas) ; $z++) {
                echo "<th";
                if ($colunas[$z] == 'codigo'){
                  echo " width='10%'";
                }
                echo">".$colunas[$z]."</th>";
              }
              echo "</tr>";
              $consulta = $PDO->query("SELECT * FROM ".$tabelas[$v].";");
              while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                  for ($n=0; $n <count($colunas) ; $n++) {
                    if ($colunas[$n]==$coluna) {
                      echo "<td><b>".$linha[$colunas[$n]]."</b></td>";
                    }else{
                      echo "<td>".$linha[$colunas[$n]]."</td>";
                    }
                  }
                echo "</tr>";
                }
              echo "</table><br>";
            }
          }else if ($tabela != null and $coluna != '' and $busca != null){
            $consulta = $PDO->query("SELECT * FROM {$tabela} WHERE {$coluna} like '{$busca}%';");
            echo "<table border='1 px' class='col l10 offset-l1'>";
              echo "<tr><th colspan='".count($colunas)."' style='background-color: rgba(77, 10, 78,1); color: #ffee00;'>".$tabela."</th></tr>";
              echo "<tr>";
              for ($z=0; $z <count($colunas) ; $z++) {
                echo "<th";
                if ($colunas[$z] == 'codigo'){
                  echo " width='10%'";
                }
                echo">".$colunas[$z]."</th>";
              }
              echo "</tr>";
              while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                  for ($n=0; $n <count($colunas) ; $n++) {
                    if ($colunas[$n]==$coluna) {
                      echo "<td><b>".$linha[$colunas[$n]]."</b></td>";
                    }else{
                      echo "<td>".$linha[$colunas[$n]]."</td>";
                    }
                  }
                echo "</tr>";
              }
            echo "</table>";
          }else if ($coluna != '' and $busca == null){
            $consulta = $PDO->query("SELECT * FROM {$tabela} order by {$coluna};");
            echo "<table border='1 px' class='col l10 offset-l1'>";
              echo "<tr><th colspan='".count($colunas)."' style='background-color: rgba(77, 10, 78,1); color: #ffee00;'>".$tabela."</th></tr>";
              echo "<tr>";
              for ($z=0; $z <count($colunas) ; $z++) {
                echo "<th";
                if ($colunas[$z] == 'codigo'){
                  echo " width='10%'";
                }
                echo">".$colunas[$z]."</th>";
              }
              echo "</tr>";
              while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                  for ($n=0; $n <count($colunas) ; $n++) {
                    if ($colunas[$n]==$coluna) {
                      echo "<td><b>".$linha[$colunas[$n]]."</b></td>";
                    }else{
                      echo "<td>".$linha[$colunas[$n]]."</td>";
                    }
                  }
                echo "</tr>";
              }
            echo "</table>";
          }
        ?>
      </div>
      <div class='col s1 m1 l1'></div>
    </div>
  </body>
</html>
