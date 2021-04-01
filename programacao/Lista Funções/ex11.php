<!DOCTYPE html>
<html lang="pt-BR" />
<head>
  <meta charset="UTF-8" />
  <title>PHP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="css/estilo.css" />
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
</head>
</html>
<body>
  <form action="ex011.php" method="post">
  <fieldset>
  	<legend>Exercicio 11</legend>
      <label>Data: </label><br>
      <input type='date' name='data' required value='<?php echo $data ?>'/><br><br>
      <center><input type='submit' value='Gerar'></center><br>  
  </fieldset>
  </form>
</body>
</html>