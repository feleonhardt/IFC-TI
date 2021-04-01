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
         Tabela: <?php echo $tabela; ?><br>
         <a href="index.php">Alterar tabela</a><br><br>
         Buscar por: <br>
         <?php opcoes($tabela, $esc) ?>
         <br>
         <input type="text" name="busca" value="<?php if($busca != null) echo $busca ?>" placeholder="Digite sua busca..."><br>
         <input type="submit" name="limpar" value="LIMPAR"> <input type="submit" name="buscar" value="BUSCAR"> <br><br>
         <?php
          tabela($consulta, $tabela);
         ?>

       </form>
     </center>


   </body>
 </html>
