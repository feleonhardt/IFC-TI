<!DOCTYPE html>
<html lang="pt-BR" />
<head>
  <meta charset="UTF-8" />
  <title>PHP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="../css/estilo.css" />
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
</head>
<?php 
  $texto = "";
  if(isset($_POST['texto'])){
      $texto = $_POST['texto'];
    }
?>
<body>
  <form action="seq3.php" method="post">
  <fieldset>
  	<legend>Exercício 03</legend>
      <?php 
        $text = explode (";", $texto);
        $qtdtexto = count($text);
        for ($i = 0; $i < $qtdtexto; $i++) {
          echo "<input type='checkbox' name='ckb".$i."' id='ckb".$i."' value='".$text[$i]."'>".$text[$i]."<br>";
        }
        echo "<input type='hidden' name='qtdtext' value='$qtdtexto'><br>";
      ?>
  	 <br><br><input type="submit" name="Enviar" />
  </fieldset>
  </form>
</body>
</html>