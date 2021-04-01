<!DOCTYPE html>
<?php
	include 'connect/connect_carros.php';
	$title = "Lista de Carros";
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
  	<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
  	<style>
		tr:hover, tr:nth-child(even):hover{
		    background-color: #FF1493;
		}
		table tbody tr:nth-child(even){
		    background-color:#90EE90;
		}
  	</style>
</head>
<body>
<form action="" method="post">
	<fieldset>
		<legend>Carros</legend>
		<input type="text" name="pesquisar" value="<?php echo $pesquisar ?>"><br><br>
		Pesquisar por: 
		<input type="radio" name="pesquisa" <?php if($pesquisa == "codigo") echo "checked"; ?> value="codigo">Código
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "ano") echo "checked"; ?> value="ano">Ano de Fabricação
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "data") echo "checked"; ?> value="data">Data de Venda<br>
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "valor") echo "checked"; ?> value="valor">Valor
  		<br><br><input type="submit" name="Buscar"><br><br><br>
		<center>
			<?php
				if($pesquisa == ''){
					$sql = 'SELECT * FROM '.$tb_marca;
				}
				else{
					if($pesquisa == "codigo"){
						$sql = "SELECT * FROM ".$tb_marca." WHERE codigo = ".$pesquisar." ORDER BY codigo";
					}
					elseif($pesquisa == "ano"){
						$sql = "SELECT * FROM ".$tb_marca." WHERE ano_fabricacao = ".$pesquisar." ORDER BY ano_fabricacao";
					}
					elseif($pesquisa == "data"){
						$sql = "SELECT * FROM ".$tb_marca." WHERE data_venda = '".$pesquisar."' ORDER BY data_venda";
					}
					elseif($pesquisa == "valor"){
						$sql = "SELECT * FROM ".$tb_marca." WHERE valor = ".$pesquisar." ORDER BY valor";
					}
				}
					$result = mysqli_query($conexao,$sql);
					echo "<table border = 1>";
					echo "<tr><th>Código</th><th>Ano de Fabricação</th><th>Data de Venda</th><th>Valor</th>";
					while ($row = mysqli_fetch_array($result)){
						echo "<tr>";
						echo "<td>".$row[0]."</td>";
						echo "<td>".$row[1]."</td>";
						echo "<td>".$row[2]."</td>";
						echo "<td>".$row[3]."</td>";
						echo "</tr>";
					}
					echo "</table><br><br>";
			?>
		</center>
	</fieldset>
</form>
</body>
</html>