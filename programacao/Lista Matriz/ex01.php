<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>PHP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="css/estilo.css" />
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
</head>
<style>
  p{
    text-align: justify;
  }
</style>
<body>
  <form action="ex013.php" method="post">
  <fieldset>
  	<legend>Exercicio 01</legend>
      <?php 
        $matriz = array();
        define("LIN",3);
        define("COL",3);

        for ($lin = 0; $lin < LIN; $lin++) { 
          for ($col = 0; $col < COL; $col++) { 
            $matriz[$lin][$col] = rand(0,20);
          }
        }

        echo "<h3>";
        for ($lin = 0; $lin < LIN ; $lin++) { 
            for ($col = 0; $col < COL ; $col++) { 
              echo $matriz[$lin][$col]." | ";

            }
            echo "<br>----------------<br>";
        }
        echo "</h3>";

        echo "<p>";

        $soma = 0;
        $cont = 0;
        for ($lin = 0; $lin < LIN ; $lin++) { 
            for ($col = 0; $col < COL ; $col++) { 
              $soma = $soma + $matriz[$lin][$col];
              $cont++;
            }
        }
        echo "<br>--> Soma = ".$soma;
        echo "<br><br>--> Média = ".$soma/$cont;

        $maior = 0;
        $menor = 10;
        for ($lin = 0; $lin < LIN ; $lin++) { 
            for ($col = 0; $col < COL ; $col++) { 
              if($matriz[$lin][$col] > $maior){
                $maior = $matriz[$lin][$col];
              }
              if($matriz[$lin][$col] < $menor){
                $menor = $matriz[$lin][$col];
              }
            }
        }
        echo "<br><br>--> Maior = ".$maior;
        echo "<br><br>--> Menor = ".$menor;

        $diagonalPrincipal = 0;
        for ($lin = 0; $lin < LIN ; $lin++) { 
            for ($col = 0; $col < COL ; $col++) { 
              if($lin == $col){
                $diagonalPrincipal = $diagonalPrincipal + $matriz[$lin][$col]; 
              }
            }
        }
        echo "<br><br>--> Soma da diagonal principal = ".$diagonalPrincipal;
        
        $diagonalSecundaria = 0;
        for ($lin = 0; $lin < LIN ; $lin++) { 
            for ($col = 0; $col < COL ; $col++) { 
              if($col == (2-$lin)){
                $diagonalSecundaria = $diagonalSecundaria + $matriz[$lin][$col]; 
              }
            }
        }
        echo "<br><br>--> Soma da diagonal secundária = ".$diagonalSecundaria;

        $diferencaPrincipaleSecundaria = $diagonalPrincipal - $diagonalSecundaria;
        echo "<br><br>--> Diferenca entre a soma da diagonal principal e a soma da diagonal secundaria = ".$diferencaPrincipaleSecundaria;

        $linha1 = 0;
        $linha2 = 0;
        $linha3 = 0;
        for ($lin = 0; $lin < LIN ; $lin++) { 
            for ($col = 0; $col < COL ; $col++) { 
              if($lin == 0){
                $linha1 = $linha1 + $matriz[$lin][$col]; 
              }
              if($lin == 1){
                $linha2 = $linha2 + $matriz[$lin][$col]; 
              }
              if($lin == 2){
                $linha3 = $linha3 + $matriz[$lin][$col]; 
              }
            }
        }
        echo "<br><br>--> Soma da 1ª linha = ".$linha1;
        echo "<br><br>--> Soma da 2ª linha = ".$linha2;
        echo "<br><br>--> Soma da 3ª linha = ".$linha3;

        $coluna1 = 0;
        $coluna2 = 0;
        $coluna3 = 0;
        for ($lin = 0; $lin < LIN ; $lin++) { 
            for ($col = 0; $col < COL ; $col++) { 
              if($col == 0){
                $coluna1 = $coluna1 + $matriz[$lin][$col]; 
              }
              if($col == 1){
                $coluna2 = $coluna2 + $matriz[$lin][$col]; 
              }
              if($col == 2){
                $coluna3 = $coluna3 + $matriz[$lin][$col]; 
              }
            }
        }
        echo "<br><br>--> Soma da 1ª coluna = ".$coluna1;
        echo "<br><br>--> Soma da 2ª coluna = ".$coluna2;
        echo "<br><br>--> Soma da 3ª coluna = ".$coluna3;

        $somaColunas = $coluna1 + $coluna2 + $coluna3;
        echo "<br><br>--> Somatória das colunas = ".$somaColunas;

        echo "<br><br>";
        for ($lin = 0; $lin < LIN ; $lin++) { 
            for ($col = 0; $col < COL ; $col++) { 
              if($matriz[$lin][$col] %2 == 0){
                echo $matriz[$lin][$col]."* | ";
              }
              else{
                echo $matriz[$lin][$col]."# | ";
              }
            }
            echo "<br>-------------------<br>";
        }      

        for ($lin = 0; $lin < LIN ; $lin++) { 
            for ($col = 0; $col < COL ; $col++) { 
               echo "<br>".$matriz[$lin][$col].": ";
               for ($j = 1; $j <= $matriz[$lin][$col]; $j++) { 
               echo "#";
             }
           }
        }
        
        echo "</p>";
      ?>
  </fieldset>
  </form>
</body>
</html>