<!DOCTYPE html>
<?php
	include 'connect/connect.php';
	$title = "Lista de Computadores";
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
		<legend>Lista de Computadores</legend>
		<center>
		<input type="text" name="pesquisar" value="<?php echo $pesquisar ?>"><br><br>
		Pesquisar por: 
		<input type="radio" name="pesquisa" <?php if($pesquisa == "codigo") echo "checked"; ?> value="codigo" checked>Código
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "fabricante") echo "checked"; ?> value="fabricante">Fabricante
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "processador") echo "checked"; ?> value="processador">Processador
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "memoria") echo "checked"; ?> value="memoria">Memória
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "hd") echo "checked"; ?> value="hd">HD
  		<br><br><br>
	  		<input type="submit" name="" value="Enviar" class="button">
	          <a href = 'cad_Computador.php?tabela=<?php echo $tb_computador;?>'>Adicionar</a> 
	          <br><br><br>
			      <table>
			        <tr>
			          <th>Código</th>
			          <th>Fabricante</th>
			          <th>Processador</th>
			          <th>Memória</th>
			          <th>HD</th>
			          <th>Excluir</th>
			        </tr>
			<?php
				if($pesquisa == ''){
					$sql = 'SELECT * FROM '.$tb_computador;
				}
				else{
					if($pesquisa == "codigo"){
						$sql = "SELECT * FROM ".$tb_computador." WHERE codigo = ".$pesquisar." ORDER BY codigo";
					}
					elseif($pesquisa == "fabricante"){
						$sql = "SELECT * FROM ".$tb_computador." WHERE fabricante LIKE '".$pesquisar."%' ORDER BY fabricante";
					}
					elseif($pesquisa == "processador"){
						$sql = "SELECT * FROM ".$tb_computador." WHERE processador LIKE '".$pesquisar."%' ORDER BY processador";
					}
					elseif($pesquisa == "memoria"){
						$sql = "SELECT * FROM ".$tb_computador." WHERE memoria LIKE '".$pesquisar."%' ORDER BY memoria";
					}
					elseif($pesquisa == "hd"){
						$sql = "SELECT * FROM ".$tb_computador." WHERE hd LIKE '".$pesquisar."%' ORDER BY hd";
					}
				}
					$resultado = mysqli_query($conexao, $sql);
		            while ($row = mysqli_fetch_array($resultado)) {
		                echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td><a href =javascript:excluirRegistro('acao.php?acao=excluir&codigo=$row[0]&tabela=$tb_computador&pagina=list_computador.php')>Excluir</a></td></tr>";
		            }	
		        ?>
				</table>
		</center>
	</fieldset>
</form>
</body>
</html>