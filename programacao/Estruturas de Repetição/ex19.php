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
  $n = 10;
    if(isset($_POST['n'])){
      $n = $_POST['n'];
    }
?>
<body>
  <form action="" method="post">
    <br>
    <fieldset>
      <legend>Exercício 19</legend>
      <center><label>Valor final: </label>
      <input type="number" name="n" id="n" required value="<?php echo $n ?>"/>
            <br><br>
            <input type="submit" value="Verificar"></center>
      <br>
      <center>
        <?php 
            $vezes = 1;
            $div=0;
              while ($vezes <= $n) {
              $cont = 0;
              
              for ($i = 1; $i <= $vezes; $i++) { 
                if($vezes % $i == 0){
                  $cont++;
                  $div++;
                }
              }
              if($cont == 2){
                if($vezes == $n){
                  echo $vezes;
                } else{
                  echo $vezes.", ";
                }
              }
              $vezes++;
            }
            echo "<br>Número de divisões = ".$div;
            
        ?>
        </center>
    </fieldset>
  </form>
  <br><br>
</body>
</html>