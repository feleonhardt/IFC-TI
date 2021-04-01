<head>
  <meta charset="UTF-8" />
  <title>PHP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="css/estilo.css" />
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
</head>
</html>
<body>
  <form action="ex005.php" method="post">
  <fieldset>
  	<legend>Exercicio 05</legend>
      <label>Taxa Imposto (%): </label><br>
      <input type='number' name='taxaImposto' required value='<?php echo $taxaImposto ?>'/><br><br>
      <label>Custo R$: </label><br>
      <input type='number' name='custo' required value='<?php echo $custo ?>'/><br><br>
      <center><input type='submit' value='Calcular'></center><br>  
  </fieldset>
  </form>
</body>
</html>