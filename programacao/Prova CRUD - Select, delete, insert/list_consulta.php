<!DOCTYPE html>
<?php
	include 'connect/connect.php';
	$title = "Agenda de Consultas";
	$pesquisar = "";
		if(isset($_POST['pesquisar'])){
			$pesquisar = $_POST['pesquisar'];
		}
	$pesquisa = "";
		if(isset($_POST['pesquisa'])){
			$pesquisa = $_POST['pesquisa'];
		}
	$valores_consultas = 0;
?>
<html>
<head>
    <meta charset="UTF-8" />
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/estilo.css" />
  	<link rel="shortcut icon" href="img/lupa.png" type="image/x-icon" />
</head>

<script>
	function excluirRegistro(url){
		if(confirm("Confirmar Exclusão?"))
			location.href = url;
		}
</script>

<style>
	#primeiro {
		margin-left: 80%;
	}
</style>

<body>

<nav id="menu">
    <ul>
        <li id="primeiro"><a href="list_consulta.php">Pesquisa</a></li>
        <li><a href="cad_Consulta.php">Cadastro</a></li>
    </ul>
</nav>
<form action="" method="post">
	<br>
	<h2>Agenda de Consultas</h2>
	<center>
	<br>
		<input type="text" name="pesquisar" value="<?php echo $pesquisar ?>" placeholder="Digite para fazer a consulta..."><br><br>
		<strong>Pesquisar por: </strong>
		<input type="radio" name="pesquisa" <?php if($pesquisa == "codigo") echo "checked"; ?> value="codigo" checked>Código
	  	<input type="radio" name="pesquisa" <?php if($pesquisa == "nome_paciente") echo "checked"; ?> value="nome_paciente">Nome do Paciente
	  	<input type="radio" name="pesquisa" <?php if($pesquisa == "nome_medico") echo "checked"; ?> value="nome_medico">Nome do Médico
	  	<input type="radio" name="pesquisa" <?php if($pesquisa == "data_consulta") echo "checked"; ?> value="data_consulta">Data da Consulta
	  	<input type="radio" name="pesquisa" <?php if($pesquisa == "medicamento") echo "checked"; ?> value="medicamento">Medicamento Controlado
	  	<input type="radio" name="pesquisa" <?php if($pesquisa == "tipo_consulta") echo "checked"; ?> value="tipo_consulta">Tipo de Consulta 
	  	<input type="radio" name="pesquisa" <?php if($pesquisa == "valor_consulta") echo "checked"; ?> value="valor_consulta">Valor da Consulta<br><br><br>
	  	<input type="submit" class="button" name="" value="Enviar" class="button">
	<br><br><br>
	    <table>
	        <tr>
		        <th>Código</th>
		        <th>Nome do Paciente</th>
		        <th>Nome do Médico</th>
		        <th>Data da Consulta</th>
		        <th>Medicamento Controlado</th>
		        <th>Tipo de Consulta</th>
		        <th>Valor da Consulta</th>
		        <th>Exclusão</th>
			</tr>
			<?php
				if($pesquisa == ''){
					$sql = 'SELECT * FROM '.$tb_consulta;
				}
				else{
					if($pesquisa == "codigo"){
						$sql = "SELECT * FROM ".$tb_consulta." WHERE codigo = ".$pesquisar." ORDER BY codigo";
					}
					elseif($pesquisa == "nome_paciente"){
						$sql = "SELECT * FROM ".$tb_consulta." WHERE nome_paciente LIKE '".$pesquisar."%' ORDER BY nome_paciente";
					}
					elseif($pesquisa == "nome_medico"){
						$sql = "SELECT * FROM ".$tb_consulta." WHERE nome_medico LIKE '".$pesquisar."%' ORDER BY nome_medico";
					}
					elseif ($pesquisa == "data_consulta") {
						$pesquisar = str_replace('/', '-', $pesquisar);
						$sql = "SELECT * FROM ".$tb_consulta." WHERE data_consulta = date('".date('Y-m-d', strtotime($pesquisar))."') ORDER BY data_consulta";
					}
					elseif($pesquisa == "medicamento"){
						$sql = "SELECT * FROM ".$tb_consulta." WHERE medicamento LIKE '".$pesquisar."%' ORDER BY medicamento";
					}
					elseif($pesquisa == "tipo_consulta"){
						$sql = "SELECT * FROM ".$tb_consulta." WHERE tipo_consulta LIKE '".$pesquisar."%' ORDER BY tipo_consulta";
					}
					elseif($pesquisa == "valor_consulta"){
						$sql = "SELECT * FROM ".$tb_consulta." WHERE valor_consulta = ".$pesquisar." ORDER BY valor_consulta";
					}
				}
				$resultado = mysqli_query($conexao, $sql);
	            while ($row = mysqli_fetch_array($resultado)) {
	                echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".date('d/m/Y', strtotime(str_replace('/','-', $row[3])))."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".number_format(($row[6]),2, ',','.')."</td><td><a href =javascript:excluirRegistro('acao.php?acao=excluir&codigo=$row[0]&tabela=$tb_consulta&pagina=list_consulta.php')><img src='img/lixeira.png' height='22'></a></td></tr>";
	                $valores_consultas += $row[6];
	            }
	            echo "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></tr></tr><tr><td></td><td></td><td></td><td></td><td></td><td></td><td><strong>Valor Total de Consultas (R$)</strong></td><td>".number_format(($valores_consultas),2, ',','.')."</td></tr>";				
			?>
		</table>
	<br><br><br>
	</center>
</form>
</body>
</html>