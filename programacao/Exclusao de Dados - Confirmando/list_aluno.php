<!DOCTYPE html>
<?php
	include 'connect/connect.php';
	$title = "Lista de Alunos";
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
		<legend>Alunos</legend>
		<input type="text" name="pesquisar" value="<?php echo $pesquisar ?>"><br><br>
	    Pesquisar por: 
		<input type="radio" name="pesquisa" <?php if($pesquisa == "codigo") echo "checked"; ?> value="codigo">Código
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "nome") echo "checked"; ?> value="nome">Nome
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "dataNasc") echo "checked"; ?> value="dataNasc">Data de Nascimento
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "curso") echo "checked"; ?> value="curso">Curso
  		<br><br><input type="submit" name="Buscar"><br><br><br>
		<center>
			<?php
				if($pesquisa == ''){
					$sql = 'SELECT * FROM '.$tb_aluno;
				}
				else{
					if($pesquisa == "codigo"){
						$sql = "SELECT * FROM ".$tb_aluno." WHERE codigo = ".$pesquisar." ORDER BY codigo";
					}
					elseif($pesquisa == "nome"){
						$sql = "SELECT * FROM ".$tb_aluno." WHERE nome LIKE '".$pesquisar."%' ORDER BY nome";
					}
					elseif ($pesquisa == "dataNasc") {
						$pesquisar = str_replace('/', '-', $pesquisar);
						$sql = "SELECT * FROM ".$tb_aluno." WHERE data_nascimento = date('".date('Y-m-d', strtotime($pesquisar))."') ORDER BY data_nascimento";
					}
					elseif($pesquisa == "curso"){
						$sql = "SELECT * FROM ".$tb_aluno." WHERE curso LIKE '".$pesquisar."%' ORDER BY curso";
					}
				}
				
					$result = mysqli_query($conexao,$sql);
					echo "<table border = 1>";
					echo "<tr><th>Código</th><th>Nome</th><th>Data de Nascimento</th><th>Curso</th><th>Excluir</th>";
					while ($row = mysqli_fetch_array($result)){
						echo "<tr>";
						echo "<td>".$row[0]."</td>";
						echo "<td>".$row[1]."</td>";
						echo "<td>".date('d/m/Y', strtotime(str_replace('/','-', $row[2])))."</td>";
						echo "<td>".$row[3]."</td>";
					?>
						<td><a href = "javascript:excluirRegistro('acaoMarca.php?acao=excluir&codigo=<?php echo $row[0];?>&tabela=aluno&nome=list_aluno.php')">Excluir</a></td>
					</tr>
					<?php } ?>
				</table>
		</center>
	</fieldset>
</form>
</body>
</html>