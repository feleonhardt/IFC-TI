<!DOCTYPE html>
<?php
	include 'connect/connect.php';
	$title = "Lista de Clientes";
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
		<legend>Lista de Clientes</legend>
		<center>
		<input type="text" name="pesquisar" value="<?php echo $pesquisar ?>"><br><br>
		Pesquisar por: 
		<input type="radio" name="pesquisa" <?php if($pesquisa == "codigo") echo "checked"; ?> value="codigo" checked>Código
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "nome") echo "checked"; ?> value="nome">Nome
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "email") echo "checked"; ?> value="email">E-mail
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "telefone") echo "checked"; ?> value="telefone">Telefone
  		<br><br><br>
	  		<input type="submit" name="" value="Enviar" class="button">
	          <a href = 'cad_Cliente.php?tabela=<?php echo $tb_cliente;?>'>Adicionar</a> 
	          <br><br><br>
			      <table>
			        <tr>
			          <th>Código</th>
			          <th>Nome</th>
			          <th>Email</th>
			          <th>Telefone</th>
			          <th>Excluir</th>
			        </tr>
			<?php
				if($pesquisa == ''){
					$sql = 'SELECT * FROM '.$tb_cliente;
				}
				else{
					if($pesquisa == "codigo"){
						$sql = "SELECT * FROM ".$tb_cliente." WHERE codigo = ".$pesquisar." ORDER BY codigo";
					}
					elseif($pesquisa == "nome"){
						$sql = "SELECT * FROM ".$tb_cliente." WHERE nome LIKE '".$pesquisar."%' ORDER BY nome";
					}
					elseif($pesquisa == "email"){
						$sql = "SELECT * FROM ".$tb_cliente." WHERE email LIKE '".$pesquisar."%' ORDER BY email";
					}
					elseif($pesquisa == "telefone"){
						$sql = "SELECT * FROM ".$tb_cliente." WHERE telefone LIKE '".$pesquisar."%' ORDER BY telefone";
					}
				}
					$resultado = mysqli_query($conexao, $sql);
		            while ($row = mysqli_fetch_array($resultado)) {
		                echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td><a href =javascript:excluirRegistro('acao.php?acao=excluir&codigo=$row[0]&tabela=$tb_cliente&pagina=list_cliente.php')>Excluir</a></td></tr>";
		            }	

		        ?>
				</table>
		</center>
	</fieldset>
</form>
</body>
</html>