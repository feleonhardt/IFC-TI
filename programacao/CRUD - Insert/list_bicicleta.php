<!DOCTYPE html>
<?php
	include 'connect/connect.php';
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
		<legend>Lista de Bicletas</legend>
		<center>
		<input type="text" name="pesquisar" value="<?php echo $pesquisar ?>"><br><br>
		Pesquisar por: 
		<input type="radio" name="pesquisa" <?php if($pesquisa == "codigo") echo "checked"; ?> value="codigo" checked>Código
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "fabricante") echo "checked"; ?> value="fabricante">Fabricante
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "marchas") echo "checked"; ?> value="marchas">Número de Marchas
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "quadro") echo "checked"; ?> value="quadro">Formação de quadro
  		<br><br><br>
	  		<input type="submit" name="" value="Enviar" class="button">
	          <a href = 'cad_Bicicleta.php?tabela=<?php echo $tb_bicicleta;?>'>Adicionar</a> 
	          <br><br><br>
			      <table>
			        <tr>
			          <th>Código</th>
			          <th>Fabricante</th>
			          <th>Número de Marchas</th>
			          <th>Formação do Quadro</th>
			          <th>Excluir</th>
			        </tr>
			<?php
			if($pesquisa == ''){
				$sql = 'SELECT * FROM '.$tb_bicicleta;
			}
			else{
				if($pesquisa == "codigo") {
					$sql = "SELECT * FROM ".$tb_bicicleta." WHERE codigo = ".$pesquisar." ORDER BY codigo";
				}
				elseif($pesquisa == "fabricante"){
					$sql = "SELECT * FROM ".$tb_bicicleta." WHERE fabricante LIKE '".$pesquisar."%' ORDER BY fabricante";
				}
				elseif($pesquisa == "marchas"){
					$sql = "SELECT * FROM ".$tb_bicicleta." WHERE numero_marchas = ".$pesquisar." ORDER BY numero_marchas";
				}
				elseif($pesquisa == "quadro"){
					$sql = "SELECT * FROM ".$tb_bicicleta." WHERE formacao_quadro LIKE '".$pesquisar."%' ORDER BY formacao_quadro";
				}
			}				
				$resultado = mysqli_query($conexao, $sql);
	            while ($row = mysqli_fetch_array($resultado)) {
	                echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td><a href =javascript:excluirRegistro('acao.php?acao=excluir&codigo=$row[0]&tabela=$tb_bicicleta&pagina=list_bicicleta.php')>Excluir</a></td></tr>";
	            }			
	    ?>
		</table>
		</center>
	</fieldset>
</form>
</body>
</html>