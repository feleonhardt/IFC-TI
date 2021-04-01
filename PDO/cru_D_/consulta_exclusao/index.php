<?php
  include_once "assets/conf/default.inc.php";
  require_once "assets/conf/Conexao.php";
  $pdo = Conexao::getInstance();
  $tabela = isset($_POST['tabela']) ? $_POST['tabela'] : "";
 ?>

 <!DOCTYPE html>
 <html lang="pt-br">
   <head>
     <meta charset="utf-8">
     <title></title>


   </head>
   <body>
     <center>
       <form action="" method="post" style="padding-top: 15%;">
         Tabela: <br><br>
         <button type="submit" name="tabela" value="estados">Estados</button><br>
         <button type="submit" name="tabela" value="clientes">Clientes</button><br>
         <button type="submit" name="tabela" value="vendedores">Vendedores</button><br>
         <button type="submit" name="tabela" value="jogadores">Jogadores</button><br>
         <button type="submit" name="tabela" value="times">Times</button><br>

       </form>
     </center>

<?php
$dados_json= json_encode($tabela);
$fp = fopen("table.json", "w");
$escreve = fwrite($fp, $dados_json);
fclose($fp);
if (json_decode($dados_json)!="") {
  header('location:tabela.php');
}
 ?>
   </body>
 </html>
