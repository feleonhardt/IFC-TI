<!DOCTYPE html>
<html>
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
  	<legend>Exercicio 01</legend>
      <?php 
          for ($j = 0; $j <= 2 ; $j++) { 
            for ($i = 0; $i <= 2 ; $i++) { 
              echo $j.$i." ";
            }
            echo "<br>";
          }
      ?>
  </fieldset>
  </form>
</body>
</html>