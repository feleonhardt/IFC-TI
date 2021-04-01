<?php
  include "funcoes.php";

  $pesquisa = isset($_POST['pesquisa']) ? $_POST['pesquisa'] : '';
  $salva = isset($_POST['salva']) ? $_POST['salva'] : '';
  if (isset($_POST['dominios'])) {
    if ($_POST['dominios'] != "ok") {
      $pesquisa = $_POST['dominios'];
    }
  }
  if (isset($_POST['meses'])){
    if ($_POST['meses'] != "ok") {
      $pesquisa = $_POST['meses'];
    }
  }
  $campo_pesquisa = isset($_POST['campo_pesquisa']) ? $_POST['campo_pesquisa'] : '';
  if (isset($_POST['apagar'])) {
    if ($_POST['apagar'] != '') {
      $salva = -99;
    }
  }
  if ($salva != '') {
    $campo_pesquisa = '';
  }
  if (isset($_POST['apagar'])) {
    excluir($_POST['apagar']);
  }
  if (isset($_POST['add_nome'])) {
    adicionaContato(strtoupper($_POST['add_nome']), $_POST['add_fone'], strtolower($_POST['add_email']), $_POST['add_nascimento']);
  }
  if ($salva != '' and $salva != -99) {
    salvaAlteracao($_POST['salva'], strtoupper($_POST['novo_nome']), strtolower($_POST['novo_email']), $_POST['novo_telefone'], $_POST['novo_nascimento']);
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>AGENDA DE CONTATOS</title>
    <link rel="stylesheet" href="assets/css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="assets/js/jQuery1.js"></script>
    <script>
      $(document).ready(function(){
        $("#campo_pesquisa").change(function() {
         var campo_pesquisa = ($('#campo_pesquisa option:selected').val());
         if ((campo_pesquisa) == "domi"){
       			$("#input_pesquisa").css("display", "none");
            $("#input_hidden").css("display", "none");
            $("#input_mes").css("display", "none");
            $("#input_dominios").css("display", "block");
            $("#input_travado").attr('disabled', true);
       		}else if ((campo_pesquisa) == "mes"){
        		$("#input_pesquisa").css("display", "none");
            $("#input_dominios").css("display", "none");
            $("#input_hidden").css("display", "none");
            $("#input_mes").css("display", "block");
            $("#input_travado").attr('disabled', true);
        	}else if ((campo_pesquisa) == "nome" || (campo_pesquisa) == "fone" || (campo_pesquisa) == "data" || (campo_pesquisa) == "email") {
            $("#pesquisa").val("");
            $("#meses").val("ok");
            $("#dominios").val("ok");
            $("#input_dominios").css("display", "none");
            $("#input_mes").css("display", "none");
            $("#input_hidden").css("display", "none");
            $("#input_pesquisa").css("display", "block");
            $("#input_travado").attr('disabled', false);
          }else{
            $("#input_mes").css("display", "none");
            $("#input_dominios").css("display", "none");
         		$("#input_pesquisa").css("display", "none");
         	}
        });
      });
    </script>
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
          <center>
            <h5>ADICIONAR CONTATOS</h5>
          </center>
          <div class="card-body">
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input type="text" id="add_nome" name="add_nome" value="" class="validate" required>
                <label for="add_nome">Nome</label>
              </div>
              <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input type="email" id="add_email" name="add_email" value="" class="validate" required>
                <label for="add_email">Email</label>
              </div>
              <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">phone</i>
                <input type="text" id="add_fone" name="add_fone" value="" class="validate" required>
                <label for="add_fone">Telefone</label>
              </div>
              <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">date_range</i>
                <input type="date" id="add_nascimento" name="add_nascimento" value="" class="validate" placeholder="" required>
                <label for="add_nascimento">Data de Nascimento</label>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn-large waves-effect waves-blue-grey deep-orange darken-1 modal-close" type="reset" name="cancela" value="">CANCELAR<i class="material-icons right">clear</i></button>
            <button class="btn-large waves-effect waves-blue-grey deep-orange darken-1" type="submit" name="acao" value="">ENVIAR<i class="material-icons right">send</i></button>
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
                  <div class="col s0 m0 l1"></div>
                  <div class="col s12 m12 l2">
                    <div class="input-field col s12 m12 l12">
                      <select id="campo_pesquisa" name="campo_pesquisa">
                        <option value="" disabled selected >Filtrar por:</option>
                        <option value="nome" <?php if($campo_pesquisa == 'nome' and $salva == '') echo "selected" ?>>Nome</option>
                        <option value="fone" <?php if($campo_pesquisa == 'fone' and $salva == '') echo "selected" ?>>Telefone</option>
                        <option value="domi" <?php if($campo_pesquisa == 'domi' and $salva == '') echo "selected" ?>>Domínio</option>
                        <option value="email" <?php if($campo_pesquisa == 'email' and $salva == '') echo "selected" ?>>E-mail</option>
                        <option value="mes" <?php if($campo_pesquisa == 'mes' and $salva == '') echo "selected" ?>>Aniversário</option>
                        <option value="data" <?php if($campo_pesquisa == 'data' and $salva == '') echo "selected" ?>>Data</option>
                      </select>
                      <!-- <label>Filtrar por:</label> -->
                    </div>
                  </div>
                  <div id="input_hidden" class="input-field col s12 m12 l7"  style="<?php
                    if ((!empty($campo_pesquisa) and empty($salva))) {
                      echo "display: none;";
                    }else {
                      echo "display: block;";
                    }
                    ?>">
                    <input type="text" name="" disabled value="" placeholder="Escolha um filtro...">
                  </div>
                  <div id="input_dominios" class="input-field col s12 m12 l7"  style="<?php
                    if ($campo_pesquisa != 'domi') {
                      echo "display: none;";
                    }else {
                      echo "display: block;";
                    } ?>">
                    <select class="" id="dominios" name="dominios">
                      <option disabled selected value="ok">Buscar por:</option>
                      <?php
                      dominio();
                       ?>
                    </select>
                  </div>
                  <div id="input_mes" class="input-field col s12 m12 l7"  style="<?php
                    if ($campo_pesquisa != 'mes') {
                      echo "display: none;";
                    }else {
                      echo "display: block;";
                    } ?>">
                    <select class="" id="meses" name="meses">
                      <option disabled selected value="ok">Buscar por:</option>
                      <?php
                      meses();
                       ?>
                    </select>
                  </div>
                  <div id="input_pesquisa" class="input-field col s12 m12 l7" style="<?php
                    if ($campo_pesquisa == 'nome' or $campo_pesquisa == 'fone' or $campo_pesquisa == 'data') {
                      echo "display: block;";
                    }else{
                      echo "display: none;";
                    } ?>">
                    <input type="text"  name="pesquisa" id="pesquisa"
                      <?php
                      if ($pesquisa != '' and $salva == '') {
                        echo 'value="'.$pesquisa.'"';
                      }
                      ?> placeholder="Buscar por:" >
                  </div>
                  <div class="input-field col s12 m12 l1">
                    <button class="btn waves-effect waves-blue-grey deep-orange darken-1" type="submit" name="pesquisar"><i class="material-icons">search</i>Buscar</button>
                  </div>
                  <div class="col s0 m0 l1"></div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="col s2 center input-field">
          <button class="btn-large waves-effect waves-blue-grey deep-orange darken-1 modal-trigger" href="#add"><i class="material-icons">person_add</i></button>
        </div>
      </div>
      <div class="row">
        <div class="col s1 m1 l1"></div>
        <div class="col s10 m10 l10">
          <div class="card deep-orange lighten-5">
            <?php
            if (isset($_POST['altera'])) {
              alterar($_POST['altera']);
            }else {
              apresentarTabela();
            }
            ?>
          </div>
          <div class="col s1 m1 l1"></div>
        </div>
      </div>
    </form>
    <script src="assets/js/materialize.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('.modal').modal({

        });
        $('.collapsible').collapsible();
        $('select').formSelect();
        $('.chips').chips();
      });
    </script>
  </body>
</html>
