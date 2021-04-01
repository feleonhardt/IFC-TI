<!DOCTYPE html>
<html lang="pt-br">
    <?php
        include 'funcoes.php';

        $alterar = isset($_POST['altera']) ? $_POST['altera']: "";
        $salva = isset($_POST['salva']) ? $_POST['salva'] : '';
        $novo_nome = isset($_POST['novo_nome']) ? ($_POST['novo_nome']) : '';
        $novo_telefone = isset($_POST['novo_telefone']) ? $_POST['novo_telefone'] : '';
        $novo_email = isset($_POST['novo_email']) ? ($_POST['novo_email']) : '';
        $novo_nascimento = isset($_POST['novo_nascimento']) ? $_POST['novo_nascimento'] : '';
        $salva = isset($_POST['salva']) ? $_POST['salva'] : '';


        $nome = isset($_POST['nome']) ? $_POST['nome']: "";

        $email = isset($_POST['email']) ? $_POST['email']: "";

        $telefone = isset($_POST['telefone']) ? $_POST['telefone']: "";

        $datadenascimento = isset($_POST['datadenascimento']) ? $_POST['datadenascimento']: "";

        $apresentarJSON = json_decode(file_get_contents("cadastro.json"));

        if (!empty($apresentarJSON) || !empty($_POST)) {

            $cadastrar = $apresentarJSON;

            if (!empty($nome)) {

                $cadastrar[] = [

                    'nome' => $nome,

                    'telefone' => $telefone,

                    'email' => $email,

                    'datadenascimento' => $datadenascimento
                ];
            }

            $open = fopen("cadastro.json", "w");

            fwrite($open, json_encode($cadastrar));

            fclose($open);

            $apresentarJSON = file_get_contents("cadastro.json");

            $apresentarJSON = json_decode($apresentarJSON);

       }

    ?>
<head>
    <title>
         SpaceContact
    </title>
    <!-- Possibilita por icons -->
    <link href="components/css/material-icons.css" rel="stylesheet">
    <!-- Icon da página -->
    <link rel="icon" href="components/img/logo.png" type="image/png" />
    <!-- Link Materialize -->
    <link href="components/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <!-- Componentes da barra de navegação -->
    <link href="components/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>

    <!-- Cabeçalho -->
    <header>
       <div class="navbar-fixed">
            <nav  style="background-color: #0d0b32" role="navigation">
                <div class="nav-wrapper container">
                    <img src="components/img/logo.png" width="50px">
                    <a id="logo-container"  class=" white-text brand-logo">
                        SpaceContact
                    </a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Imagem de fundo -->
    <!-- <div class="parallax-container">
        <div class="parallax parallax-image"><img src="components/img/galaxia.jpg"></div>
    </div> -->

    <!-- Conteúdo -->

    <main>
        <div class="container">
            <div class="section">
                <!-- Pesquisa -->
                <h3 class="center-align">Pesquisar</h3>
                <div>
                  <form action="" method="post">
                      <div class="row">
                          <div class="input-field col m6 s12 l5">
                              <i class="material-icons prefix">search</i>
                              <input id="icon_prefix" type="text" name="pesquisando" placeholder="Pesquisar" value="">
                               <?php
                                  $pesquisando=isset($_POST['pesquisando']) ? $_POST['pesquisando'] : "";
                                  if ($pesquisando != '') {
                                    Search($pesquisando);
                                  }
                                ?>
                          </div>
                          <div class="input-field col m6 s12 l4">
                              <select name="filtro">
                                  <option value="nenhum" selected disabled>Escolha uma opção</option>
                                  <option value="nome">Nome</option>
                                  <option value="email" >E-mail</option>
                                  <option value="telefone">Telefone</option>
                                  <option value="datadenascimento">Data de Nascimento</option>
                              </select>
                              <label>Filtrar</label>
                          </div>
                          <div class="col s6 offset-s3 m12 l3">
                              <center>
                                  <button name="search" class="waves-effect waves-light btn-flat" style="margin-top: 14px;"><i class="material-icons right">send</i>Pesquisar</button>
                              </center>
                          </div>
                      </div>
                  </form>
              </div>
          </div>

            <!-- Tabela -->
            <div class="row" id="tabela">
                <h3 class="center-align">Tabela</h3>
                <div>
                    <div class="row">
                        <div class="input-field col s12">
                            <table class="striped responsive-table centered">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Telefone</th>
                                        <th>E-mail</th>
                                        <th>Data de Nascimento</th>
                                        <th>Alterar</th>
                                        <th>Excluir</th>
                                    </tr>
                                </thead>

                                <tbody>
                                  <form action="" method="post">
                                    <?php
                                    if ($salva != '') {
                                      salvaAlteracao($salva, $novo_nome, $novo_email, $novo_telefone, $novo_nascimento);
                                    }
                                    if ($alterar != '') {
                                      alterar($alterar);
                                    }else{
                                      apresentar($apresentarJSON);
                                    }
                                    ?>
                                    </tr>
                                  </form>
                                     <?php  Inserir(); ?>
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Rodapé -->
    <footer class="page-footer white">
        <div class="footer-copyright white">
            <div class="container white right-align black-text">
                 © 2019, Designed by Maria and Paula
            </div>
        </div>
    </footer>


    <!--  Scripts-->
    <!-- <script src="components/js/jquery-2.1.1.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="components/js/materialize.js"></script>
    <script src="components/js/init.js"></script>


</body>
</html>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
