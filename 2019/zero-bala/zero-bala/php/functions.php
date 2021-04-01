<?php
//---------------------==={Variaveis}===--------------------------
  //=================== Cadastros Json ===========================
    $cadastros = array();//Array que estarão sendo salvos os cadastros do arquivo Json
    $quantidadeCadastros = 0;//será salvo aqui o número de pessoas cadastradas
  //===================Inputs das Buscas==========================
    $mesAniversario = null;//váriavel que recebe o mês para busca
    $emailPesquisa = '@';//váriavel que recebe o dominio para busca
    $aproximacao = null;//váriavel que recebe a string  para busca
  //=======================Formulários============================
    $nomeFormulario = null;//váriavel que recebe nome dos formulários
    $telefoneFormulario = null;//váriavel que recebe telefone dos formulários
    $emailFormulario = null;//váriavel que recebe email dos formulários
    $dataNascimentoFormulario = null;//váriavel que recebe data_nascimento dos formulários
    $submitFormulario = null;//váriavel que recebe o valor do indice em que será salvo os dados
    $botaoInserir = null;//váriavel que recebe o valor do botão inserir quando ele for clicado
    $botaoAlterar = null;//váriavel que recebe o valor do botão alterar quando ele for clicado
    $botaoExcluir = null;//váriavel que recebe o valor do botão excluir quando ele for clicado
    $pesquisasAvancadas = null;//váriavel que puxa um formulário das pesquisas
    $botaoListar = null;//váriavel que recebe o valor do botão
  //==============================================================
//----------------------------------------------------------------

//----------Pega Cadastros Json e a quantidade Cadastros----------
  function dadosCadastros(){//função geral que será chamada na index
    pegaCadastrosJson();//pega os valores dos cadastros do arquivo JSON e salva em um array
    contaNumeroCadastros();//conta Quantos cadastros existem
  }

  function pegaCadastrosJson(){//pega os valores dos cadastros do arquivo JSON e salva em um array
    $arquivo = file_get_contents('json/cadastros.json');//arquivo Json que será pego
    $GLOBALS['cadastros'] = json_decode($arquivo);//salva no array global cadastros os cadastros
    $cadastrosLocal = $GLOBALS['cadastros'];
  }

  function contaNumeroCadastros(){//conta Quantos cadastros existem
    if ($GLOBALS['cadastros'] == null) {//se não tiver nenhum cadastro
      $GLOBALS['quantidadeCadastros'] = 0;//numero de pessoas cadastradas = 0
    }else{
    $GLOBALS['quantidadeCadastros'] = count($GLOBALS['cadastros']);//salva na variavel global quantidadeCadastros o número de cadastros
    }
  }

//-------------------Recebe todos os dados------------------------
  function recebeDados(){//recebe todos os dados que a página enviou antes de ser atualizada
    dadosCadastros();
    recebeValoresPesquisa();//recebe os valores da pesquisa
    recebeDadosFormulario();//recebe os valores do formulario
    recebeValoresDosBotoes();//rebe os dos botões
  }

  function recebeValoresPesquisa(){//pegaValores dos inputs
      if (isset($_POST['mesAniversario'])) {//se o objeto mesAniversario existir
        $GLOBALS['mesAniversario'] = $_POST['mesAniversario'];//salva na variável global mesAniversario o valor do objeto
      }
      if (isset($_POST['emailPesquisa'])) {//se o objeto email existir
        $GLOBALS['emailPesquisa'] = $_POST['emailPesquisa'];//salva na variável global email o valor do objeto
      }
      if (isset($_POST['aproximacao'])) {//se o objeto aproximacao existir
        $GLOBALS['aproximacao'] = $_POST['aproximacao'];//salva na variável global aproximacao o valor do objeto
        }
    }

  function recebeDadosFormulario(){//recebe dados de um formulário enviado
      if (isset($_POST['nomeFormulario'])) {//se o objeto nomeFormulario existir
        $GLOBALS['nomeFormulario'] = $_POST['nomeFormulario'];//salva na variável global nomeFormulario o valor do objeto
      }
      if (isset($_POST['telefoneFormulario'])) {//se o objeto telefoneFormulario existir
        $GLOBALS['telefoneFormulario'] = $_POST['telefoneFormulario'];//salva na variável global telefoneFormulario o valor do objeto
      }
      if (isset($_POST['emailFormulario'])) {//se o objeto emailFormulario existir
        $GLOBALS['emailFormulario'] = $_POST['emailFormulario'];//salva na variável global emailFormulario o valor do objeto
      }
      if (isset($_POST['dataNascimentoFormulario'])) {//se o objeto dataNascimentoFormulario existir
        $GLOBALS['dataNascimentoFormulario'] = $_POST['dataNascimentoFormulario'];//salva na variável global dataNascimentoFormulario o valor do objeto
      }
      if (isset($_POST['submitFormulario'])) {//se o objeto submitFormulario existir
        $GLOBALS['submitFormulario'] = $_POST['submitFormulario'];//salva na variável global dataNascimentoFormulario o valor do objeto
      }
    }

  function recebeValoresDosBotoes(){//recebe os valore dos botões
      if (isset($_POST['botaoInserir'])) {//se o objeto botaoInserir existir
        $GLOBALS['botaoInserir'] = $_POST['botaoInserir'];//salva na variável global dataNascimentoFormulario o valor do objeto
      }
      if (isset($_POST['botaoAlterar'])) {//se o objeto botaoAlterar existir
        $GLOBALS['botaoAlterar'] = $_POST['botaoAlterar'];//salva na variável global dataNascimentoFormulario o valor do objeto
      }
      if (isset($_POST['botaoExcluir'])) {//se o objeto botaoExcluir existir
        $GLOBALS['botaoExcluir'] = $_POST['botaoExcluir'];//salva na variável global dataNascimentoFormulario o valor do objeto
      }
      if (isset($_POST['pesquisasAvancadas'])) {//se o objeto pesquisasAvancadas existir
        $GLOBALS['pesquisasAvancadas'] = $_POST['pesquisasAvancadas'];//salva na variável global dataNascimentoFormulario o valor do objeto
      }
      if (isset($_POST['botaoListar'])) {//se o objeto botaoListar existir
        $GLOBALS['botaoListar'] = $_POST['botaoListar'];//salva na variável global dataNascimentoFormulario o valor do objeto
      }
    }

//--------------------Verifica quais os dados preechidos----------
  function verificaPreenchimentoDosCampos(){//Todo campo da ultima página é verificado se foi preenchido
    verificaFormularioPesquisa($GLOBALS['mesAniversario'],$GLOBALS['emailPesquisa'],$GLOBALS['aproximacao']);
    verificaPreenchimentoFormulario();
    validaCliqueBotao();
  }

  function verificaFormularioPesquisa($mes, $dominio, $caracteresAproximacao){//Recebe o valor do mês, dominio e string aproximacao
      if ($mes != null and $dominio == '@' and $caracteresAproximacao == null) {//se sómente o mes tiver sido preenchido
        aniversariantes($mes);
      }elseif($mes == null and $dominio != '@' and $caracteresAproximacao == null){//se sómente o Dominio tiver sido preenchido
        dominioEmail($dominio);//roda a função donioEmail
      }elseif($mes == null and $dominio == '@' and $caracteresAproximacao != null){//se sómente o string aproximacao tiver sido preenchido
        nomeAproximacao($caracteresAproximacao);//roda a função nomeAproximacao
      }
    }

  function verificaPreenchimentoFormulario(){//verifica se ao carregar o site recebeu algum formulário
        if ($GLOBALS['nomeFormulario'] != null and
            $GLOBALS['telefoneFormulario'] != null and
            $GLOBALS['emailFormulario'] != null and
            $GLOBALS['dataNascimentoFormulario'] != null and
            $GLOBALS['submitFormulario'] != null){//se todos os cadastros foram preechidos
          $dadosCadastro =//encapsula os dados em um array
          array($GLOBALS['nomeFormulario'],
                $GLOBALS['telefoneFormulario'],
                $GLOBALS['emailFormulario'],
                $GLOBALS['dataNascimentoFormulario']);
          if ($GLOBALS['submitFormulario']<$GLOBALS['quantidadeCadastros']) {//se o indice passado for menor que o número de pessoas cadastradas signica que o cadastro existe
            $GLOBALS['cadastros'][$GLOBALS['submitFormulario']]=$dadosCadastro;//pega o array cadastro global no idice informado e salva os novos dados
          }else{//caso seja um valor maior não existem cadastros com esse indice logo é um novo cadastro
          array_push($GLOBALS['cadastros'], $dadosCadastro);//cria nova posição nos cadastros e salva esses novos dados
          }
          $GLOBALS['cadastros'] = json_encode($GLOBALS['cadastros']);//converte os cadastros em json
          $fp = fopen("json/cadastros.json","w");//abre arquivo json em que ele será salvo
          fwrite($fp, $GLOBALS['cadastros']);//salva os cadastros no arquivo json
          fclose($fp);//fecha o arquivo
          $GLOBALS['cadastros'] = json_decode($GLOBALS['cadastros']);//transforma em um arrai os cadastros novamente
        }
    }

  function validaCliqueBotao(){//verifica se algum botão foi clicado
        if ($GLOBALS['botaoInserir'] == "Inserir") {//se o valor recebido do objeto botaoInserir o botão foi clicado
          formularioCadastro($GLOBALS['quantidadeCadastros']);//Cria formulário que receberá o valor para um novo cadastro
        }elseif ($GLOBALS['botaoAlterar'] != null) {//se o valor recebido do objeto botaoAlterar o botão foi clicado
          formularioCadastro($GLOBALS['botaoAlterar']);//Cria formulário que receberá o valor para alterar o cadastro com o valor do botão clicado
        }elseif ($GLOBALS['botaoExcluir'] != null){//se o valor recebido do objeto botaoExcluir o botão foi clicado
          excluir($GLOBALS['botaoExcluir']);//exclui cadastro com o valor do botão excluir clicado
        }elseif ($GLOBALS['pesquisasAvancadas'] == "pesquisar"){//se o valor recebido do objeto pesquisasAvancadas o botão foi clicado
          formularioPesquisas();//exibe um o formulário
        }elseif ($GLOBALS['botaoListar'] == "listar"){//se o valor recebido do objeto botaoListar o botão foi clicado
          listarTodos();//executa a função que faz a listagem normal
        }
      }

//---------------------Pesquisas Avançadas------------------------
  function aniversariantes($mes){ # ALERT
    $indices = indicesComMes($mes);//Salva os indices dos cadastros que contem pessoas que faça aniversário no mês informado
    if ($indices == false) {//se não tiver nenhum aniversariante ele apresenta a mensagem
      echo "
      <div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>Ooops!</strong> nenhum aniversariante encontrado.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      ";
    }else{//caso contrário ele faz a listagem dos aniversariantes
        tabela($GLOBALS['cadastros'], $indices);
    }
  }

  function indicesComMes($mes){//função que filtra os indices com o determinado mes
    $indices = array();//declara o arry que vai receber os indices
    $cont = 0;//indice do array indices
    $cadastrosLocal = $GLOBALS['cadastros'];//para facilitar a manipulação cadastros Global é passado para um array Local
    for ($i=0; $i <$GLOBALS['quantidadeCadastros'] ; $i++) {//passa por todos os cadastros
        $data = explode("-",$cadastrosLocal[$i][3]);//pega a data de aniversario e separa em dia, mes, e ano
        $mesCadastro = $data[1];//pega a posição em que está o mês
        if($mesCadastro == $mes){//se o mês em que a pessoa nasceu for igual ao informado
          $indices[$cont] = $i;//salva o número de cadastro dessa pessoa
          $cont++;//passa pra proxima posição do vetor
        }
    }
    if(count($indices) == null){//se ela não receber nenhum indice
      return false;//a função retorna o valor booleano falso
    }else{//se tiver algum cadastro
      return $indices;//retorna o vetor com os indices
    }
  }

  //=================funções da busca dominioEmail======================
  function dominioEmail($dominio){ # ALERT
    $indices = indicesComDominio($dominio);//Salva os indices dos cadastros que contem pessoas com o dominio de email informado
    if ($indices == false) {//se não tiver nenhuma pessoa com o dominio informado
      echo "
      <div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>Ooops!</strong> não encontramos nenhum cadastro que possua este domínio.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      ";
    }else{//se tiver alguem com dominio
      tabela($GLOBALS['cadastros'], $indices);
    }
  }

  function indicesComDominio($dominio){//filtra os indices
    $indices = array();//declara o array onde os indices serão salvos
    $cont = 0;//contador responsável pelos indices do array Indices
    $cadastrosLocal = $GLOBALS['cadastros'];//para facilitar a manipulação cadastros Global é passado para um array Local
    for ($i=0; $i <$GLOBALS['quantidadeCadastros'] ; $i++) {//passa por todos os cadastros
        $email = explode('@', $cadastrosLocal[$i][2]);//separa o email da pessoa cadastrada a partir do @ tudo depoi dela será o dominio
        $dominioCadastro = "@".$email[1];//como o arroba faz parte do domino ela é posta de novo
        if($dominioCadastro == $dominio){//se o diminio do cadastro for igual ao informado
          $indices[$cont] = $i;//salva o indice do cadastro no array indices
          $cont++;//prepara a próxima posição do vetor
        }
    }
    if(count($indices) == null){//se o arry indices não tiver recebido nenhum array
      return false;//função retor o valor bolleano falso
    }else{//casso exista algum cadastro com esse dominio
      return $indices;//retorna o array com os indices
    }
  }

  //============funções da busca por aproximação==================
  function nomeAproximacao($caracteresAproximacao){ # ALERT
    $indices = indicesComString($caracteresAproximacao);//Salva os indices dos cadastros que contem pessoas com o dominio de email informado
    if ($indices == false) {//se não tiver nenhuma pessoa com o dominio informado
      echo "
      <div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>Ooops!</strong> nenhum nome semelhante encontrado :(
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      ";
    }else{//se tiver alguem com dominio
      tabela($GLOBALS['cadastros'], $indices);
    }
  }

  function indicesComString($string){//função que filtra os indices
    $indices = array();//array em que os indices serão salvos
    $cont = 0;//indice do array indices
    $cadastrosLocal = $GLOBALS['cadastros'];//para facilitar a manipulação cadastros Global é passado para um array Local
    $stringSeparada = str_split($string);//Pega a string informada e transforma em um array onde cada posição ira conter um carcter da string original
    $numCaracteresString = count($stringSeparada);//conta quantos carcteres a string informada tem
    for ($i=0; $i <$GLOBALS['quantidadeCadastros']; $i++) {//percorre todos os cadastros
      $nome = $cadastrosLocal[$i][0];//salva em uma váriavel o nome do usuário $i
      $nome = str_split($nome);//separa o nome em carcteres
      $numCaracteresNome = count($nome);//conta o numero de caracteres que o nome tera
      $repeticoes = $numCaracteresNome - $numCaracteresString;//a operação vai rodar enquanto tiver um número de carteres no nome maior que a string informada
      for ($x=0; $x <= $repeticoes ; $x++) {//laço de repetição respomsável por percorrer todo o nome
        $stringAux = '';//icia a string que será formada a partir do nome
        for ($q=$x; $q < ($x+$numCaracteresString) ; $q++) {//for responsável por colocar os carcteres na string
         $stringAux = $stringAux.$nome[$q];//contatenação dos carteres
        }
        if ($string == $stringAux) {//se a string formada for igual a que o usuário informou
          // echo "String informada: $string<br>";
          // echo "String feita pelo nome: $string<br>";
          $indices[$cont] = $i;//salva o indice do cadastro no array indices
          $cont++;//prepara a próxima posição do vetor
          $x = $repeticoes;//para a execução do for para que ele vá para o próximo cadastro
        }
      }
    }
    if ($indices != null) {//se algum cadastro tiver se encaixado na busca
      return $indices;//ele retorna o array $indices
    }else{
      return false;//caso não tenha nenhum cadastro o valor informdo a função retorna o valor boleano falso
    }
  }

  function botaoInserir(){//Cria o objeto button Inserir
    echo "
    <form method='post'>
      <button type='submit' class='btn btn-secondary btn-lg btn-block botao' name='botaoInserir' value='Inserir'>Novo</button>
    </form>";//só irá existir um botão iserir que vai executar a mesma função por isso o valor 'Inserir'
  }

  function botaoAlterar($indiceCadastro){//Cria o objeto button Alterar que recebe o indice do cadastro que vai alterar
    echo "
    <form method='post'>
      <button type='submit' class='btn btn-outline-warning btn-sm' name='botaoAlterar' value='$indiceCadastro'>Alterar</button>
    </form>";//o botão vai receber o valor do indice correspondente a sua linha na tabela de cadastros
  }

  function botaoExcluir($indiceCadastro){//Cria o objeto button Excluir que recebe o indice do cadastro que vai exluir
    echo "
    <form method='post'>
      <button type='submit' class='btn btn-outline-danger btn-sm' name='botaoExcluir' value='$indiceCadastro'>Excluir</button>
    </form>";//o botão vai receber o valor do indice correspondente a sua linha na tabela de cadastros
  }

  function botaoPesquisasAvancadas(){//Cria o objeto button pesquisasAvancadas
    echo "
    <form method='post'>
      <button type='submit' class='btn btn-secondary btn-lg btn-block botao' name='pesquisasAvancadas' value='pesquisar'>Pesquisar</button>
    </form>";//só irá existir um botão iserir que vai executar a mesma função por isso o valor 'Inserir'
  }

  function botaoListar(){//Cria botão
    echo "
    <form method='post'>
      <button type='submit' class='btn btn-secondary btn-lg btn-block botao' name='botaoListar' value='listar'>
        Listar
      </button>
    </form>";
  }

  //===================Cria um cabecalhoBotoes na página==========
  function cabecalhoBotoes(){
    if ($GLOBALS['botaoInserir'] == "Inserir") {//se o valor recebido do objeto botaoInserir o botão foi clicado
      return null;
    }elseif ($GLOBALS['botaoAlterar'] != null) {//se o valor recebido do objeto botaoAlterar o botão foi clicado
      return null;
    }elseif ($GLOBALS['botaoExcluir'] != null){//se o valor recebido do objeto botaoExcluir o botão foi clicado
      echo botaoInserir();
      echo botaoPesquisasAvancadas();
      echo botaoListar();
    }elseif ($GLOBALS['pesquisasAvancadas'] == "pesquisar"){//se o valor recebido do objeto pesquisasAvancadas o botão foi clicado
      return null;
    }elseif ($GLOBALS['botaoListar'] == "listar"){//se o valor recebido do objeto botaoListar o botão foi clicado
      echo botaoInserir();
      echo botaoPesquisasAvancadas();
    }else {
      echo botaoInserir();
      echo botaoPesquisasAvancadas();
      echo botaoListar();
    }
  }

  //===================Funções dos botões=========================
  function formularioCadastro($numeroCadastro){//Cria formulário que pede os dados da pessoa e recebe o indice que ele vai salvar nos cadastros
    $cadastrosLocal = $GLOBALS['cadastros'];//Salva os cadastros globais em um array
      if ($numeroCadastro >= ($GLOBALS['quantidadeCadastros'])){//se o indice passado for maior ou igual ao numero de cadastros isso significa que se trata de um novo cadastro
        echo "<form method='post'>";
          echo "
            <div class='form-group row'>
              <label for='inputName' class='col-sm-2 col-form-label'>Nome</label>
              <div class='col-sm-10'>
                <input type='text' class='form-control' name='nomeFormulario' id='inputName' placeholder='Nome'>
              </div>
            </div>
          ";
          echo "
            <div class='form-group row'>
              <label for='inputTel' class='col-sm-2 col-form-label'>Telefone</label>
              <div class='col-sm-10'>
                <input type='text' class='form-control' name='telefoneFormulario' id='inputTel' placeholder='Telefone'>
              </div>
            </div>
          ";
          echo "
            <div class='form-group row'>
              <label for='inputEmail' class='col-sm-2 col-form-label'>Email</label>
              <div class='col-sm-10'>
                <input type='text' class='form-control' name='emailFormulario' id='inputEmail' placeholder='Email'>
              </div>
            </div>
          ";
          echo "
            <div class='form-group row'>
              <label for='inputDataNasc' class='col-sm-2 col-form-label'>Data de Nasc.</label>
              <div class='col-sm-10'>
                <input type='date' class='form-control' name='dataNascimentoFormulario' id='inputDataNasc'>
              </div>
            </div>
          ";
          echo "<center><button type='submit' class='btn btn-primary btn-lg' name='submitFormulario' value='".$numeroCadastro."'>Enviar</button>
          <button type='' class='btn btn-secondary btn-lg' name='' value=''>Cancelar</button><br></center>";
          //O botão recebe o valor do indice do cadastro em que os dados inseridos serão salvos
        echo "</form>";
      }else{//Caso o indice esteja entre cadastros já feitos ele retorna um fomulário já preenchido com os dados desse cadastro
        echo "<form method='post'>
          <label>Alteração do cadastro do senhor(a) <strong>".$cadastrosLocal[$numeroCadastro][0]."</strong></label>";
          echo "
            <div class='form-group row'>
              <label for='inputName' class='col-sm-2 col-form-label'>Nome</label>
              <div class='col-sm-10'>
                <input type='text' class='form-control' name='nomeFormulario' placeholder='nome' value='".$cadastrosLocal[$numeroCadastro][0]."'>
              </div>
            </div>
          ";
          echo "
            <div class='form-group row'>
              <label for='inputTel' class='col-sm-2 col-form-label'>Telefone</label>
              <div class='col-sm-10'>
                <input type='text' class='form-control' name='telefoneFormulario' placeholder='telefone' value='".$cadastrosLocal[$numeroCadastro][1]."'>
              </div>
            </div>
          ";
          echo "
            <div class='form-group row'>
              <label for='inputEmail' class='col-sm-2 col-form-label'>Email</label>
              <div class='col-sm-10'>
                <input type='text' class='form-control' name='emailFormulario' placeholder='e-mail' value='".$cadastrosLocal[$numeroCadastro][2]."'>
              </div>
            </div>
          ";
          echo "
            <div class='form-group row'>
              <label for='inputDataNasc' class='col-sm-2 col-form-label'>Data de Nasc.</label>
              <div class='col-sm-10'>
                <input type='date' class='form-control' name='dataNascimentoFormulario' value='".$cadastrosLocal[$numeroCadastro][3]."'>
              </div>
            </div>
          <center><button type='submit' class='btn btn-primary btn-lg' name='submitFormulario' value='".$numeroCadastro."'>Enviar</button>
          <button type='' class='btn btn-secondary btn-lg' name='' value=''>Cancelar</button><br></center>";
          //O botão recebe o valor do indice do cadastro em que os dados inseridos serão salvos
        echo "</form>";
      }
    }
    //--------Botão excluir----------

  function excluir($indiceCadastro){//função que pega o indice do cadastro e exclui aquele cadastro
          $GLOBALS['cadastros'] = excluiElementoArray($GLOBALS['cadastros'], $indiceCadastro);//exclui um elemento recebido por parametro dos cadastros
          $GLOBALS['cadastros'] = json_encode($GLOBALS['cadastros']);//codifica para json
          $fp = fopen("json/cadastros.json","w");//abre o arquivo json em que será salvo o cadastro
          fwrite($fp, $GLOBALS['cadastros']);//salva a alteração no arquivo json
          fclose($fp);//fecha o arquivo json
          $GLOBALS['cadastros'] = json_decode($GLOBALS['cadastros']);//decodifica os cadastro para um array php novamente
      }

  function excluiElementoArray($vetor, $indice){//função que exlui um elemento do array, ela recebe o array base, e o indice que vai alterar
        $novoArray = array();//array que recebera os dados e será retornado
        for ($i=0; $i <$indice ; $i++) {//repetição ate o ultimo termo antes daquele que será excluido
          $novoArray[$i] = $vetor[$i];//salva o termo do vetor recebido no novo $i em $i
        }
        for ($i=$indice; $i < (count($vetor)-1) ; $i++) {//repetição que começa no indice que será excluido e termina no número de elementos que o novo array terá que é o antigo array -1
          $novoArray[$i] = $vetor[$i+1];//novo array continua com os indices sequentemente, e o $vetor pula o idice excluido para continual
        }//$i em $i+1
        return $novoArray;//retorna o novo array
      }
    //---Botão pesquisasAvançadas----



  function criaVetorComDominios(){
      if ($GLOBALS['quantidadeCadastros']!=0) {
        $emails = array();
        $dominios = array();
        $cadastrosLocal = $GLOBALS['cadastros'];
        for ($i=0; $i < $GLOBALS['quantidadeCadastros']; $i++) {
          $aux = explode("@", $cadastrosLocal[$i][2]);
          $emails[$i] = "@".$aux[1];
        }
          // var_dump($emails);
          $dominios = array_unique($emails);
          return $dominios;
      }
    }

    //----------Botão listar---------
  function listarTodos(){
      $vetorComIndices = array();
      for ($i=0; $i < $GLOBALS['quantidadeCadastros'] ; $i++) {
        $vetorComIndices[$i] = $i;
      }
      tabela($GLOBALS['cadastros'], $vetorComIndices);
    }

    //Cria tabela com todos os cadastros
  function tabela($vetorComcadastros, $vetorComIndices){//Função que cria a tabela/lista recebe o vetor cos os cadsastros e outro com os indices
      retornaEscolhidos($vetorComcadastros, $vetorComIndices);//escreve a tabela
    }

  function criaSelectMeses(){
      echo "
          <label>Meses</label>
          <select name='mesAniversario' class='form-control'>
            <option value=''>Nenhum</option>
            <option value='01'>Janeiro</option>
            <option value='02'>Fevereiro</option>
            <option value='03'>Março</option>
            <option value='04'>Abril</option>
            <option value='05'>Maio</option>
            <option value='06'>Junho</option>
            <option value='07'>Julho</option>
            <option value='08'>Agosto</option>
            <option value='09'>Setembro</option>
            <option value='10'>Outubro</option>
            <option value='11'>Novembro</option>
            <option value='12'>Dezembro</option>
          </select>
      ";
  }
  function criaSelectComDominio(){
      $dominios = criaVetorComDominios();
      echo "
        <label>Domínios</label>
          <select name='emailPesquisa' class='form-control'>
            <option value='@'>Nenhum</option>";
            foreach ($dominios as $key) {
              echo "<option value='$key'>$key</option>";
            }
      echo "</select>";
    }
  function criaInputBuscaAproximacao() {
      echo "

      <label>Pesquisa</label>
      <input type='text' class='form-control medial' placeholder='pesquisa por aproximação' name='aproximacao' value=''>
      <br>
      ";
  }
  function formularioPesquisas(){ //AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
    echo "<form method='post'>";
        echo "
            <div class='row'>
              <div class='col'>
              ".criaSelectMeses()."
              </div>
              <div class='col'>
              ".criaSelectComDominio()."
              </div>
              <div class='col'>
              ".criaInputBuscaAproximacao()."
              </div>
            </div>
              <center>
                <button type='submit' class='btn btn-primary btn-lg' value='Enviar'>Enviar</button>
                <button type='' class='btn btn-secondary btn-lg' name='' value=''>Cancelar</button>
              </center>
              ";
    echo "</form>";
  }
  function cabeçalhoTabela(){//Cria o cabeçalho da Tabela
        echo "
        <form align='right'>
          <button type='submit' class='mask'>x</button>
        </form>
        <br>
        <table class='table table-hover'>
          <caption>Lista de Contatos</caption>
          <thead>
            <tr>
              <th scope='col'>#</th>
              <th scope='col'>Nome</th>
              <th scope='col'>Telefone</th>
              <th scope='col'>E-mail</th>
              <th scope='col'>Data Nasc.</th>
              <th scope='col'>Alterar</th>
              <th scope='col'>Excluir</th>
            </tr>
          </thead>
          <tbody>";
  }
  function retornaEscolhidos($vetorComcadastros, $vetorComIndices){//recebe os cadastros e os indices para imprimir a tabela
      $limite = count($vetorComIndices);//limite conta quantos indices tem
        cabeçalhoTabela();//imprime o cabeçalho da tabela
          for($x=0; $x<$limite; $x++){//executa um for que percorre todos os indices do Vetor com os indices
            $y = $vetorComIndices[$x];//$y é igual indice do primeiro cadastro
            echo "<tr>";//cria linha na tabela
            echo "<th scope='row'>$y</th>";//escreve qual é o indice
            foreach ($vetorComcadastros[$y] as $string){//percorre todos os dados do cadastro com indice $y
              echo "<td>$string</td>";//cria uma celula e dentro escreve o dado
            }
            echo "<td>",botaoAlterar($y),"</td>";//cria uma celula e põe dentro o botão alterar com o indice que ele deve alterar caso clicado
            echo "<td>",botaoExcluir($y),"</td>";
            echo "</tr>";//finaliza a linha
          }
          echo "</tbody>";//encerra o corpo da tabela
          echo "</table>";//encerra a tabela
    }
//----------------------------------------------------------------
?>
