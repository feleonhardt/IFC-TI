<!DOCTYPE html>
<?php
	include 'connect/connect.php';
	$title = "Lista de Times";
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
		<legend>Times</legend>
		<input type="text" name="pesquisar" value="<?php echo $pesquisar ?>"><br><br>
		Pesquisar por: 
		<input type="radio" name="pesquisa" <?php if($pesquisa == "codigo") echo "checked"; ?> value="codigo">Código
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "nome") echo "checked"; ?> value="nome">Nome
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "torcedores") echo "checked"; ?> value="torcedores">Número de Torcedores
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "cidade") echo "checked"; ?> value="cidade">Cidade
  		<br><br><input type="submit" name="Buscar"><br><br><br>
		<center>
			<?php
				if($pesquisa == ''){
					$sql = 'SELECT * FROM '.$tb_time;
				}
				else{
					if($pesquisa == "codigo"){
						$sql = "SELECT * FROM ".$tb_time." WHERE codigo = ".$pesquisar." ORDER BY codigo";
					}
					elseif($pesquisa == "nome"){
						$sql = "SELECT * FROM ".$tb_time." WHERE nome LIKE '".$pesquisar."%' ORDER BY nome";
					}
					elseif($pesquisa == "torcedores"){
						$sql = "SELECT * FROM ".$tb_time." WHERE numero_torcedores = ".$pesquisar." ORDER BY numero_torcedores";
					}
					elseif($pesquisa == "cidade"){
						$sql = "SELECT * FROM ".$tb_time." WHERE cidade LIKE '".$pesquisar."%' ORDER BY cidade";
					}
				}
					$result = mysqli_query($conexao,$sql);
					echo "<table border = 1>";
					echo "<tr><th>Código</th><th>Nome</th><th>Número de torcedores</th><th>Cidade</th><th>Excluir</th>";
					while ($row = mysqli_fetch_array($result)){
						echo "<tr>";
						echo "<td>".$row[0]."</td>";
						echo "<td>".$row[1]."</td>";
						echo "<td>".$row[2]."</td>";
						echo "<td>".$row[3]."</td>";
						echo "<td><a href = 'acaoMarca.php?acao=excluir&codigo=$row[0]&tabela=time_futebol&nome=list_time.php'>Excluir</a></td>";
						echo "</tr>";
					}
					echo "</table><br><br>";
			?>
		</center>
	</fieldset>
</form>
</body>
</html>