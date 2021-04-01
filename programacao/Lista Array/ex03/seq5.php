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
        $radio [] = $_POST['ckb'.$i];
      }
  }
?>
<body>
  <form action="seq6.php" method="post">
  <fieldset>
    <legend>Exercício 03</legend>
      <?php 
        for ($i = 0; $i < count($radio); $i++) {
          echo "<input type='radio' name='rd' id='rd".$i."' value='".$radio[$i]."'>".$radio[$i]."<br>";
         }
      ?>
    <br><br><input type="submit" name="Enviar" />
  </fieldset>
  </form>
</body>
</html>