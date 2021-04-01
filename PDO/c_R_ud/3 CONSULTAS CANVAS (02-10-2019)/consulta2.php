<!DOCTYPE html>
<?php
include("conexao.php");
include("funcoes.php");
$busca = isset($_POST['busca']) ? $_POST['busca'] : null;
$nota = isset($_POST['nota']) ? $_POST['nota'] : null;
if (isset($_POST['limpa'])) {
  $busca = null;
  $nota = null;
}
?>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Busca por nota</title>
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
        <div class="col s12 l6 offset-l3">
          <div class="input-field">
            <label for="busca">Nota (<=)</label>
            <input type="text" name="busca" id="busca" value="<?php if ($busca != null) {echo $busca;} ?>"><br>
          </div>
        </div>
        <div class="col s12 l6 offset-l3">
          <div class="row">

        <div class="col s6" style="text-align: right; border-right: 1px solid black; margin-right: 10px;">
          <br><br>
          <div class="row">
            <div class="col s6">
            </div>
            <div class="col s5" style="text-align: right">
              Escolha a nota:
            </div>
          </div>
          <br><br><br>
        </div>
        <div class="col s5" style="text-align: left">
          <p>
            <label>
              <input type="radio" name="nota" value="1" <?php if ($nota == '1') {echo "checked";} ?>><span>Nota 1</span>
            </label>
          </p>
          <p>
            <label>
              <input type="radio" name="nota" value="2" <?php if ($nota == '2') {echo "checked";} ?>><span>Nota 2</span>
            </label>
          </p>
          <p>
            <label>
              <input type="radio" name="nota" value="3" <?php if ($nota == '3') {echo "checked";} ?>><span>Nota 3</span>
            </label>
          </p>
        </div>
      </div>
    </div>
    <div class="col s12 l6 offset-l3">
      <br>
      <button type="submit" name="button" class="btn orange">BUSCAR</button> | <button type="submit" name="limpa" value="true" class="btn orange">LIMPAR</button><br><br>
    </div>
    </div>
    </form>
    <?php
    if ($busca != null and $nota != null) {
      if ($nota == 1) {
        $conexao = $PDO->query("SELECT *, round(((nota1+nota2+nota3)/3),1) as media FROM alunos WHERE nota1 <= '".$busca."';");
      }else if ($nota == 2) {
        $conexao = $PDO->query("SELECT *, round(((nota1+nota2+nota3)/3),1) as media FROM alunos WHERE nota2 <= '".$busca."';");
      }else {
        $conexao = $PDO->query("SELECT *, round(((nota1+nota2+nota3)/3),1) as media FROM alunos WHERE nota3 <= '".$busca."';");
      }
    }else{
      $conexao = $PDO->query("SELECT *, round(((nota1+nota2+nota3)/3),1) as media FROM alunos;");
    }

    table($conexao);

     ?>
   </center>
  </body>
</html>
