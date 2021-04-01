<!DOCTYPE html>
<html lang="pt-BR" />
<head>
  <meta charset="UTF-8" />
  <title>PHP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="../css/estilo.css" />
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
</head>
<?php
  $texto = "";
  if(isset($_POST['rd'])){
      $texto = $_POST['rd'];
    }
?>
<body>
  <form action="seq5.php" method="post">
  <fieldset>
  	<legend>Exercício 01</legend>
    <?php 
      echo "<h1>Parabéns...</h1>";
      echo "<input type='text' value='".$texto."' readonly ><br>";
    ?>
  	<br><br><input type="submit" name="Enviar" />
  </fieldset>
  </form>
</body>
</html>