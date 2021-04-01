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
  for ($i = 0; $i < 10; $i++) { 
    if(isset($_POST['ckb'.$i])){
      $select[] = $_POST['ckb'.$i];
    }
  }
?>
<body>
  <form action="" method="post">
  <fieldset>
  	<legend>Exercício 02</legend>
    <select name='selecao[]' id='selecao[]'>
    <?php 
      for ($i = 0; $i < count($select); $i++) {
        echo "<option value='".$select[$i]."'>".$select[$i]."</option>";
      }
    ?>
    </select>
  	<br><br><input type="submit" name="Enviar" />
  </fieldset>
  </form>
</body>
</html>