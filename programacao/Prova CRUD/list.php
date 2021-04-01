<!DOCTYPE html>
<?php
	include 'connect/connect.php';
	$title = "Produtos";
	$pesquisar = "";
		if(isset($_POST['pesquisar'])){
			$pesquisar = $_POST['pesquisar'];
		}
	$pesquisa = "";
		if(isset($_POST['pesquisa'])){
			$pesquisa = $_POST['pesquisa'];
		}

	$somaQuantidade = 0;
	$somaValorItem = 0;
?>
<html>
<head>
    <meta charset="UTF-8" />
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/estilo.css" />
    <link rel="stylesheet" href="css/estilo2.css" />
  	<link rel="shortcut icon" href="img/lupa.png" type="image/x-icon" />
  	<link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet">
  	  <style>
		tr:hover, tr:nth-child(even):hover{
		    background-color: #008B8B;
		}
		table tbody tr:nth-child(even){
		    background-color: #20B2AA;
		}
  	</style>
</head>
<body>

	<br><br><br>

	<div id="form">
		<form action="" method="post">
			<fieldset>
				<legend>Produtos</legend>
					<center>
	    				<br><br><br>

	    				<b>Filtrar por:</b><br>
						<br><input type="radio" name="pesquisa" <?php if($pesquisa == "codigo") echo "checked"; ?> value="codigo">Código
				  		<br><input type="radio" name="pesquisa" <?php if($pesquisa == "descricao") echo "checked"; ?> value="descricao">Descrição
				  		<br><input type="radio" name="pesquisa" <?php if($pesquisa == "dataVenda") echo "checked"; ?> value="dataVenda">Data da Venda
				  		
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
					$sql = 'SELECT * FROM '.$tb_produtos;
				}
				else{
					if($pesquisa == "codigo"){
						$sql = "SELECT * FROM ".$tb_produtos." WHERE codigo = ".$pesquisar." ORDER BY codigo";
					}
					elseif($pesquisa == "descricao"){
						$sql = "SELECT * FROM ".$tb_produtos." WHERE descricao LIKE '".$pesquisar."%' ORDER BY descricao";
					}
					elseif ($pesquisa == "dataVenda") {
						$pesquisar = str_replace('/', '-', $pesquisar);
						$sql = "SELECT * FROM ".$tb_produtos." WHERE dataVenda = date('".date('Y-m-d', strtotime($pesquisar))."') ORDER BY dataVenda";
					}
				}

				$result = mysqli_query($conexao,$sql);
			?>
			
			<br><br><br><br><br><br><br><br><table cellspacing = 0 cellpadding = 2 rules="cols">
			<tr id='th'>
				<th>Código</th>
				<th>Descrição</th>
				<th>Data da Venda</th>
				<th>Valor Unitário</th>
				<th>Quantidade</th>
				<th>Valor Item</th>
			</tr>
	<?php
		while ($row = mysqli_fetch_array($result)){
			echo "<tr>";
				echo "<td>".$row[0]."</td>";
				echo "<td>".$row[1]."</td>";
				echo "<td>".date('d/m/Y', strtotime(str_replace('/','-', $row[2])))."</td>";
				echo "<td>".number_format($row[3],2, ',','.')."</td>";
				echo "<td>".$row[4]."</td>";
				echo "<td>".number_format(($row[3]*$row[4]),2, ',','.')."</td>";
			echo "</tr>";
			$somaQuantidade = $somaQuantidade + $row[4];
			$somaValorItem = $somaValorItem + ($row[3]*$row[4]);
		}
	?>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			<?php
				echo "<td>".$somaQuantidade."</td>";
				echo "<td>".number_format($somaValorItem,2, ',','.')."</td>";
			?>
			</tr>
		</table>
		</center>
	</div>
</body>
</html>