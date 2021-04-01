<!DOCTYPE html>
<?php
$titulo="Curso de PHP";
$data=isset($_GET['$data'])?str_replace("/", "-", $_GET['$data']):'24-04-1978';
 ?>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <link rel="shortcut icon" type="image/x-icon" href="_css/php.png" />
    <meta charset="UTF-8"/>
    <title><?php echo $titulo ?></title>
</head>
  <body>
    <form class="" action="" method="get">
      <fieldset>
        <center>
        <label for="n1">data:</label><br>
        <input type="text" name="$data" value="<?php echo date("d/m/Y", strtotime($data)); ?>"
        placeholder="Informe a $data (dd/mm/aaaa)" required><br>
        <input type="submit" name="" value="Enviar">
        </center>
      </fieldset>
    </form>
    <?php
      echo "Dia ".date("d", strtotime($data))." ";
      $m=date("n", strtotime($data));
      switch ($m) {
      case 1:
        echo "Janeiro";
        break;
      case 2:
        echo "Fevereiro";
        break;
      case 3:
        echo "Março";
        break;
      case 4:
        echo "Abril";
        break;
      case 5:
        echo "Maio";
        break;
      case 6:
        echo "Junho";
        break;
      case 7:
        echo "Julho";
        break;
      case 8:
        echo "Agosto";
        break;
      case 9:
        echo "Setembro";
        break;
      case 10:
        echo "Outubro";
        break;
      case 11:
        echo "Novembro";
        break;
      case 12:
        echo "Dezembro";
        break;
      default:
        echo "ERROR";
    }
    $a=date('Y', strtotime($data));
      echo " de $a ";
    $diasemana=date('D', strtotime($data));
    if ($diasemana == 'Mon') {
        echo "uma Segunda-Feira";
    } elseif ($diasemana == 'Tue') {
        echo "uma Terça-Feira";
    } elseif ($diasemana == 'Wed') {
        echo "uma Quarta-Feira";
    } elseif ($diasemana == 'Thu') {
        echo "uma Quinta-Feira";
    } elseif ($diasemana == 'Fri') {
        echo "uma Sexta-Feira";
    } elseif ($diasemana == 'Sat') {
        echo "um Sabado";
    } elseif ($diasemana == 'Sun') {
        echo "um Domingo";
    } else {
        echo "ERRO!";
    }
     ?>
  </body>
</html>
