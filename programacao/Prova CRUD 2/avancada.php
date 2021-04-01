<!DOCTYPE html>
<?php
	include 'connect/connect.php';
	$title = "Maquiagem";
	$pesquisar1 = "";
		if(isset($_POST['pesquisar1'])){
			$pesquisar1 = $_POST['pesquisar1'];
		}
	$pesquisar2 = "";
		if(isset($_POST['pesquisar2'])){
			$pesquisar2 = $_POST['pesquisar2'];
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
    <link rel="stylesheet" href="css/estilo2.css" />
	<link rel="shortcut icon" href="img/lupa.png" type="image/x-icon" />
  	<link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Chelsea+Market" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	
	<script>
		function excluirRegistro(url){
			if(confirm("Confirmar Exclusão?"))
				location.href = url;
		}
	</script>

</head>
<body>

<div id="pagina">

	<div id="pesquisa">
		<br>  ⠀  <a href="simples.php" class="a"><- Voltar</a><br><br>

		<form action="" method="post">
			<center>
				<br><br><br><br><br>
				
	    		<b>Filtrar por:</b><br>
				<br><input type="radio" name="pesquisa" <?php if($pesquisa == "codigo") echo "checked"; ?> value="codigo" checked>Código
		  		<br><input type="radio" name="pesquisa" <?php if($pesquisa == "validade") echo "checked"; ?> value="validade">Data de Validade
		
		 		<br><br><br>

		 		Início: <input type="text" class="txtBusca" name="pesquisar1" placeholder="Digite..." value="<?php echo $pesquisar1 ?>"/><br><br>
				Fim: <input type="text" class="txtBusca" name="pesquisar2" placeholder="Digite..." value="<?php echo $pesquisar2 ?>"/>
				
				<br><br><br>
				
				<img src="img/lupa.png" width="25" />⠀<input type="submit" value="Consultar">
			
				<br><br>
			</center>	
		</form>

		<br><br><br><br><br><br>

		<br>  ⠀  ⠀  ⠀  ⠀  ⠀  ⠀  ⠀⠀⠀    ⠀   ⠀    ⠀  ⠀  ⠀⠀<a href="simples.php" class="a">Pesquisa Simples -></a><br>
		<br>  ⠀  ⠀  ⠀  ⠀  ⠀  ⠀  ⠀  ⠀     ⠀    ⠀    ⠀    ⠀    ⠀    ⠀    ⠀   <a href="home.php" class="a">Página Inicial -></a><br><br>
	</div>

	<div id="tab">
  		<center>
			<?php
				if($pesquisa == ''){
					$sql = 'SELECT * FROM '.$tb_maquiagem;
				}
				else{
					if($pesquisa == "codigo"){
						$sql = "SELECT * FROM ".$tb_maquiagem." WHERE codigo >= ".$pesquisar1." and codigo <= ".$pesquisar2." ORDER BY codigo";
					}
					elseif ($pesquisa == "validade") {
						$pesquisar1 = str_replace('/', '-', $pesquisar1);
						$pesquisar2 = str_replace('/', '-', $pesquisar2);
						$sql = "SELECT * FROM ".$tb_maquiagem." WHERE data_de_validade >= '".date('Y-m-d', strtotime($pesquisar1))."' and data_de_validade <= '".date('Y-m-d', strtotime($pesquisar2))."' ORDER BY data_de_validade";
					}
				}

				$result = mysqli_query($conexao,$sql);
			?>
			
			<br><br><br><table cellspacing = 0 cellpadding = 2 rules="cols">
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
							echo "<td>".number_format(($row[4]),2, ',','.')."</td>";			
				?>
							<td><a href = "javascript:excluirRegistro('acao.php?acao=excluir&codigo=<?php echo $row[0];?>&tabela=Maquiagem&nome=simples.php')"><img src="img/lixeira.png" width="15" /></a></td>
						</tr>
							<?php } ?>
			</table>
			</center>
		</div>

</div>
</body>
</html>