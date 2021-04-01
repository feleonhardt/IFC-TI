<!DOCTYPE html>
<?php
    $dataVence = isset($_POST['dataVence'])?str_replace("/", "-", $_POST['dataVence']):'24-04-1978';
    $dataPg = isset($_POST['dataPg'])?str_replace("/", "-", $_POST['dataPg']):'24-04-1978';
    $op = isset($_POST['op'])?$_POST['op']:0;
    $preco = isset($_POST['preco'])?$_POST['preco']:0;
    $multa = isset($_POST['multa'])?$_POST['multa']:0;
    $juros = isset($_POST['juros'])?$_POST['juros']:0;
?>
<html lang="pt-br">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="css/estilo.css" />
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
</head>
  <body>
    <form class="" action="" method="post">
      <fieldset>
        <legend>Exercicio 04</legend>
        Data de Vencimento: <input type="text" name="dataVence" value="<?php echo date("d/m/Y", strtotime($dataVence)); ?>" placeholder="Informe a data (dd/mm/aaaa)" required><br><br>
        Data de Pagamento: <input type="text" name="dataPg" value="<?php echo date("d/m/Y", strtotime($dataPg)); ?>" placeholder="Informe a data (dd/mm/aaaa)" required><br><br>
        Preço da Conta: <input type="number" name="preco" value="<?php echo $preco ?>" step="0.01"><br><br>
        Valor da Multa: <input type="number" name="multa" value="<?php echo $multa ?>" step="0.01"><br><br>
        Valor do Juros diário(em %): <input type="number" name="juros" value="<?php echo $juros ?>" step="0.01" placeholder="digite em porcetagem"><br><br>
        <input type="radio" name="op" value="false" <?php if ($op == 'false'):echo "checked"; ?><?php endif; ?>>Contar sábados e domingos
        <input type="radio" name="op" value="true" <?php if ($op == 'true'):echo "checked"; ?><?php endif; ?>>Não contar sábados e domingos<br><br>
        <input type="submit" name="bt" value="Enviar"><br>
    <br>
    <?php
        require "funcoesDatas.php";
        if (strtotime($dataVence) < strtotime($dataPg)) {
            $multa = contaMulta($dataPg, $dataVence, $op, $preco, $multa, $juros);
            echo $multa;
        } else {
            echo "<br>Você não tem multa ou juros então deve pagar: $preco";
        }
    ?>
</fieldset>
</form>
  </body>
</html>
