<!DOCTYPE html>
<?php
	include 'connect/connect.php';
	$title = "Lista de Enchente";
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
		<legend>Lista de Enchente</legend>
		<center>
		<input type="text" name="pesquisar" value="<?php echo $pesquisar ?>"><br><br>
		Pesquisar por: 
		<input type="radio" name="pesquisa" <?php if($pesquisa == "codigo") echo "checked"; ?> value="codigo" checked>Código
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "data") echo "checked"; ?> value="data">Data
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "nivel") echo "checked"; ?> value="nivel">Nível do Rio
  		<br><br><br>
	  		<input type="submit" name="" value="Enviar" class="button">
	          <a href = 'cad_Enchente.php?tabela=<?php echo $tb_enchente;?>'>Adicionar</a> 
	          <br><br><br>
			      <table>
			        <tr>
			          <th>Código</th>
			          <th>Data</th>
			          <th>Nível do Rio</th>
			          <th>Excluir</th>
			        </tr>
			<?php
				if($pesquisa == ''){
					$sql = 'SELECT * FROM '.$tb_enchente;
				}
				else{
					if($pesquisa == "codigo"){
						$sql = "SELECT * FROM ".$tb_enchente." WHERE codigo = ".$pesquisar." ORDER BY codigo";
					}
					elseif($pesquisa == "data"){
						$pesquisar = str_replace('/', '-', $pesquisar);
						$sql = "SELECT * FROM ".$tb_enchente." WHERE data_dia = date('".date('Y-m-d', strtotime($pesquisar))."') ORDER BY data_dia";
					}
					elseif($pesquisa == "nivel"){
						$sql = "SELECT * FROM ".$tb_enchente." WHERE nivel_rio = ".$pesquisar." ORDER BY nivel_rio";
					}
				}
					$resultado = mysqli_query($conexao, $sql);
		            while ($row = mysqli_fetch_array($resultado)) {
		                echo "<tr><td>".$row[0]."</td><td>".date('d/m/Y', strtotime(str_replace('/','-',$row[1])))."</td><td>".$row[2]."</td><td><a href =javascript:excluirRegistro('acao.php?acao=excluir&codigo=$row[0]&tabela=$tb_enchente&pagina=list_enchente.php')>Excluir</a></td></tr>";
		            }
		    ?>
			</table>
		</center>
	</fieldset>
</form>
</body>
</html>