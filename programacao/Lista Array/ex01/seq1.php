<!DOCTYPE html>
<html lang="pt-BR" />
<head>
  <meta charset="UTF-8" />
  <title>PHP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="../css/estilo.css" />
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
</head>
<body>
  <form action="seq2.php" method="post">
  <fieldset>
  	<legend>Exercício 01</legend>
  		<?php 
        for ($i = 0; $i < 10; $i++) {
          echo "<input type='text' name='valor".$i."' required/><br><br>";
        }
      ?>
  	<input type="submit" name="Enviar" />
  </fieldset>
  </form>
</body>
</html>