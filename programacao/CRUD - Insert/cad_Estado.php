<!DOCTYPE html>
<?php
    $titulo = "Integração com BD";
    $tb_tabela = isset($_GET['tabela'])?$_GET['tabela']:0;
?>
<html>
<head>
	<title><?php echo $titulo ?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/estilo2.css" />
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
</head>
<body>
		<form method="post" action="acao.php" id="form">
        <fieldset>
          <legend>Cadastro de Estados</legend>
          <center>
              <input type="hidden" name="tabela" value="<?php echo $tb_tabela ?>">
              <input type="hidden" name="pagina" value="cad_Estado.php">
              <input type="hidden" name="numero" value="2">
              Nome: <input type="text" name="n1" value="" id="n1" required = "true"><br><br>
              Sigla: <input type="text" name="n2" value="" id="n2" required = "true"><br>
              <br><br><br>
              <button type="submit" name="acao" value="salvar" id="acao" class="button">Salvar</button>
              <a href="list_estado.php">Pesquisa</a>
          </center>
        </fieldset>
    </form>
</body>
</html>
