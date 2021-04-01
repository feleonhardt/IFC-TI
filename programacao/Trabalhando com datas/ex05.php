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
  $dataNasc = "";
    if(isset($_POST['dataNasc'])){
      $dataNasc= $_POST['dataNasc'];
    }
  $dataHj = date("d-m-Y");
  $op = isset($_POST['op'])?$_POST['op']:0;
?>
<body>
  <form action="" method="post">
  <fieldset>
  	<legend>Exercicio 05</legend>
      Data de Nascimento: <input type="text" name="dataNasc" value="<?php echo $dataNasc;?>" placeholder="Informe a data (dd/mm/aaaa)" required="true"><br><br>
      <input type="radio" name="op" value="false" <?php if ($op == 'false'):echo "checked"; ?><?php endif; ?>>Contar sábados e domingos
      <input type="radio" name="op" value="true" <?php if ($op == 'true'):echo "checked"; ?><?php endif; ?>>Não contar sábados e domingos<br><br>
      <br><br><input type='submit' value='Enviar'><br><br>
      <?php
        require "funcoesDatas.php";
        $dias = diferencaDatas($dataHj, $dataNasc, $op);
        echo "Você viveu ".abs($dias)." dias";
      ?>
  </fieldset>
  </form>
</body>
</html>