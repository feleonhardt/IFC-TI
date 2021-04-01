<!DOCTYPE html>
<?php
	include 'connect/connect_predios.php';
	$title = "Lista de Predios";
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
		<legend>Prédios</legend>
		<input type="text" name="pesquisar" value="<?php echo $pesquisar ?>"><br><br>
		Pesquisar por: 
		<input type="radio" name="pesquisa" <?php if($pesquisa == "codigo") echo "checked"; ?> value="codigo">Código
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "nome") echo "checked"; ?> value="nome">Nome
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "salas") echo "checked"; ?> value="salas">Número de Salas
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "andares") echo "checked"; ?> value="andares">Número de Andares
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "todos") echo "checked"; ?> value="todos">Todos
  		<br><br><input type="submit" name="Buscar"><br><br><br>
		<center>
			<?php
				if($pesquisa == "codigo"){
					$sql = "SELECT * FROM ".$tb_marca." WHERE codigo LIKE '".$pesquisar."%' ORDER BY codigo";
					$result = mysqli_query($conexao,$sql);
					echo "<table border = 1>";
					echo "<tr><th>Código</th><th>Nome</th><th>Numero de salas</th><th>Numero de andares</th>";
					while ($row = mysqli_fetch_array($result)){
						echo "<tr>";
						echo "<td>".$row[0]."</td>";
						echo "<td>".$row[1]."</td>";
						echo "<td>".$row[2]."</td>";
						echo "<td>".$row[3]."</td>";
						echo "</tr>";
					}
					echo "</table><br><br>";
				}
				elseif($pesquisa == "nome"){
					$sql = "SELECT * FROM ".$tb_marca." WHERE nome LIKE '".$pesquisar."%' ORDER BY nome";
					$result = mysqli_query($conexao,$sql);
					echo "<table border = 1>";
					echo "<tr><th>Código</th><th>Nome</th><th>Numero de salas</th><th>Numero de andares</th>";
					while ($row = mysqli_fetch_array($result)){
						echo "<tr>";
						echo "<td>".$row[0]."</td>";
						echo "<td>".$row[1]."</td>";
						echo "<td>".$row[2]."</td>";
						echo "<td>".$row[3]."</td>";
						echo "</tr>";
					}
					echo "</table><br><br>";
				}
				elseif($pesquisa == "salas"){
					$sql = "SELECT * FROM ".$tb_marca." WHERE numero_salas LIKE '".$pesquisar."%' ORDER BY numero_salas";
					$result = mysqli_query($conexao,$sql);
					echo "<table border = 1>";
					echo "<tr><th>Código</th><th>Nome</th><th>Número de salas</th><th>Número de andares</th>";
					while ($row = mysqli_fetch_array($result)){
						echo "<tr>";
						echo "<td>".$row[0]."</td>";
						echo "<td>".$row[1]."</td>";
						echo "<td>".$row[2]."</td>";
						echo "<td>".$row[3]."</td>";
						echo "</tr>";
					}
					echo "</table><br><br>";
				}
				elseif($pesquisa == "andares"){
					$sql = "SELECT * FROM ".$tb_marca." WHERE numero_andares LIKE '".$pesquisar."%' ORDER BY numero_andares";
					$result = mysqli_query($conexao,$sql);
					echo "<table border = 1>";
					echo "<tr><th>Código</th><th>Nome</th><th>Numero de salas</th><th>Numero de andares</th>";
					while ($row = mysqli_fetch_array($result)){
						echo "<tr>";
						echo "<td>".$row[0]."</td>";
						echo "<td>".$row[1]."</td>";
						echo "<td>".$row[2]."</td>";
						echo "<td>".$row[3]."</td>";
						echo "</tr>";
					}
					echo "</table><br><br>";
				}
				elseif($pesquisa == "todos"){
					$sql = "SELECT * FROM ".$tb_marca." WHERE codigo LIKE '".$pesquisar."%' or nome LIKE '".$pesquisar."%' or numero_salas LIKE '".$pesquisar."%' or numero_andares LIKE '".$pesquisar."%'";
					$result = mysqli_query($conexao,$sql);
					echo "<table border = 1>";
					echo "<tr><th>Código</th><th>Nome</th><th>Numero de salas</th><th>Numero de andares</th>";
					while ($row = mysqli_fetch_array($result)){
						echo "<tr>";
						echo "<td>".$row[0]."</td>";
						echo "<td>".$row[1]."</td>";
						echo "<td>".$row[2]."</td>";
						echo "<td>".$row[3]."</td>";
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