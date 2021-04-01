<!DOCTYPE html>
<?php
	include 'connect/connect_escolas.php';
	$title = "Lista de Escolas";
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
		<legend>Escolas</legend>
		<input type="text" name="pesquisar" value="<?php echo $pesquisar ?>"><br><br>
		Pesquisar por: 
		<input type="radio" name="pesquisa" <?php if($pesquisa == "codigo") echo "checked"; ?> value="codigo">Código
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "nome") echo "checked"; ?> value="nome">Nome
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "cidade") echo "checked"; ?> value="cidade">Cidade
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "alunos") echo "checked"; ?> value="alunos">Número de alunos<br>
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "diretor") echo "checked"; ?> value="diretor">Nome diretor(a)
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
					elseif($pesquisa == "nome"){
						$sql = "SELECT * FROM ".$tb_marca." WHERE nome LIKE '".$pesquisar."%' ORDER BY nome";
					}
					elseif($pesquisa == "cidade"){
						$sql = "SELECT * FROM ".$tb_marca." WHERE cidade LIKE '".$pesquisar."%' ORDER BY cidade";
					}
					elseif($pesquisa == "alunos"){
						$sql = "SELECT * FROM ".$tb_marca." WHERE numero_alunos = ".$pesquisar." ORDER BY numero_alunos";
					}
					elseif($pesquisa == "diretor"){
						$sql = "SELECT * FROM ".$tb_marca." WHERE nome_diretora LIKE '".$pesquisar."%' ORDER BY nome_diretora";
					}
				}
					$result = mysqli_query($conexao,$sql);
					echo "<table border = 1>";
					echo "<tr><th>Código</th><th>Nome</th><th>Cidade</th><th>Número de Alunos</th><th>Nome diretor(a)</th>";
					while ($row = mysqli_fetch_array($result)){
						echo "<tr>";
						echo "<td>".$row[0]."</td>";
						echo "<td>".$row[1]."</td>";
						echo "<td>".$row[2]."</td>";
						echo "<td>".$row[3]."</td>";
						echo "<td>".$row[4]."</td>";
						echo "</tr>";
					}
					echo "</table><br><br>";				
			?>
		</center>
	</fieldset>
</form>
</body>
</html>