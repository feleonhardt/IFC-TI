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
      $check[] = $_POST['ckb'.$i];
    }
  }
?>
<body>
  <form action="seq4.php" method="post">
  <fieldset>
  	<legend>Exercício 01</legend>
    <select name='selecao[]' id='selecao[]' multiple="multiple">
  		<?php 
        for ($i = 0; $i < count($check); $i++) {
          echo "<option value='".$check[$i]."'>".$check[$i]."</option>";
        }

      ?>
    </select>
  	<br><br><input type="submit" name="Enviar" />
  </fieldset>
  </form>
</body>
</html>