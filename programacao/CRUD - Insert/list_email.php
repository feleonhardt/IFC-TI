<!DOCTYPE html>
<?php
	include 'connect/connect.php';
	$title = "Lista de Email";
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
		<legend>Lista de Emails</legend>
		<center>
		<input type="text" name="pesquisar" value="<?php echo $pesquisar ?>"><br><br>
		Pesquisar por: 
		<input type="radio" name="pesquisa" <?php if($pesquisa == "codigo") echo "checked"; ?> value="codigo" checked>Código
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "origem") echo "checked"; ?> value="origem">Origem
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "destino") echo "checked"; ?> value="destino">Destino
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "assunto") echo "checked"; ?> value="assunto">Assunto
  		<input type="radio" name="pesquisa" <?php if($pesquisa == "data") echo "checked"; ?> value="data">Data
  		<br><br><br>
	  		<input type="submit" name="" value="Enviar" class="button">
	          <a href = 'cad_Email.php?tabela=<?php echo $tb_email;?>'>Adicionar</a> 
	          <br><br><br>
			      <table>
			        <tr>
			          <th>Código</th>
			          <th>Origem</th>
			          <th>Destino</th>
			          <th>Assunto</th>
			          <th>Data</th>
			          <th>Excluir</th>
			        </tr>
			<?php
				if($pesquisa == ''){
					$sql = 'SELECT * FROM '.$tb_email;
				}
				else{
					if($pesquisa == "codigo"){
						$sql = "SELECT * FROM ".$tb_email." WHERE codigo = ".$pesquisar." ORDER BY codigo";
					}
					elseif($pesquisa == "origem"){
						$sql = "SELECT * FROM ".$tb_email." WHERE origem LIKE '".$pesquisar."%' ORDER BY origem";
					}
					elseif($pesquisa == "destino"){
						$sql = "SELECT * FROM ".$tb_email." WHERE destino LIKE '".$pesquisar."%' ORDER BY destino";
					}
					elseif($pesquisa == "assunto"){
						$sql = "SELECT * FROM ".$tb_email." WHERE assunto LIKE '%".$pesquisar."%' ORDER BY assunto";
					}
					elseif($pesquisa == "data"){
						$pesquisar = str_replace('/', '-', $pesquisar);
						$sql = "SELECT * FROM ".$tb_email." WHERE data_dia = ('".date('Y-m-d', strtotime($pesquisar))."') ORDER BY data_dia";
					}
				}
					$resultado = mysqli_query($conexao, $sql);
		            while ($row = mysqli_fetch_array($resultado)) {
		                echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".date('d/m/Y', strtotime(str_replace('/','-', $row[4])))."</td><td><a href =javascript:excluirRegistro('acao.php?acao=excluir&codigo=$row[0]&tabela=$tb_email&pagina=list_email.php')>Excluir</a></td></tr>";
		            }	
		     ?>
				</table>
		</center>
	</fieldset>
</form>
</body>
</html>