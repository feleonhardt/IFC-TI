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
     <title></title>


   </head>
   <body>
     <center>
       <form action="" method="post">
         <input type="text" name="busca" value="" placeholder="Por código...">
         <input type="submit" name="buscar" value="BUSCAR"> <br><br>
         <?php
          tabela($consulta);
         ?>

       </form>
     </center>


   </body>
 </html>
