<head>
  <meta charset="UTF-8" />
  <title>PHP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="css/estilo.css" />
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
</head>
</html>
<body>
  <form action="ex003.php" method="post">
  <fieldset>
  	<legend>Exercicio 03</legend>
      <label>Número 1: </label><br>
      <input type='number' name='n1' required value='<?php echo $n1 ?>'/><br><br>
      <label>Número 2: </label><br>
      <input type='number' name='n2' required value='<?php echo $n2 ?>'/><br><br>
      <label>Número 3: </label><br>
      <input type='number' name='n3' required value='<?php echo $n3 ?>'/><br><br>
      <center><input type='submit' value='Somar'></center><br>  
  </fieldset>
  </form>
</body>
</html>