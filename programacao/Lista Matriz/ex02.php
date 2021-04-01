<!DOCTYPE html>
<html lang="pt-BR" />
<head>
  <meta charset="UTF-8" />
  <title>PHP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="css/estilo.css" />
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
</head>
<?php
  $linhas = " ";
    if(isset($_POST['linhas'])){
      $linhas = $_POST['linhas'];
    }
  $colunas = " ";
    if(isset($_POST['colunas'])){
      $colunas = $_POST['colunas'];
    }
?>
</html>
<body>
  <form action="" method="post">
  <fieldset>
  	<legend>Exercicio 02</legend>
      <label>Número de linhas: </label><br>
      <input type='number' name='linhas' required value='<?php echo $linhas ?>'/><br><br>
      <label>Número de colunas: </label><br>
      <input type='number' name='colunas' required value='<?php echo $colunas ?>'/><br><br>
      <input type='submit' value='Gerar'>

    <?php
      $matriz = array();

      for ($lin = 0; $lin < $linhas; $lin++) { 
          for ($col = 0; $col < $colunas; $col++) { 
            $matriz[$lin][$col] = rand(0,20);
          }
        }

        echo "<h3>";
        for ($lin = 0; $lin < $linhas ; $lin++) { 
            for ($col = 0; $col < $colunas ; $col++) { 
              echo $matriz[$lin][$col]." | ";

            }
            echo "<br>----------------<br>";
        }
        echo "</h3>";
    ?>
  </fieldset>
  </form>
</body>
</html>