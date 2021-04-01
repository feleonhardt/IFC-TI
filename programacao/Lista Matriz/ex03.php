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
  	<legend>Exercicio 03</legend>
    </fieldset>
    <?php
      "<label>Número de linhas: </label><br>";
      "<input type='number' name='linhas' required value='<?php echo $linhas ?>'/><br><br>";
      "<label>Número de colunas: </label><br>";
      "<input type='number' name='colunas' required value='<?php echo $colunas ?>'/><br><br>";
      "<input type='submit' value='Gerar'><br>";

      $matriz = array();
      
      $nSorteado = 0;
      $nRepete = true;
      echo "<h3>";
        for ($lin = 0; $lin < $linhas; $lin++) { 
          for ($col = 0; $col < $colunas; $col++) { 
            $nSorteado = rand(0, 20);
            $nRepete = verificar($matriz, $nSorteado);
            if ($nRepete == false) {
              $matriz[$lin][$col] = $nSorteado;
              echo $matriz[$lin][$col]." | ";
            } 
            else {
              $col--;
            }
          }
          echo "<br>----------------<br>";
        }
      echo "</h3>";

      function verificar($matriz, $nSorteado)
      {
          $repete = false;
          foreach ($matriz as $linhas) {
              foreach ($linhas as $value) {
                  if ($nSorteado == $value) {
                      $repete = true;
                      return true;
                      break;
                  }
              }
          }
          if ($repete == false) {
              return false;
          }
      }
    ?>
  </fieldset>
  </form>
</body>
</html>