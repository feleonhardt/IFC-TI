<!DOCTYPE html>
<?php
	include 'connect/connect.php';
	$title = "Lista de Jogos";
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
		<legend>Jogos</legend>
		<input type="text" name="pesquisar" value="<?php echo $pesquisar ?>"><br><br>
		Pesquisar por: 
		<input type="radio" name="pesquisa" <?php if($pesquisa == "codigo") echo "checked"; ?> value="codigo">Código
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "ano") echo "checked"; ?> value="ano">Ano Lançamento
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "classificacao") echo "checked"; ?> value="classificacao">Classificação
  		<br><br><input type="submit" name="Buscar"><br><br><br>
		<center>
			<?php
				if($pesquisa == ''){
					$sql = 'SELECT * FROM '.$tb_jogo;
				}
				else{
					if($pesquisa == "codigo"){
						$sql = "SELECT * FROM ".$tb_jogo." WHERE codigo = ".$pesquisar." ORDER BY codigo";
					}
					elseif($pesquisa == "ano"){
						$sql = "SELECT * FROM ".$tb_jogo." WHERE ano_lancamento = ".$pesquisar." ORDER BY ano_lancamento";
					}
					elseif($pesquisa == "classificacao"){
						$sql = "SELECT * FROM ".$tb_jogo." WHERE classificacao LIKE '".$pesquisar."%' ORDER BY classificacao";
					}
				}
					$result = mysqli_query($conexao,$sql);
					echo "<table border = 1>";
					echo "<tr><th>Código</th><th>Ano de Lançamento</th><th>Classificação</th><th>Excluir</th>";
					while ($row = mysqli_fetch_array($result)){
						echo "<tr>";
						echo "<td>".$row[0]."</td>";
						echo "<td>".$row[1]."</td>";
						echo "<td>".$row[2]."</td>";
						echo "<td><a href = 'acaoMarca.php?acao=excluir&codigo=$row[0]&tabela=jogo&nome=list_jogos.php'>Excluir</a></td>";
						echo "</tr>";
					}
					echo "</table><br><br>";
			?>
		</center>
	</fieldset>
</form>
</body>
</html>