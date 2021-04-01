<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo.css" />
    <meta charset="UTF-8" />
    <link rel="shortcut icon" type="image/x-icon" href="img/php.png" />
    <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <title>Exercicios PHP</title>
</head>
<body>
  <?php 
    $h = "";
    if(isset($_POST['h'])){
      $h = $_POST['h'];
    }
    $peso = "";
    if(isset($_POST['peso'])){
      $peso = $_POST['peso'];
    }
    $sexo = "";
    if(isset($_POST['sexo'])){
      $sexo = $_POST['sexo'];
    }
  ?>
  
<div id="borda1">
  <img src="img/borda2.jpg">
</div>
<div id="corpo">
  <form action="" method="post">
    <br>
    <fieldset>
      <legend>Exercício 09</legend>
        <br>
        <label>Altura: </label>
        <input type="number" name="h" id="n" step="0.00001""/>
        <br><br>
        <label>Peso: </label>
        <input type="number" name="peso" id="n" step="0.00001""/>
        <br><br>
        <label>Sexo: </label>
        <input type="text" name="sexo" id="n" step="0.00001""/>
        <br><br>
        <center><input type="submit" value="Verificar"></center>
        <br>
          <?php
              if ($sexo == "f" || $sexo == "F" || $sexo == "feminino" || $sexo == "Feminino") {
           $ideal = (62.1 * $h) - 44.7;

           if ($peso > $ideal) {
            $w = "acima d";
           }
           elseif ($peso < $ideal) {
            $w = "abaixo d";
           }
           elseif ($peso === $ideal){ // QUE BOSTA
            $w = "igual a";
           }

           echo '<p> Sua altura é: ' .$h. '<br>Seu peso é: ' .$peso. '<br>Seu peso ideal é ' .$ideal. '<br>Seu peso está ' .$w. 'o ideal</p>';
        }

        elseif ($sexo == "m" || $sexo == "M" || $sexo == "masculino" || $sexo == "Masculino") {
          $ideal =  (72.7 * $h) - 58;

           if ($peso > $ideal) {
            $w = "acima d";
           }
           elseif ($peso < $ideal) {
            $w = "abaixo d";
           }
           elseif ($peso == $ideal) {
            $w = "igual";
           }

           echo '<p> Sua altura é: ' .$h. '<br>Seu peso é: ' .$peso. '<br>Seu peso ideal é ' .$ideal. '<br>Seu peso está ' .$w. 'o ideal</p>';
        }
          ?>
    </fieldset>
  </form>
</div>
<div id="borda2">
  <img src="img/borda2.jpg">
</div>
</body>
</html>