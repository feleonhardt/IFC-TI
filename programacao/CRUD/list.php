<!DOCTYPE html>
<?php
	include 'connect/connect.php';
	$title = "Funcionários";
	$pesquisar = "";
		if(isset($_POST['pesquisar'])){
			$pesquisar = $_POST['pesquisar'];
		}
	$pesquisa = "";
		if(isset($_POST['pesquisa'])){
			$pesquisa = $_POST['pesquisa'];
		}
?>
<html>
<head>
    <meta charset="UTF-8" />
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/estilo.css" />
    <link rel="stylesheet" href="css/estilo2.css" />
  	<link rel="shortcut icon" href="img/lupa.png" type="image/x-icon" />
  	<link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet">
	
	<script>
		function excluirRegistro(url){
			if(confirm("Confirmar Exclusão?"))
				location.href = url;
		}
	</script>

</head>
<body>

	<br>

	<div id="form">
		<form action="" method="post">
			<fieldset>
				<legend>Funcionários</legend>
					<center>
	    				<br><br><br>

	    				<b>Filtrar por:</b><br>
						<br><input type="radio" name="pesquisa" <?php if($pesquisa == "codigo") echo "checked"; ?> value="codigo">Código
				  		<br><input type="radio" name="pesquisa" <?php if($pesquisa == "nome") echo "checked"; ?> value="nome">Nome
				  		<br><input type="radio" name="pesquisa" <?php if($pesquisa == "idade") echo "checked"; ?> value="idade">Idade
				  		<br><input type="radio" name="pesquisa" <?php if($pesquisa == "departamento") echo "checked"; ?> value="departamento">Departamento
				  		<br><input type="radio" name="pesquisa" <?php if($pesquisa == "data_admissao") echo "checked"; ?> value="data_admissao">Data de Admissão
				  		<br><input type="radio" name="pesquisa" <?php if($pesquisa == "salario") echo "checked"; ?> value="salario">Salário
				  		<br><input type="radio" name="pesquisa" <?php if($pesquisa == "telefone") echo "checked"; ?> value="telefone">Telefone
				  		
				  		<br><br><br><br>

				  		<div id="divBusca">
							<img src="img/lupa.png" width="29" />
							<input type="text" id="txtBusca" name="pesquisar" placeholder="Digite..." value="<?php echo $pesquisar ?>"/>
							<button id="btnBusca">Consultar</button>
						</div>

						<br><br><br><br>
					</center>
			</fieldset>
		</form>
	</div>

	<div id="tab">
  		<center>

			<?php
				if($pesquisa == ''){
					$sql = 'SELECT * FROM '.$tb_funcionario;
				}
				else{
					if($pesquisa == "codigo"){
						$sql = "SELECT * FROM ".$tb_funcionario." WHERE codigo = ".$pesquisar." ORDER BY codigo";
					}
					elseif($pesquisa == "nome"){
						$sql = "SELECT * FROM ".$tb_funcionario." WHERE nome LIKE '".$pesquisar."%' ORDER BY nome";
					}
					elseif($pesquisa == "idade"){
						$sql = "SELECT * FROM ".$tb_funcionario." WHERE idade = ".$pesquisar." ORDER BY idade";
					}
					elseif($pesquisa == "departamento"){
						$sql = "SELECT * FROM ".$tb_funcionario." WHERE departamento LIKE '".$pesquisar."%' ORDER BY departamento";
					}
					elseif ($pesquisa == "data_admissao") {
						$pesquisar = str_replace('/', '-', $pesquisar);
						$sql = "SELECT * FROM ".$tb_funcionario." WHERE data_admissao = date('".date('Y-m-d', strtotime($pesquisar))."') ORDER BY data_admissao";
					}
					elseif($pesquisa == "salario"){
						$sql = "SELECT * FROM ".$tb_funcionario." WHERE salario = ".$pesquisar." ORDER BY salario";
					}
					elseif($pesquisa == "telefone"){
						$sql = "SELECT * FROM ".$tb_funcionario." WHERE telefone LIKE '".$pesquisar."%' ORDER BY telefone";
					}
				}

				$result = mysqli_query($conexao,$sql);
			?>
			
			<br><table cellspacing = 0 cellpadding = 2 rules="cols">
			<tr id='th'>
				<th>Código</th>
				<th>Nome</th>
				<th>Idade</th>
				<th>Departamento</th>
				<th>Data de Admissão</th>
				<th>Salário</th>
				<th>Telefone</th>
				<th>Ação</th>
			</tr>
	<?php
		while ($row = mysqli_fetch_array($result)){
			echo "<tr>";
				echo "<td>".$row[0]."</td>";
				echo "<td>".$row[1]."</td>";
				echo "<td>".$row[2]."</td>";
				echo "<td>".$row[3]."</td>";
				echo "<td>".date('d/m/Y', strtotime(str_replace('/','-', $row[4])))."</td>";
				echo "<td>".$row[5]."</td>";
				echo "<td>".$row[6]."</td>";
	?>
				<td><a href = "javascript:excluirRegistro('acao.php?acao=excluir&codigo=<?php echo $row[0];?>&tabela=Funcionario&nome=list.php')"><img src="img/lixeira.png" width="15" /></a></td>
			</tr>
		<?php } ?>
			</table>
		</center>
	</div>
</body>
</html>