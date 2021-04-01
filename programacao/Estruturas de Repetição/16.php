<!DOCTYPE html>
<?php
  $titulo="Maximo e Minimo no N";
  $q=isset($_GET['n'])?$_GET['n']:0;
  $soma=0;
  $maior=0;
  $menor=0;
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo "$titulo"; ?></title>
    <link rel="stylesheet" href="_css/estilo.css">
    <link rel="shortcut icon" href="_css/php.png">
  </head>
  <body>
    <center>
    <form action="" method="get">
      <fieldset>
      <label for="n">Números a ser digitados:</label><br />
      <input type="number" name="n" value="<?php echo "$q"; ?>"><br />
      <input type="submit" name="Gerar" value="Gerar">
       <?php
          $acumulador=0;
          $maior=0;
          if (isset($_GET['Gerar']) or isset($_GET['Enviar'])) {
              for ($i=1; $i <=$q ; $i++) {
                  echo"<br><label for='n".$i."'>Número ".$i.":</label><br />
              <input type='number' name='n".$i."' value=''>";
              }
              echo "<br><input type='submit' name='Enviar' value='Enviar'>";
              echo "<br>Clique em enviar não aperte enter";
          }
          if (isset($_GET['Enviar'])) {
              for ($i=1; $i <=$q ; $i++) {
                  $n[$i]=isset($_GET['n'.$i])?$_GET['n'.$i]:0;
              }
              $menor=$n[1];
              foreach ($n as $z) {
                  $acumulador+=$z;
                  if ($maior < $z) {
                      $maior=$z;
                  } elseif ($menor > $z) {
                      $menor=$z;
                  }
              }
              echo "<br>O maior é $maior, O menor é $menor e a Soma de todos é $acumulador";
          }

        ?>
      </fieldset>
    </form>
    </center>

    <br>
    <br>
  </body>
</html>
