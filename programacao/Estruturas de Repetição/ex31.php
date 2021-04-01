<!DOCTYPE html>
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
<?php 
  for ($i=0; $i < 10 ; $i++) { 
    $n[$i]=isset($_POST['n'.$i])?$_POST['n'.$i]:0;
    $a[$i]=isset($_POST['a'.$i])?$_POST['a'.$i]:0;
  }
?>
<body>
  <form action="" method="post">
    <br>
    <fieldset>
      <legend>Exercício 31</legend>
        <?php 
          for ($i = 0; $i < 10 ; $i++) { 
            echo "<label>Número do Aluno ".$i.": </label><input type='number' name='n".$i."' id='n' required /><br><br>";
            echo "<label>Altura do Aluno ".$i.": </label><input type='number' name='a".$i."' id='n' required /><br><br>";
          }
          echo "<center><input type='submit' value='Verificar'></center>";
      ?>
      <?php
        $alunoBaixo=$n[0];
        $alunoAlto=0;
        $maior = 0;
        $menor = $a[0];
        for ($i = 0; $i < 10; $i++) { 
          if ($a[$i] > $maior) {
            $alunoAlto = $n[$i];
            $maior = $a[$i];
          }
          if ($a[$i] < $menor) {
            $alunoBaixo = $n[$i];
            $menor = $a[$i];
          }
        }
        echo "<br><center>O aluno com a maior altura (".$maior." cm) tem código ".$alunoAlto;
        echo "<br>O aluno com a menor altura (".$menor." cm) tem código ".$alunoBaixo."</center>";
      ?>
    </fieldset>
  </form>
  <br><br>
</body>
</html>