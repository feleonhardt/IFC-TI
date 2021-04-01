<!DOCTYPE html>
<?php
	include 'connect/connect.php';
	$title = "Lista de Vendedores";
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
		<legend>Vendedores</legend>
		<input type="text" name="pesquisar" value="<?php echo $pesquisar ?>"><br><br>
		Pesquisar por: 
		<input type="radio" name="pesquisa" <?php if($pesquisa == "codigo") echo "checked"; ?> value="codigo">Código
		<input type="radio" name="pesquisa" <?php if($pesquisa == "login") echo "checked"; ?> value="login">Login
		<input type="radio" name="pesquisa" <?php if($pesquisa == "senha") echo "checked"; ?> value="senha">Senha
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "nome") echo "checked"; ?> value="nome">Nome
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "email") echo "checked"; ?> value="email">E-mail
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "telefone") echo "checked"; ?> value="telefone">Telefone
  		<br><br><input type="submit" name="Buscar"><br><br><br>
		<center>
			<?php
				if($pesquisa == ''){
					$sql = 'SELECT * FROM '.$tb_vendedor;
				}
				else{
					if($pesquisa == "codigo"){
						$sql = "SELECT * FROM ".$tb_vendedor." WHERE codigo = ".$pesquisar." ORDER BY codigo";
					}
					elseif($pesquisa == "login"){
						$sql = "SELECT * FROM ".$tb_vendedor." WHERE login LIKE '".$pesquisar."%' ORDER BY login";
					}
					elseif($pesquisa == "senha"){
						$sql = "SELECT * FROM ".$tb_vendedor." WHERE senha LIKE '".$pesquisar."%' ORDER BY senha";
					}
					elseif($pesquisa == "nome"){
						$sql = "SELECT * FROM ".$tb_vendedor." WHERE nome LIKE '".$pesquisar."%' ORDER BY nome";
					}
					elseif($pesquisa == "email"){
						$sql = "SELECT * FROM ".$tb_vendedor." WHERE email LIKE '".$pesquisar."%' ORDER BY email";
					}
					elseif($pesquisa == "telefone"){
						$sql = "SELECT * FROM ".$tb_vendedor." WHERE telefone LIKE '".$pesquisar."%' ORDER BY telefone";
					}
				}			
					$result = mysqli_query($conexao,$sql);
					echo "<table border = 1>";
					echo "<tr><th>Código</th><th>Login</th><th>Senha</th><th>Nome</th><th>E-mail</th><th>Telefone</th><th>Excluir</th>";
					while ($row = mysqli_fetch_array($result)){
						echo "<tr>";
						echo "<td>".$row[0]."</td>";
						echo "<td>".$row[1]."</td>";
						echo "<td>".$row[2]."</td>";
						echo "<td>".$row[3]."</td>";
						echo "<td>".$row[4]."</td>";
						echo "<td>".$row[5]."</td>";
					?>
						<td><a href = "javascript:excluirRegistro('acaoMarca.php?acao=excluir&codigo=<?php echo $row[0];?>&tabela=vendedor&nome=list_vendedor.php')">Excluir</a></td>
					</tr>
					<?php } ?>
				</table>
		</center>
	</fieldset>
</form>
</body>
</html>