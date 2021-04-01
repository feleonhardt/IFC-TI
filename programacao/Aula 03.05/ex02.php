<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>PHP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="css/estilo.css" />
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
</head>
<body>
  <form action="ex013.php" method="post">
  <fieldset>
  	<legend>Exercicio 02</legend>
      <?php 
        $matriz = array();
        define("LIN",3);
        define("COL",3);

        for ($lin = 0; $lin < LIN; $lin++) { 
          for ($col = 0; $col < COL; $col++) { 
            $matriz[$lin][$col] = rand(1,9);
          }
        }

        var_dump($matriz);
        echo "<br><br>";
        echo $matriz[0][2];

        echo "<br><br>";
        echo "<b>Matriz 3 X 3 - FOREACH</b><br>";
        foreach ($matriz as $linha) {
          echo "<br>";
          foreach ($linha as $item) 
            echo $item." ";
        }

        echo "<br><br>";
        echo "<b>Matriz 3 X 3 - FOR</b><br>";
        $soma = 0;
        $cont = 0;
        $maior = 0;
        $menor = 10;
        $diagonalPrincipal = 0;
        $diagonalSecundaria = 0;
        $linha1 = 0;
        $linha2 = 0;
        $linha3 = 0;
        $coluna1 = 0;
        $coluna2 = 0;
        $coluna3 = 0;

        for ($lin = 0; $lin < LIN ; $lin++) { 
            for ($col = 0; $col < COL ; $col++) { 
              echo $matriz[$lin][$col]." ";

            }
            echo "<br>";
        }

        for ($lin = 0; $lin < LIN ; $lin++) { 
            for ($col = 0; $col < COL ; $col++) { 
              $soma = $soma + $matriz[$lin][$col];
              $cont++;
            }
        }
        echo "<br>Soma = ".$soma;
        echo "<br>Média = ".$soma/$cont;

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
        echo "<br>Maior = ".$maior;
        echo "<br>Menor = ".$menor;

        for ($lin = 0; $lin < LIN ; $lin++) { 
            for ($col = 0; $col < COL ; $col++) { 
              if($lin == $col){
                $diagonalPrincipal = $diagonalPrincipal + $matriz[$lin][$col]; 
              }
            }
        }
        echo "<br>Diagonal Principal = ".$diagonalPrincipal;
        
        for ($lin = 0; $lin < LIN ; $lin++) { 
            for ($col = 0; $col < COL ; $col++) { 
              if($col == (2-$lin)){
                $diagonalSecundaria = $diagonalSecundaria + $matriz[$lin][$col]; 
              }
            }
        }
        echo "<br>Diagonal Secundária = ".$diagonalSecundaria;

        $diferencaPrincipaleSecundaria = $diagonalPrincipal - $diagonalSecundaria;
        echo "<br>Diferenca entre a soma da Diagonal Principal e a soma da Diagonal Secundaria = ".$diferencaPrincipaleSecundaria;

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
        echo "<br>Soma Linha 1 = ".$linha1;
        echo "<br>Soma Linha 2 = ".$linha2;
        echo "<br>Soma Linha 3 = ".$linha3;

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
        echo "<br>Soma Coluna 1 = ".$coluna1;
        echo "<br>Soma Coluna 2 = ".$coluna2;
        echo "<br>Soma Coluna 3 = ".$coluna3;

        echo "<br><br>";
        for ($lin = 0; $lin < LIN ; $lin++) { 
            for ($col = 0; $col < COL ; $col++) { 
              if($matriz[$lin][$col] %2 == 0){
                echo $matriz[$lin][$col]."* ";
              }
              else{
                echo $matriz[$lin][$col]."# ";
              }
            }
            echo "<br>";
        }

        for ($lin = 0; $lin < LIN ; $lin++) { 
            for ($col = 0; $col < COL ; $col++) { 
               echo "<br>".$matriz[$lin][$col].": ";
               for ($j = 1; $j <= $matriz[$lin][$col]; $j++) { 
               echo "#";
             }
           }
        }
        
        // somar itens da matriz
        // fazer a média
        // maior valor da matriz
        // menor valor da matriz
        // soma da diagonal principal menos a soma da diagonal secundaria
        // somar cada linha
        // somatória das colunas
        // imprimir a matriz e os numeros pares com * e os impares com #
        // grafico (3: ###  2: ##)
        // a matriz é preenchida automaticamente com numeros aleatorios de 0 a 20
      ?>
  </fieldset>
  </form>
</body>
</html>