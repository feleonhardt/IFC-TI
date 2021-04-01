<!DOCTYPE html>
<?php
	include 'connect/connect.php';
	$title = "Lista de Carros";
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
		<legend>Lista de Carros</legend>
		<center>
		<input type="text" name="pesquisar" value="<?php echo $pesquisar ?>"><br><br>
		Pesquisar por: 
		<input type="radio" name="pesquisa" <?php if($pesquisa == "codigo") echo "checked"; ?> value="codigo" checked>Código
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "ano") echo "checked"; ?> value="ano">Ano de Fabricação
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "data") echo "checked"; ?> value="data">Data de Venda<br>
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "valor") echo "checked"; ?> value="valor">Valor
  		<br><br><br>
	  		<input type="submit" name="" value="Enviar" class="button">
	          <a href = 'cad_Carro.php?tabela=<?php echo $tb_carro;?>'>Adicionar</a> 
	          <br><br><br>
			      <table>
			        <tr>
			          <th>Código</th>
			          <th>Ano de Fabricação</th>
			          <th>Data da Venda</th>
			          <th>Valor</th>
			          <th>Excluir</th>
			        </tr>
			<?php
				if($pesquisa == ''){
					$sql = 'SELECT * FROM '.$tb_carro;
				}
				else{
					if($pesquisa == "codigo"){
						$sql = "SELECT * FROM ".$tb_carro." WHERE codigo = ".$pesquisar." ORDER BY codigo";
					}
					elseif($pesquisa == "ano"){
						$sql = "SELECT * FROM ".$tb_carro." WHERE ano_fabricacao = ".$pesquisar." ORDER BY ano_fabricacao";
					}
					elseif($pesquisa == "data"){
						$pesquisar = str_replace('/', '-', $pesquisar);
						$sql = "SELECT * FROM ".$tb_carro." WHERE data_venda = date('".date('Y-m-d', strtotime($pesquisar))."') ORDER BY data_venda";
					}
					elseif($pesquisa == "valor"){
						$sql = "SELECT * FROM ".$tb_carro." WHERE valor = ".$pesquisar." ORDER BY valor";
					}
				}
					$resultado = mysqli_query($conexao, $sql);
		            while ($row = mysqli_fetch_array($resultado)) {
		                echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".date('d/m/Y', strtotime(str_replace('/','-', $row[2])))."</td><td>".$row[3]."</td><td><a href =javascript:excluirRegistro('acao.php?acao=excluir&codigo=$row[0]&tabela=$tb_carro&pagina=list_carro.php')>Excluir</a></td></tr>";
		            }	
				?>
			</table>
		</center>
	</fieldset>
</form>
</body>
</html>