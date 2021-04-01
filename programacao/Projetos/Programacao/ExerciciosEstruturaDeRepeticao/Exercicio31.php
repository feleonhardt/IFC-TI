<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
  $num = isset($_POST['n'])?$_POST['n']:1;
  $numIni = isset($_POST['ni'])?$_POST['ni']:1;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercício 31</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Gerador de Tabuada</h5>
    <hr class="dividir" />
    <?php 
      for ($i = 0; $i <= 10 ; $i++) { 
        echo "<div class='input'>
            <input type='number' name='n' id='n' required />
            <label for='n'>Número do Aluno</label>
          </div>
          <div class='input'>
            <input type='number' name='a' id='a' required />
            <label for='a'>Altura</label>
          </div>
          <div class='input'>
            <input type='submit' value='Enviar Dados' />
            <input type='reset' value='Limpar' />
          </div>
          <hr class='dividir' />";
      }
    ?>
  </form>
  <br />
  <br />
  <br />
  <br />
  <form>
    <h5>Resultado</h5>
    <hr class="dividir" />
    <ul>
    <?php
    ?>
    </ul>
  </form>
</body>

</html>
