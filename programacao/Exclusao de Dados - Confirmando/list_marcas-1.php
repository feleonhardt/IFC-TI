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
<script>
	function excluirRegistro(url){
		if(confirm("Confirmar Exclusão?"))
			location.href = url;
	}
</script>
</head>
<body>
<form action="" method="post">
	<fieldset>
		<legend>Marcas</legend>
		<input type="text" name="letras" value="<?php echo $letras ?>"><br><br>
		Pesquisar por: 
		<input type="radio" name="pesquisa" <?php if($pesquisa == "codigo") echo "checked"; ?> value="codigo">Código
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "descricao") echo "checked"; ?> value="descricao">Descrição
  		<br><br><input type="submit" name="Buscar"><br><br><br>
		<center>
			<?php
				if($pesquisa == ''){
					$sql = 'SELECT * FROM '.$tb_marca;
				}
				else{
					if($pesquisa == "codigo"){
						$sql = "SELECT * FROM ".$tb_marca." WHERE codigo = ".$letras." ORDER BY codigo";
					}
					elseif($pesquisa == "descricao"){
						$sql = "SELECT * FROM ".$tb_marca." WHERE descricao LIKE '".$letras."%' ORDER BY descricao";
					}
				}
					$result = mysqli_query($conexao,$sql);
					echo "<table border = 1>";
					echo "<tr><th>Código</th><th>Descrição</th><th>Excluir</th>";
					while ($row = mysqli_fetch_array($result)){
				?>
				<tr><td><?php echo $row[0];?></td>
					<td><?php echo $row[1];?></td>
					<td><a href = "javascript:excluirRegistro('acaoMarca.php?acao=excluir&codigo=<?php echo $row[0];?>&tabela=marca&nome=list_marcas-1.php')">Excluir</a></td>
				</tr>
				<?php }	?>
			</table>
		</center>
	</fieldset>
</form>
</body>
</html>