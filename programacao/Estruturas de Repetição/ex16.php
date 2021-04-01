<!DOCTYPE html>
<?php
  $q = isset($_POST['n'])?$_POST['n']:0;
  $soma = 0;
  $maior = 0;
  $menor = 0;
 ?>
<html>
<head>
    <link rel="stylesheet" href="css/estilo.css" />
    <meta charset="UTF-8" />
    <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <title>Exercicios PHP</title>
</head>
<style type="text/css">
	body{
		background-color: #90EE90;
	}
</style>
<body>
	<form action="" method="post">
		<br>
		<fieldset>
			<legend>Exercício 16</legend>
			<center><label for="n">Números a ser digitados:</label><br />
	        <input type="number" name="n" value="<?php echo "$q"; ?>"><br />
	        <br><input type="submit" name="Gerar" value="Gerar"><br>
       <?php
          $acumulador = 0;
          $maior = 0;
          if (isset($_POST['Gerar']) or isset($_POST['Enviar'])) {
              for ($i = 1; $i <= $q ; $i++) {
                  echo"<br><label for='n".$i."'>Número ".$i.":</label><br />
              <input type='number' name='n".$i."' value=''>";
              }
              echo "<br><br><input type='submit' name='Enviar' value='Enviar'>";
              echo "<br>Clique em enviar não aperte enter<br>";
          }
          if (isset($_POST['Enviar'])) {
              for ($i = 1; $i <= $q ; $i++) {
                  $n[$i] = isset($_POST['n'.$i])?$_POST['n'.$i]:0;
              }
              $menor = $n[1];
              foreach ($n as $z) {
                  $acumulador+=$z;
                  if ($maior < $z) {
                      $maior = $z;
                  } elseif ($menor > $z) {
                      $menor = $z;
                  }
              }
              echo "<br>O maior é $maior<br>O menor é $menor <br> A soma de todos é $acumulador <center>";
          }

        ?>
		</fieldset>
	</form>
	<br><br>
</body>
</html>