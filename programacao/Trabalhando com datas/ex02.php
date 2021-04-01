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
  	<legend>Exercicio 02</legend>
      Insira uma data: <input type="text" name="data" id="data" value="<?php echo date("d/m/Y", strtotime($data));?>" placeholder="Informe a data (dd/mm/aaaa)" required="true"> 
      <br><br><input type='submit' value='Enviar'><br><br>
      <?php
        echo "<br><br>";
        require "funcoesDatas.php";
        $extenso = dataPorExtenso($data);
        echo $extenso;
      ?>
  </fieldset>
  </form>
</body>
</html>