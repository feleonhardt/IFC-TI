<?php
  include "funcoes.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>AGENDA DE CONTATOS</title>
    <link rel="shortcut icon" href="assets/img/icone3.jpg">
    <link rel="stylesheet" href="assets/css/materialize.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/google_fonts.css">
    <script src="assets/js/jQuery.js"></script>
    <script src="assets/js/funcoes.js"></script>
  </head>
  <body>
    <nav>
      <form method="post">
      <div class="nav-wrapper blue-grey darken-4 z-depth-5">
        <div class="row">
          <div class="col s12 m10 l10 push-l1">
            <div class="col s10 m11 l11">
              <a href="#" class="brand-logo">AGENDA</a>
            </div>
            <div class="col s2 m1 l1">
              <button class="btn-floating waves-effect waves-blue-grey deep-orange darken-1 modal-trigger pulse" href="#add"><i class="material-icons">person_add</i></button>
            </div>
          </div>
        </div>
      </div>
    </form>
    </nav>
    <!-- MODAL para adicionar contato -->
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
                <input type="text" id="add_nome" name="add_nome" onkeyup="alteraMaiusculo()" value="" class="validate" required>
                <label for="add_nome">Nome</label>
              </div>
              <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input type="email" id="add_email" name="add_email" value="" class="validate" required>
                <label for="add_email">Email</label>
              </div>
              <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">phone</i>
                <input type="tel" id="add_fone" name="add_fone" value="" maxlength="16" pattern="\([0-9]{2}\)[\s][0-9]{1}[\s][0-9]{4}-[0-9]{4}" onkeypress="mascara(this)" class="validate"  placeholder="(xx) x xxxx-xxxx" required>
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
        <div class="col s0 m1 l1"></div>
        <div class="col s12 m10 l10 ">
          <!-- QUADRO filtrar -->
          <ul class="collapsible popout z-depth-5 deep-orange lighten-5">
            <li id="branco">

              <!-- CABECALHO do filtrar -->
              <div id="branco" class="collapsible-header input-field z-depth-5 deep-orange lighten-5">
                <i class="material-icons">filter_list</i>Filtrar
                  <?php
                  if ($pesquisa != '' and $salva == ''){
                    notificacao($campo_pesquisa, $pesquisa);
                    echo '<div class="right">';
                    // BUTTON para limpar a pesquisa (só aparece quando existir pesquisa)
                      echo '<button class="btn-small waves-effect waves-blue-grey deep-orange darken-1" name="salva" value="-99">Limpar</button>';
                    echo '</div>';
                  }
                  ?>
              </div>

              <!-- CORPO do filtrar -->
              <div id="branco" class="collapsible-body  deep-orange lighten-5">
                <div class="row" id="sem_margim">

                  <!-- SELECT para filtar a pesquisa -->
                  <div class="col s12 m12 l2">
                      <select id="campo_pesquisa" name="campo_pesquisa">
                        <option class="disabled" value="" disabled selected >Filtrar por:</option>
                        <option value="nome" <?php if($campo_pesquisa == 'nome' and $salva == '') echo "selected" ?>>Nome</option>
                        <option value="fone" <?php if($campo_pesquisa == 'fone' and $salva == '') echo "selected" ?>>Telefone</option>
                        <option value="domi" <?php if($campo_pesquisa == 'domi' and $salva == '') echo "selected" ?>>Domínio</option>
                        <option value="email" <?php if($campo_pesquisa == 'email' and $salva == '') echo "selected" ?>>E-mail</option>
                        <option value="mes" <?php if($campo_pesquisa == 'mes' and $salva == '') echo "selected" ?>>Mês</option>
                        <option value="data" <?php if($campo_pesquisa == 'data' and $salva == '') echo "selected" ?>>Data</option>
                      </select>
                  </div>

                  <!-- INPUT hidden para exigir a escolha de um filtro -->
                  <div id="input_hidden" class="col s12 m12 l8"  style="<?php
                    if ((!empty($campo_pesquisa) and empty($salva))) {
                      echo "display: none;";
                    }else {
                      echo "display: block;";
                    }
                    ?>">
                    <input type="text" name="" disabled value="" placeholder="Escolha um filtro...">
                  </div>

                  <!-- SELECT para selecionar o dominio a ser pesquisado -->
                  <div id="input_dominios" class="col s12 m12 l8"  style="<?php
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

                  <!-- SELECT para selecionar o mes a ser pesquisado -->
                  <div id="input_mes" class="col s12 m12 l8"  style="<?php
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

                  <!-- INPUT para pesquisa por nome, telefone, e-mail e data -->
                  <div id="input_pesquisa" class="col s12 m12 l8" style="<?php
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
                  <div class="col s12 m12 l2">
                    <!-- BUTTON para realizar a pesquisa -->
                    <button class="btn-large waves-effect waves-blue-grey deep-orange darken-1" type="submit" name="pesquisar"><i id="menor" class="material-icons">search</i></button>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="col s1 m1 l1"></div>
      </div>
      
      <!-- APRESENTACAO da tabela -->
      <div class="row">
        <div class="col s0 m1 l1"></div>
        <center>
        <div class="col s12 m10 l10">
          <div class="card deep-orange lighten-5 z-depth-5">
            <?php
            tabela();
             ?>
          </div>
        </center>
          <div class="col s0 m1 l1"></div>
        </div>
      </div>

    </form>
    <script src="assets/js/materialize.js"></script>
    <script src="assets/js/init.js"></script>
  </body>
</html>
