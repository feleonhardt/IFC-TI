<!DOCTYPE html>
<?php
	include 'connect/connect.php';
	$title = "Lista de Escolas";
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
		<legend>Lista de Escolas</legend>
		<center>
		<input type="text" name="pesquisar" value="<?php echo $pesquisar ?>"><br><br>
		Pesquisar por: 
		<input type="radio" name="pesquisa" <?php if($pesquisa == "codigo") echo "checked"; ?> value="codigo" checked>Código
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "nome") echo "checked"; ?> value="nome">Nome
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "cidade") echo "checked"; ?> value="cidade">Cidade
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "alunos") echo "checked"; ?> value="alunos">Número de alunos<br>
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "diretor") echo "checked"; ?> value="diretor">Nome diretor(a)
  		<br><br><br>
	  		<input type="submit" name="" value="Enviar" class="button">
	          <a href = 'cad_Escola.php?tabela=<?php echo $tb_escola;?>'>Adicionar</a> 
	          <br><br><br>
			      <table>
			        <tr>
			          <th>Código</th>
			          <th>Nome</th>
			          <th>Cidade</th>
			          <th>Número de Alunos</th>
			          <th>Nome Diretor(a)</th>
			          <th>Excluir</th>
			        </tr>
			<?php
				if($pesquisa == ''){
					$sql = 'SELECT * FROM '.$tb_escola;
				}
				else{
					if($pesquisa == "codigo"){
						$sql = "SELECT * FROM ".$tb_escola." WHERE codigo = ".$pesquisar." ORDER BY codigo";
					}
					elseif($pesquisa == "nome"){
						$sql = "SELECT * FROM ".$tb_escola." WHERE nome LIKE '".$pesquisar."%' ORDER BY nome";
					}
					elseif($pesquisa == "cidade"){
						$sql = "SELECT * FROM ".$tb_escola." WHERE cidade LIKE '".$pesquisar."%' ORDER BY cidade";
					}
					elseif($pesquisa == "alunos"){
						$sql = "SELECT * FROM ".$tb_escola." WHERE numero_alunos = ".$pesquisar." ORDER BY numero_alunos";
					}
					elseif($pesquisa == "diretor"){
						$sql = "SELECT * FROM ".$tb_escola." WHERE nome_diretora LIKE '".$pesquisar."%' ORDER BY nome_diretora";
					}
				}
					$resultado = mysqli_query($conexao, $sql);
		            while ($row = mysqli_fetch_array($resultado)) {
		                echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td><a href =javascript:excluirRegistro('acao.php?acao=excluir&codigo=$row[0]&tabela=$tb_escola&pagina=list_escola.php')>Excluir</a></td></tr>";
		            }	

		        ?>
				</table>
		</center>
	</fieldset>
</form>
</body>
</html>