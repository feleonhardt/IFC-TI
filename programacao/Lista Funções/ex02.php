<head>
  <meta charset="UTF-8" />
  <title>PHP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="css/estilo.css" />
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
</head>
</html>
<body>
  <form action="ex002.php" method="post">
  <fieldset>
  	<legend>Exercicio 02</legend>
      <label>Número: </label><br>
      <input type='number' name='n' required value='<?php echo $n ?>'/><br><br>
      <center><input type='submit' value='Gerar'></center><br>  
  </fieldset>
  </form>
</body>
</html>