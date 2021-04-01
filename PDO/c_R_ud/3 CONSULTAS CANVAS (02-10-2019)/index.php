<!DOCTYPE html>
<?php
include("conexao.php");
include("funcoes.php");
$busca = isset($_POST['nome']) ? $_POST['nome'] : null;
if (isset($_POST['limpa'])) {
  $busca = null;
}
?>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Busca por nome</title>
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="assets/css/materialize.css">
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/materialize.js"></script>
  </head>
  <body class="container">
    <center>
      <?php include("menu.html") ?>
    <form action="" method="post">
      <div class="row">
        <div class=" col s12 l6 offset-l3">
          <div class="input-field">
            <label for="nome">Nome (like)</label>
            <input type="text" name="nome" id="nome" value="<?php if ($busca != null) {echo $busca;} ?>"><br><br>
          </div>
        </div>
        <div class="col s12 l6 offset-l3">
          <button type="submit" name="button" class="btn orange">BUSCAR</button> | <button type="submit" name="limpa" value="true" class="btn orange">LIMPAR</button><br><br>
        </div>
    </div>
    </form>
    <?php
    if ($busca != null) {
      $conexao = $PDO->query("SELECT *, round(((nota1+nota2+nota3)/3),1) as media FROM alunos WHERE nome like '".$busca."%';");
    }else{
      $conexao = $PDO->query("SELECT *, round(((nota1+nota2+nota3)/3),1) as media FROM alunos;");
    }

    table($conexao);

     ?>
   </center>
  </body>
</html>
