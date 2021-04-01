<!DOCTYPE html>
<?php
	include 'connect/connect.php';
	$title = "Lista de Jogos";
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
		<legend>Lista de Jogos</legend>
		<center>
		<input type="text" name="pesquisar" value="<?php echo $pesquisar ?>"><br><br>
		Pesquisar por: 
		<input type="radio" name="pesquisa" <?php if($pesquisa == "codigo") echo "checked"; ?> value="codigo" checked>Código
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "ano") echo "checked"; ?> value="ano">Ano Lançamento
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "classificacao") echo "checked"; ?> value="classificacao">Classificação
  		<br><br><br>
	  		<input type="submit" name="" value="Enviar" class="button">
	          <a href = 'cad_Jogo.php?tabela=<?php echo $tb_jogo;?>'>Adicionar</a> 
	          <br><br><br>
			      <table>
			        <tr>
			          <th>Código</th>
			          <th>Ano de Lançamento</th>
			          <th>Classificação</th>
			          <th>Excluir</th>
			        </tr>
			<?php
				if($pesquisa == ''){
					$sql = 'SELECT * FROM '.$tb_jogo;
				}
				else{
					if($pesquisa == "codigo"){
						$sql = "SELECT * FROM ".$tb_jogo." WHERE codigo = ".$pesquisar." ORDER BY codigo";
					}
					elseif($pesquisa == "ano"){
						$sql = "SELECT * FROM ".$tb_jogo." WHERE ano_lancamento = ".$pesquisar." ORDER BY ano_lancamento";
					}
					elseif($pesquisa == "classificacao"){
						$sql = "SELECT * FROM ".$tb_jogo." WHERE classificacao LIKE '".$pesquisar."%' ORDER BY classificacao";
					}
				}
					$resultado = mysqli_query($conexao, $sql);
		            while ($row = mysqli_fetch_array($resultado)) {
		                echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td><a href =javascript:excluirRegistro('acao.php?acao=excluir&codigo=$row[0]&tabela=$tb_jogo&pagina=list_jogo.php')>Excluir</a></td></tr>";
		            }
		?>
				</table>
		</center>
	</fieldset>
</form>
</body>
</html>