<!DOCTYPE html>
<?php
	include 'connect/connect_bicicletas.php';
	$title = "Lista de Bicicletas";
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
		<legend>Bicletas</legend>
		<input type="text" name="pesquisar" value="<?php echo $pesquisar ?>"><br><br>
		Pesquisar por: 
		<input type="radio" name="pesquisa" <?php if($pesquisa == "codigo") echo "checked"; ?> value="codigo">Código
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "fabricante") echo "checked"; ?> value="fabricante">Fabricante
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "marchas") echo "checked"; ?> value="marchas">Número de Marchas<br>
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "quadro") echo "checked"; ?> value="quadro">Formação de quadro
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "todos") echo "checked"; ?> value="todos">Todos
  		<br><br><input type="submit" name="Buscar"><br><br><br>
		<center>
			<?php
				if($pesquisa == "codigo") {
					$sql = "SELECT * FROM ".$tb_marca." WHERE codigo LIKE '".$pesquisar."%' ORDER BY codigo";
					$result = mysqli_query($conexao,$sql);
					echo "<table border = 1>";
					echo "<tr><th>Código</th><th>Fabricante</th><th>Numero de marchas</th><th>Formação de quadro</th>";
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
				elseif($pesquisa == "fabricante"){
					$sql = "SELECT * FROM ".$tb_marca." WHERE fabricante LIKE '".$pesquisar."%' ORDER BY fabricante";
					$result = mysqli_query($conexao,$sql);
					echo "<table border = 1>";
					echo "<tr><th>Código</th><th>Fabricante</th><th>Numero de marchas</th><th>Formação de quadro</th>";
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
				elseif($pesquisa == "marchas"){
					$sql = "SELECT * FROM ".$tb_marca." WHERE numero_marchas LIKE '".$pesquisar."%' ORDER BY numero_marchas";
					$result = mysqli_query($conexao,$sql);
					echo "<table border = 1>";
					echo "<tr><th>Código</th><th>Fabricante</th><th>Numero de marchas</th><th>Formação de quadro</th>";
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
				elseif($pesquisa == "quadro"){
					$sql = "SELECT * FROM ".$tb_marca." WHERE formacao_quadro LIKE '".$pesquisar."%' ORDER BY formacao_quadro";
					$result = mysqli_query($conexao,$sql);
					echo "<table border = 1>";
					echo "<tr><th>Código</th><th>Fabricante</th><th>Numero de marchas</th><th>Formação de quadro</th>";
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
					$sql = "SELECT * FROM ".$tb_marca." WHERE codigo LIKE '".$pesquisar."%' or fabricante LIKE '".$pesquisar."%' or numero_marchas LIKE '".$pesquisar."%' or formacao_quadro LIKE '".$pesquisar."%'";
					$result = mysqli_query($conexao,$sql);
					echo "<table border = 1>";
					echo "<tr><th>Código</th><th>Fabricante</th><th>Numero de marchas</th><th>Formação de quadro</th>";
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