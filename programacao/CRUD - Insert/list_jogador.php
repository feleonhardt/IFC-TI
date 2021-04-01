<!DOCTYPE html>
<?php
	include 'connect/connect.php';
	$title = "Lista de Jogadores";
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
		<legend>Lista de Jogadores</legend>
		<center>
		<input type="text" name="pesquisar" value="<?php echo $pesquisar ?>"><br><br>
		Pesquisar por: 
		<input type="radio" name="pesquisa" <?php if($pesquisa == "codigo") echo "checked"; ?> value="codigo" checked>Código
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "nome") echo "checked"; ?> value="nome">Nome
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "time") echo "checked"; ?> value="time">Nome do Time
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "posicao") echo "checked"; ?> value="posicao">Posição
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "gols") echo "checked"; ?> value="gols">Número de gols
  		<br><br><br>
	  		<input type="submit" name="" value="Enviar" class="button">
	          <a href = 'cad_Jogador.php?tabela=<?php echo $tb_jogador;?>'>Adicionar</a> 
	          <br><br><br>
			      <table>
			        <tr>
			          <th>Código</th>
			          <th>Nome</th>
			          <th>Time</th>
			          <th>Posição</th>
			          <th>Número de Gols</th>
			          <th>Excluir</th>
			        </tr>
			<?php
				if($pesquisa == ''){
					$sql = 'SELECT * FROM '.$tb_jogador;
				}
				else{
					if($pesquisa == "codigo"){
						$sql = "SELECT * FROM ".$tb_jogador." WHERE codigo = ".$pesquisar." ORDER BY codigo";
					}
					elseif($pesquisa == "nome"){
						$sql = "SELECT * FROM ".$tb_jogador." WHERE nome LIKE '".$pesquisar."%' ORDER BY nome";
					}
					elseif($pesquisa == "time"){
						$sql = "SELECT * FROM ".$tb_jogador." WHERE time_nome LIKE '".$pesquisar."%' ORDER BY time_nome";
					}
					elseif($pesquisa == "posicao"){
						$sql = "SELECT * FROM ".$tb_jogador." WHERE posicao LIKE '".$pesquisar."%' ORDER BY posicao";
					}
					elseif($pesquisa == "gols"){
						$sql = "SELECT * FROM ".$tb_jogador." WHERE numero_gols = ".$pesquisar." ORDER BY numero_gols";
					}
				}
					$resultado = mysqli_query($conexao, $sql);
		            while ($row = mysqli_fetch_array($resultado)) {
		                echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td><a href =javascript:excluirRegistro('acao.php?acao=excluir&codigo=$row[0]&tabela=$tb_jogador&pagina=list_jogador.php')>Excluir</a></td></tr>";
		            }
		   	?>
				</table>
		</center>
	</fieldset>
</form>
</body>
</html>