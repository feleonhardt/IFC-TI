<!DOCTYPE html>
<?php
	include 'connect/connect.php';
	$title = "Lista de Marcas";
	$letras = "";
		if(isset($_POST['letras'])){
			$letras = $_POST['letras'];
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
		<legend>Marcas</legend>
		<input type="text" name="letras" value="<?php echo $letras ?>"><br><br>
		Pesquisar por: 
		<input type="radio" name="pesquisa" <?php if($pesquisa == "codigo") echo "checked"; ?> value="codigo">Código
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "descricao") echo "checked"; ?> value="descricao">Descrição
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "todos") echo "checked"; ?> value="todos">Todos
  		<br><br><input type="submit" name="Buscar"><br><br><br>
		<center>
			<?php
				if($pesquisa == "codigo"){
					$sql = "SELECT * FROM ".$tb_marca." WHERE codigo LIKE '".$letras."%' ORDER BY codigo";
					$result = mysqli_query($conexao,$sql);
					echo "<table border = 1>";
					echo "<tr><th>Código</th><th>Descrição</th>";
					while ($row = mysqli_fetch_array($result)){
						echo "<tr>";
						echo "<td>".$row[0]."</td>";
						echo "<td>".$row[1]."</td>";
						echo "</tr>";
					}
					echo "</table><br><br>";
				}
				elseif($pesquisa == "descricao"){
					$sql = "SELECT * FROM ".$tb_marca." WHERE descricao LIKE '".$letras."%' ORDER BY descricao";
					$result = mysqli_query($conexao,$sql);
					echo "<table border = 1>";
					echo "<tr><th>Código</th><th>Descrição</th>";
					while ($row = mysqli_fetch_array($result)){
						echo "<tr>";
						echo "<td>".$row[0]."</td>";
						echo "<td>".$row[1]."</td>";
						echo "</tr>";
					}
					echo "</table><br><br>";
				}
				elseif($pesquisa == "todos"){
					$sql = "SELECT * FROM ".$tb_marca." WHERE codigo LIKE '".$letras."%' or descricao LIKE '".$letras."%'";
					$result = mysqli_query($conexao,$sql);
					echo "<table border = 1>";
					echo "<tr><th>Código</th><th>Descrição</th>";
					while ($row = mysqli_fetch_array($result)){
						echo "<tr>";
						echo "<td>".$row[0]."</td>";
						echo "<td>".$row[1]."</td>";
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