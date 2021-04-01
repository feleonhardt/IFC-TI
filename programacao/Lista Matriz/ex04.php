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
  for ($lin = 0; $lin < 4 ; $lin++) {
    for ($col = 0; $col < 2 ; $col++) {
        $matriz[$lin][$col] = isset($_POST['n'.$lin.$col])?$_POST['n'.$lin.$col]:' ';
    }
  }
  for ($i=0; $i < 4 ; $i++) {
    if ($matriz[$i][1]!='input' and $matriz[$i][1]!='checkbox' and $matriz[$i][1]!='radio') {
        $certos=0;
    }
  }
  $certos = 1;
?>
</html>
<body>
  <form action="" method="post">
  <fieldset>
  	<legend>Exercicio 04</legend>
    <?php
      for ($lin = 0; $lin < 4; $lin++) {
        for ($col = 0; $col < 2; $col++) {
          if ($col % 2 == 0) {
            echo "<label>Nome $lin:</label>";
            echo "<input type='text' name='n$lin$col' value='".$matriz[$lin][$col]."'>";
            } 
            else {
              echo "<label>Tipo $lin:</label>";
              echo "<input type='text' name='n$lin$col' value='".$matriz[$lin][$col]."'>";
            }
          }
        }
        echo "<br><br><input type='submit' value='Gerar'><br><br>";

        for ($i=0; $i < 4 ; $i++) {
          echo $matriz[$i][0].": <input type='".$matriz[$i][1]."' name='".$matriz[$i][0]."' value=''><br><br>";
        }
    ?>
  </fieldset>
  </form>
</body>
</html>