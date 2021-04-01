<!DOCTYPE html>
<html lang="pt-BR" />

<head>
  <meta charset="UTF-8" />
  <title>Exercício 15</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form>
    <h5>Série S</h5>
    <hr class="dividir" />
    <h5>
    <?php
      $t = 37;
      $t2 = 38;
      $term = 0;
      echo "T =";
        for ($i = 1; $i <= 37 ; $i++) {
            if ($i != 37) {
                echo "($t * $t2) / $i <br /> + ";
                $term += ($t / $t2) / $i;
                $t--;
                $t2--;
            } else {
                echo " ($t * $t2)/ $i = $term";
                $term += ($t / $t2) / $i;
            }
        }
    ?>
    </h5>
  </form>
</body>

</html>
