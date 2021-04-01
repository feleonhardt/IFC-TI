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
      $valor[$i] = isset($_POST['valor'.$i])?$_POST['valor'.$i]:"";
    }
?>
<body>
  <form action="seq3.php" method="post">
  <fieldset>
  	<legend>Exercício 01</legend>
  		<?php 
        for ($i = 0; $i < count($valor); $i++) {
            echo "<input type='checkbox' name='ckb".$i."' id='ckb".$i."' value='".$valor[$i]."'>".$valor[$i]."<br>";
          }
      ?>
  	<br><input type="submit" name="Enviar" />
  </fieldset>
  </form>
</body>
</html>