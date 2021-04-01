<?php
  include_once "assets/conf/default.inc.php";
  require_once "assets/conf/Conexao.php";
  $pdo = Conexao::getInstance();
  include("funcoes.php");

 ?>
 <!DOCTYPE html>
 <html lang="pt-br">
   <head>
     <meta charset="utf-8">
     <script src="assets/js/jQuery.js" charset="utf-8"></script>
     <script src="assets/js/tela.js" charset="utf-8"></script>
     <link rel="stylesheet" href="estilo.css">
     <title></title>
   </head>
   <body>
     <center>
     <div class="" id="pesquisa_avancada">
       <form action="" method="post">
         Buscar por: <br>
         <select class="" name="esc" id="esc">
           <option value="">Selecione a busca</option>
           <option value="LOCAL"<?php if ($esc == "LOCAL") {
             echo " selected";
           } ?>>Localização </option>
           <option value="VALOR"<?php if ($esc == "VALOR") {
             echo " selected";
           } ?>>Valor de passagem </option>
           <option value="DATA"<?php if ($esc == "DATA") {
             echo " selected";
           } ?>>Data de voo </option>
           <option value="CHECK"<?php if ($esc == "CHECK") {
             echo " selected";
           } ?>>Check-in </option>
         </select><br>
         <div class="campos" id="campos"<?php if ($esc == "LOCAL" or $esc == "VALOR" or $esc == "DATA") {
           echo " style='display: block'";
         }else {
           echo " style='display: none'";
         } ?>>
           <input type="text" name="inicial" value="<?php if ($inicial != null) {
             echo $inicial;
           } ?>" placeholder="Inicial..."><br>
           <input type="text" name="final" value="<?php if ($final != null) {
             echo $final;
           } ?>" placeholder="Final..."><br>
         </div>
         <div class="select" id="select"<?php if ($esc == "CHECK") {
           echo " style='display: block'";
         }else {
           echo " style='display: none'";
         } ?>>
           <select class="" name="checkin">
             <option value="SIM"<?php if ($esc == "CHECK" and $checkin == "SIM") {
               echo " selected";
             } ?>>SIM</option>
             <option value="NAO"<?php if ($esc == "CHECK" and $checkin == "NAO") {
               echo " selected";
             } ?>>NÃO</option>
           </select>
         </div>
         <input type="submit" name="acao" value="BUSCAR"> | <button type="submit" name="limpar" value="true">LIMPAR</button>
       </form>
     </div>
     <a href="javascript:excluir('index_acao.php?excluir=checkin')">Excuir passagens sem check-in</a>
     <?php
     // $consulta = $pdo->query("SELECT * FROM passagens;");
        tabela($consulta);
      ?>
    </center>
   </body>
 </html>
