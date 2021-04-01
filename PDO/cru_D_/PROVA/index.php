<!DOCTYPE html>
<?php
  include("conexao.php");
  include("funcoes.php");
 ?>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="estilo.css">
  </head>
  <body>
    <center>
    <form action="" method="post">
      Consultar por: <br>
      <input type="radio" name="consulta" value="DATA" <?php if ($busca == 'DATA') {
        echo "checked";
      } ?>>DATA <br>
      <input type="radio" name="consulta" value="TIPO" <?php if ($busca == 'TIPO') {
        echo "checked";
      } ?>>TIPO DE PLANO <br>
      <input type="radio" name="consulta" value="VALOR" <?php if ($busca == 'VALOR') {
        echo "checked";
      } ?>>VALOR <br>
      <hr>
      <div class="" id="data">
        DATA: <br>
        <input type="text" name="dt_inicio" value="<?php if ($dt_inicio != '') {
          echo $dt_inicio;
        } ?>" placeholder="Data inicial"> | <input type="text" name="dt_fim" value="<?php if ($dt_fim != '') {
          echo $dt_fim;
        } ?>" placeholder="Data final"> <br>
        <hr>
      </div>
      <div class="" id="tipo">
        TIPO DE PLANO: <br>
        <select class="" name="plano">
          <option value=""></option>
          <option value="SUS" <?php if ($plano == 'SUS') {
            echo "selected";
          } ?>>SUS</option>
          <option value="PLANO DE SAUDE" <?php if ($plano == 'PLANO DE SAUDE') {
            echo "selected";
          } ?>>PLANO DE SAÚDE</option>
          <option value="PARTICULAR" <?php if ($plano == 'PARTICULAR') {
            echo "selected";
          } ?>>PARTICULAR</option>
          <option value="SOCIAL" <?php if ($plano == 'SOCIAL') {
            echo "selected";
          } ?>>SOCIAL</option>
        </select> <br>
        <hr>
      </div>
      <div class="" id="valor">
        VALOR DA CONSULTA: <br>
        <input type="text" name="valor_inicial" value="<?php if ($valor_inicial != '') {
          echo $valor_inicial;
        } ?>" placeholder="Valor inicial"> | <input type="text" name="valor_final" value="<?php if ($valor_final != '') {
          echo $valor_final;
        } ?>" placeholder="Valor final"> <br>
        <hr>
      </div>
      <button type="submit" name="acao">BUSCAR</button> | <button type="submit" name="limpar" value="true">LIMPAR</button> <br>
      <hr>

    </form>
    <br>
    <form class="" action="" method="post">
      Excluir consultas do
      <select class="" name="excluir_consulta" id="excluir_consulta">
        <option value=""></option>
        <option value="SUS">SUS</option>
        <option value="PLANO DE SAUDE">PLANO DE SAÚDE</option>
        <option value="PARTICULAR">PARTICULAR</option>
        <option value="SOCIAL">SOCIAL</option>
      </select>
      <!-- <button type="submit" name="excluir">EXCLUIR</button> -->


      <!-- <a  href="javascript:deleta('index_ac.php?acao=excluir')"> -->
        <button type="button" name="excluir" onclick="deleta()">EXCLUIR</button>
      <!-- </a> -->


    </form>
    <br>
<?php
  tabela($sql);
 ?>
</center>
  </body>
  <script type="text/javascript">
    function excluir(url){
      if(confirm("Confirmar Exclusão?"))
      location.href = url;
    }
    function deleta(){
      // var op = document.getElementById('excluir_consulta').value;
      var selecao = document.getElementById('excluir_consulta');
      var op = selecao.options[selecao.selectedIndex].value;
      if(op != ""){
        if(confirm("Confirmar Exclusão?"))
        location.href = "index_acao.php?acao=todos&opcao="+op;
      }
    }
  </script>
</html>
