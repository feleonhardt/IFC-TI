<!DOCTYPE html>
<?php
$titulo = "Curso de PHP";
$data1 = isset($_GET['data1'])?str_replace("/", "-", $_GET['data1']):'24-04-1978';
$data2 = isset($_GET['data2'])?str_replace("/", "-", $_GET['data2']):'24-04-1978';
$sd = isset($_GET['sd'])?$_GET['sd']:0;
$custo = isset($_GET['custo'])?$_GET['custo']:0;
$mul = isset($_GET['mul'])?$_GET['mul']:0;
$juros = isset($_GET['juros'])?$_GET['juros']:0;
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
        <label for="data">Data de Vencimento:</label><br>
        <input type="text" name="data1" value="<?php echo date("d/m/Y", strtotime($data1)); ?>"
        placeholder="Informe a data (dd/mm/aaaa)" required><br>
        <label for="parcelas">Data de Pagamento:</label><br>
        <input type="text" name="data2" value="<?php echo date("d/m/Y", strtotime($data2)); ?>"
        placeholder="Informe a data (dd/mm/aaaa)" required><br>
        <label for="custo">Preço da Conta:</label><br>
        <input type="number" name="custo" value="<?php echo $custo ?>" step="0.01"><br>
        <label for="mul">Valor da Multa:</label><br>
        <input type="number" name="mul" value="<?php echo $mul ?>" step="0.01"><br>
        <label for="custo">Valor do Juros diário:</label><br>
        <input type="number" name="juros" value="<?php echo $juros ?>" step="0.01" placeholder="digite em porcetagem">%<br>
        <label for="sd">Quer contar sabados e domingos</label>
        <input type="radio" name="sd" value="false" <?php if ($sd == 'false'):echo "checked"; ?>
          <?php endif; ?>>Sim
        <input type="radio" name="sd" value="true" <?php if ($sd == 'true'):echo "checked"; ?>
          <?php endif; ?>>Não<br>
        <input type="submit" name="bt" value="Enviar">
        </center>
      </fieldset>
    </form>
    <?php
    if (isset($_GET['bt'])) {
        if (strtotime($data1) < strtotime($data2)) {
            $dias = (strtotime($data2) - strtotime($data1));
            $dias = floor($dias/ (60*60*24));
            if ($sd=='true') {
                $dias = round(($dias/7)*5);
                $novovalor = $custo + $mul;
                for ($i=1; $i <= $dias ; $i++) {
                    $novovalor *=(1+($juros/100));
                }
            } else {
                $novovalor = $custo + $mul;
                for ($i=1; $i <= $dias ; $i++) {
                    $novovalor *=(1+($juros/100));
                }
            }
            echo "Valor Original: ".$custo."<br> Valor da Multa: ".$mul."<br> Valor de Juros por dia: ".($juros/100)."% <br> Dias após o vencimento: ".$dias."<br> Novo Custo: ".$novovalor;
        } else {
            echo "Você não tem multa ou juros então deve pagar: $custo";
        }
    }

     ?>
  </body>
</html>
