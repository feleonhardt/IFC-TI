<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>PHP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="css/estilo.css" />
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
</head>
<?php
  $data = isset($_POST['data'])
          ? str_replace("/", "-", $_POST['data'])
          : "24-04-1978";
?>
<body>
  <form action="" method="post">
  <fieldset>
  	<legend>Exercicio 01</legend>
      Dia de hoje: <input type="text" name="data" id="data" value="<?php echo date("d-m-Y");?>" placeholder="Informe a data (dd/mm/aaaa)" required="true"> 
      <br><br><br>Insira uma data: <input type="text" name="data" id="data" value="<?php echo date("d/m/Y", strtotime($data));?>" placeholder="Informe a data (dd/mm/aaaa)" required="true"> 

      <?php
        echo "<br><br>";
        echo $data;
        echo "<br>";
        echo date("Y-m-d",strtotime($data));
        echo "<br>";
        echo date("d/m/Y",strtotime($data));
        echo "<br><br>";
        echo date("d",strtotime($data))." | dia";
        echo "<br><br>";
        echo date("F",strtotime($data))." | mês";
        echo "<br>";
        echo date("M",strtotime($data))." | mês";
        echo "<br>";
        echo date("n",strtotime($data))." | mês (1 - Janeiro, ...)";
        echo "<br><br>";
        echo date("y",strtotime($data))." | ano";
        echo "<br>";
        echo date("Y",strtotime($data))." | ano";
        echo "<br><br>";
        echo date("l",strtotime($data))." | dia da semana";
        echo "<br>";
        echo date("D",strtotime($data))." | dia da semana";
        echo "<br>";
        echo date("N",strtotime($data))." | dia da semana (1 - segunda, ...";
        echo "<br><br>";
        echo date("z",strtotime($data))." | dia do ano (começa em zero)";
        echo "<br><br><br>";
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');
        echo "<b>".strftime('%A, %d de %B de %Y', strtotime($data))."</b>";
        echo "<br><br>";
      ?>
      <br><br><input type='submit' value='Enviar'><br><br>
  </fieldset>
  </form>
</body>
</html>