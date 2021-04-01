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
  $radio = array();
  if(isset($_POST['selecao'])){
      $radio = $_POST['selecao'];
    }
?>
<body>
  <form action="seq5.php" method="post">
  <fieldset>
  	<legend>Exercício 01</legend>
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