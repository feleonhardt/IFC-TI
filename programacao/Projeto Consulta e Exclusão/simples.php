<!DOCTYPE html>
<?php
	include 'connect/connect.php';
	$title = "Maquiagem";
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
    <link rel="stylesheet" href="css/estilo3.css" />
  	<link rel="shortcut icon" href="img/batom.jpg" type="image/x-icon" />
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
	<br><br><br>
	<br><br><br>
	<div id="form">
		<form action="" method="post">
			<fieldset>
					<center>
	    				<br><br>

	    				<b>Filtrar por:</b><br>
						<br><input type="radio" name="pesquisa" <?php if($pesquisa == "codigo") echo "checked"; ?> value="codigo" checked>Código
				  		<br><input type="radio" name="pesquisa" <?php if($pesquisa == "nome") echo "checked"; ?> value="nome">Nome
				  		<br><input type="radio" name="pesquisa" <?php if($pesquisa == "validade") echo "checked"; ?> value="validade">Data de Validade
				  		<br><input type="radio" name="pesquisa" <?php if($pesquisa == "perco") echo "checked"; ?> value="preco">Preço
				  		
				  		<br><br><br>

						<input type="text" id="txtBusca" name="pesquisar" placeholder="Digite..." value="<?php echo $pesquisar ?>"/><br><br><br>
						<input type="submit">

						<br><br>
					</center>
			</fieldset>
		</form>
	</div>

	<div id="tab">
  		<center>

			<?php
				if($pesquisa == ''){
					$sql = 'SELECT * FROM '.$tb_maquiagem;
				}
				else{
					if($pesquisa == "codigo"){
						$sql = "SELECT * FROM ".$tb_maquiagem." WHERE codigo = ".$pesquisar." ORDER BY codigo";
					}
					elseif($pesquisa == "nome"){
						$sql = "SELECT * FROM ".$tb_maquiagem." WHERE nome LIKE '".$pesquisar."%' ORDER BY nome";
					}
					elseif ($pesquisa == "validade") {
						$pesquisar = str_replace('/', '-', $pesquisar);
						$sql = "SELECT * FROM ".$tb_maquiagem." WHERE data_de_validade = date('".date('Y-m-d', strtotime($pesquisar))."') ORDER BY data_de_validade";
					}
					elseif($pesquisa == "preco"){
						$sql = "SELECT * FROM ".$tb_maquiagem." WHERE preco = ".$pesquisar." ORDER BY preco";
					}
				}

				$result = mysqli_query($conexao,$sql);
			?>
			
			<br><table cellspacing = 0 cellpadding = 2 rules="cols">
			<tr id='th'>
				<th>Código</th>
				<th>Nome</th>
				<th>Marca</th>
				<th>Data de Validade</th>
				<th>Preço</th>
				<th>Excluir</th>
			</tr>
	<?php
		while ($row = mysqli_fetch_array($result)){
			echo "<tr>";
				echo "<td>".$row[0]."</td>";
				echo "<td>".$row[1]."</td>";
				echo "<td>".$row[2]."</td>";
				echo "<td>".date('d/m/Y', strtotime(str_replace('/','-', $row[3])))."</td>";
				echo "<td>".$row[4]."</td>";			
	?>
				<td><a href = "javascript:excluirRegistro('acao.php?acao=excluir&codigo=<?php echo $row[0];?>&tabela=Maquiagem&nome=simples.php')"><img src="img/lixeira.png" width="15" /></a></td>
			</tr>
		<?php } ?>
			</table>
		</center>
	</div>
</body>
</html>