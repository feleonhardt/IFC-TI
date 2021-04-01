<head>
  <meta charset="UTF-8" />
  <title>PHP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="css/estilo.css" />
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
</head>
</html>
<body>
  <form action="ex013.php" method="post">
  <fieldset>
  	<legend>Exercicio 13</legend>
      <label>Linhas: </label>
      <input type="number" name="linhas" required value="<?php echo $linhas ?>">
      <br><br>
      <label>Colunas: </label>
      <input type="number" name="colunas" required value="<?php echo $colunas ?>">
      <br><br>
      <input type="submit" value="Enviar">
  </fieldset>
  </form>
</body>
</html>