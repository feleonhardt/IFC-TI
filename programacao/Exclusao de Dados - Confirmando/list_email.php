<!DOCTYPE html>
<?php
	include 'connect/connect.php';
	$title = "Lista de Email";
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
		<legend>Emails</legend>
		<input type="text" name="pesquisar" value="<?php echo $pesquisar ?>"><br><br>
		Pesquisar por: 
		<input type="radio" name="pesquisa" <?php if($pesquisa == "codigo") echo "checked"; ?> value="codigo">Código
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "origem") echo "checked"; ?> value="origem">Origem
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "destino") echo "checked"; ?> value="destino">Destino
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "assunto") echo "checked"; ?> value="assunto">Assunto
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "data") echo "checked"; ?> value="data">Data
  		<br><br><input type="submit" name="Buscar"><br><br><br>
		<center>
			<?php
				if($pesquisa == ''){
					$sql = 'SELECT * FROM '.$tb_email;
				}
				else{
					if($pesquisa == "codigo"){
						$sql = "SELECT * FROM ".$tb_email." WHERE codigo = ".$pesquisar." ORDER BY codigo";
					}
					elseif($pesquisa == "origem"){
						$sql = "SELECT * FROM ".$tb_email." WHERE origem LIKE '".$pesquisar."%' ORDER BY origem";
					}
					elseif($pesquisa == "destino"){
						$sql = "SELECT * FROM ".$tb_email." WHERE destino LIKE '".$pesquisar."%' ORDER BY destino";
					}
					elseif($pesquisa == "assunto"){
						$sql = "SELECT * FROM ".$tb_email." WHERE assunto LIKE '".$pesquisar."%' ORDER BY assunto";
					}
					elseif($pesquisa == "data"){
						$pesquisar = str_replace('/', '-', $pesquisar);
						$sql = "SELECT * FROM ".$tb_email." WHERE data_dia = ('".date('Y-m-d', strtotime($pesquisar))."') ORDER BY data_dia";
					}
				}
					$result = mysqli_query($conexao,$sql);
					echo "<table border = 1>";
					echo "<tr><th>Código</th><th>Origem</th><th>Destino</th><th>Assunto</th><th>Data</th><th>Excluir</th>";
					while ($row = mysqli_fetch_array($result)){
						echo "<tr>";
						echo "<td>".$row[0]."</td>";
						echo "<td>".$row[1]."</td>";
						echo "<td>".$row[2]."</td>";
						echo "<td>".$row[3]."</td>";
						echo "<td>".date('d/m/Y', strtotime(str_replace('/','-', $row[4])))."</td>";
					?>
						<td><a href = "javascript:excluirRegistro('acaoMarca.php?acao=excluir&codigo=<?php echo $row[0];?>&tabela=email&nome=list_email.php')">Excluir</a></td>
					</tr>
					<?php } ?>
				</table>
		</center>
	</fieldset>
</form>
</body>
</html>