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
  $qtdtext = "";
  if(isset($_POST['qtdtext'])){
      $qtdtext = $_POST['qtdtext'];
    }
  for ($i = 0; $i < $qtdtext; $i++) { 
      if(isset($_POST['ckb'.$i])){
        $select[] = $_POST['ckb'.$i];
      }
    }
?>
<body>
  <form action="seq4.php" method="post">
  <fieldset>
  	<legend>Exercício 03</legend>
      <select name='selecao[]' id='selecao[]' multiple="multiple">
      <?php 
        for ($i = 0; $i < count($select); $i++) {
          echo "<option value='".$select[$i]."'>".$select[$i]."</option>";
        }
        echo "<input type='hidden' name='qtdtext' value='$qtdtext'><br>";
      ?>
    </select>
  	 <br><br><input type="submit" name="Enviar" />
  </fieldset>
  </form>
</body>
</html>