<!DOCTYPE html>
<?php
    include 'conf/conf.inc.php';
    $titulo = "Agendamento de Consultas";
    $tb_tabela = $tb_consulta;
?>
<html>
<head>
	<title><?php echo $titulo ?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/estilo.css" />
  <link rel="shortcut icon" href="img/cadastro.png" type="image/x-icon" />

  <style>
  #primeiro {
    margin-left: 80%;
  }
</style>

</head>
<body>
  <nav id="menu">
    <ul>
        <li id="primeiro"><a href="list_consulta.php">Pesquisa</a></li>
        <li><a href="cad_Consulta.php">Cadastro</a></li>
    </ul>
  </nav>
	<form method="post" action="acao.php" id="form">
    <br>
    <h2>Agendamento de Consultas</h2>
    <center>
    <br>
      <input type="hidden" name="tabela" value="<?php echo $tb_tabela ?>">
      <input type="hidden" name="pagina" value="cad_Consulta.php">
      <input type="hidden" name="numero" value="6">
      Nome do Paciente: <input type="text" name="n1" value="" id="n1" required = "true"><br><br>
      Nome do Médico: <input type="text" name="n2" value="" id="n2" required = "true"><br><br>
      Data da Consulta: <input type="text" name="n3" value="" id="n3" required = "true"><br><br>
      Medicamento Controlado: <input type="radio" name="n4" value="Não" checked>Não  <input type="radio" name="n4" value="Sim">Sim<br>
      <br><br>Tipo de Consulta: 
      <select name="n5">
          <option value="Particular">Particular</option>
          <option value="SUS">SUS</option>
          <option value="Plano De Saúde">Plano de Saúde</option>
          <option value="Social">Social</option>
      </select><br><br><br>
      Valor da Consulta: <input type="text" name="n6" value="" id="n6"><br><br>
    <br>
      <button type="submit" class="button" name="acao" value="salvar" id="acao" class="button">Salvar</button>
    <br><br>
    </center>
  </form>
</body>
</html>
