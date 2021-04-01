<!DOCTYPE html>
<?php
	include 'connect/connect_jogador.php';
	$title = "Lista de Jogadores";
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
		<legend>Jogadores</legend>
		<input type="text" name="pesquisar" value="<?php echo $pesquisar ?>"><br><br>
		Pesquisar por: 
		<input type="radio" name="pesquisa" <?php if($pesquisa == "codigo") echo "checked"; ?> value="codigo">Código
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "nome") echo "checked"; ?> value="nome">Nome
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "time") echo "checked"; ?> value="time">Nome do Time
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "posicao") echo "checked"; ?> value="posicao">Posição
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "gols") echo "checked"; ?> value="gols">Número de gols
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "todos") echo "checked"; ?> value="todos">Todos
  		<br><br><input type="submit" name="Buscar"><br><br><br>
		<center>
			<?php
				if($pesquisa == "codigo"){
					$sql = "SELECT * FROM ".$tb_marca." WHERE codigo LIKE '".$pesquisar."%' ORDER BY codigo";
					$result = mysqli_query($conexao,$sql);
					echo "<table border = 1>";
					echo "<tr><th>Código</th><th>Nome</th><th>Nome do Time</th><th>Posição</th><th>Número de gols</th>";
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
				}
				elseif($pesquisa == "nome"){
					$sql = "SELECT * FROM ".$tb_marca." WHERE nome LIKE '".$pesquisar."%' ORDER BY nome";
					$result = mysqli_query($conexao,$sql);
					echo "<table border = 1>";
					echo "<tr><th>Código</th><th>Nome</th><th>Nome do Time</th><th>Posição</th><th>Número de gols</th>";
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
				}
				elseif($pesquisa == "time"){
					$sql = "SELECT * FROM ".$tb_marca." WHERE time_nome LIKE '".$pesquisar."%' ORDER BY time_nome";
					$result = mysqli_query($conexao,$sql);
					echo "<table border = 1>";
					echo "<tr><th>Código</th><th>Nome</th><th>Nome do Time</th><th>Posição</th><th>Número de gols</th>";
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
				}
				elseif($pesquisa == "posicao"){
					$sql = "SELECT * FROM ".$tb_marca." WHERE posicao LIKE '".$pesquisar."%' ORDER BY posicao";
					$result = mysqli_query($conexao,$sql);
					echo "<table border = 1>";
					echo "<tr><th>Código</th><th>Nome</th><th>Nome do Time</th><th>Posição</th><th>Número de gols</th>";
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
				}
				elseif($pesquisa == "gols"){
					$sql = "SELECT * FROM ".$tb_marca." WHERE numero_gols LIKE '".$pesquisar."%' ORDER BY numero_gols";
					$result = mysqli_query($conexao,$sql);
					echo "<table border = 1>";
					echo "<tr><th>Código</th><th>Nome</th><th>Nome do Time</th><th>Posição</th><th>Número de gols</th>";
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
				}
				elseif($pesquisa == "todos"){
					$sql = "SELECT * FROM ".$tb_marca." WHERE codigo LIKE '".$pesquisar."%' or nome LIKE '".$pesquisar."%' or time_nome LIKE '".$pesquisar."%' or posicao LIKE '".$pesquisar."%' or numero_gols LIKE '".$pesquisar."%'";
					$result = mysqli_query($conexao,$sql);
					echo "<table border = 1>";
					echo "<tr><th>Código</th><th>Nome</th><th>Nome do Time</th><th>Posição</th><th>Número de gols</th>";
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
				}
				
			?>
		</center>
	</fieldset>
</form>
</body>
</html>