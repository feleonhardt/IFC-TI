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
  $check = array();
  if(isset($_POST['selecao'])){
      $check = $_POST['selecao'];
  }
?>
<body>
  <form action="seq4.php" method="post">
  <fieldset>
  	<legend>Exercício 02</legend>
    <?php 
      for ($i = 0; $i < count($check); $i++) {
        echo "<input type='checkbox' name='ckb".$i."' id='ckb".$i."' value='".$check[$i]."'>".$check[$i]."<br>";
       }
    ?>
  	<br><br><input type="submit" name="Enviar" />
  </fieldset>
  </form>
</body>
</html>