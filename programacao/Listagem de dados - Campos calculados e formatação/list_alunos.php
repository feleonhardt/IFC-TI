<!DOCTYPE html>
<?php
	include 'connect/connect.php';
	$title = "Alunos";
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
    <link rel="stylesheet" href="css/estilo2.css" />
  	<link rel="shortcut icon" href="img/lupa.png" type="image/x-icon" />
  	<link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet">
  	  <style>
	  	body{
	    	margin-left: 95px;
	  	}
		tr:hover, tr:nth-child(even):hover{
		    background-color: #008B8B;
		}
		table tbody tr:nth-child(even){
		    background-color: #20B2AA;
		}
		.vermelho{
			color: #B22222;
		}
		.azul{
			color: #0000CD;
		}
  	</style>
</head>
<body>

	<br><br><br>

	<div id="form">
		<form action="" method="post">
			<fieldset>
				<legend>Alunos</legend>
					<center>
	    				<br><br><br>

	    				<b>Filtrar por:</b><br>
						<br><input type="radio" name="pesquisa" <?php if($pesquisa == "matricula") echo "checked"; ?> value="matricula">Matrícula
				  		<br><input type="radio" name="pesquisa" <?php if($pesquisa == "nome") echo "checked"; ?> value="nome">Nome
				  		
				  		<br><br><br><br>

				  		<div id="divBusca">
							<img src="img/lupa.png" width="29" />
							<input type="text" id="txtBusca" name="pesquisar" placeholder="Digite..." value="<?php echo $pesquisar ?>"/>
							<button id="btnBusca">Consultar</button>
						</div>

						<br><br><br><br>
					</center>
			</fieldset>
		</form>
	</div>

	<div id="tab">
  		<center>

			<?php
				if($pesquisa == ''){
					$sql = 'SELECT * FROM '.$tb_alunos;
				}
				else{
					if($pesquisa == "matricula"){
						$sql = "SELECT * FROM ".$tb_alunos." WHERE matricula = ".$pesquisar." ORDER BY matricula";
					}
					elseif($pesquisa == "nome"){
						$sql = "SELECT * FROM ".$tb_alunos." WHERE aluno LIKE '".$pesquisar."%' ORDER BY aluno";
					}
				}

				$result = mysqli_query($conexao,$sql);
			?>
			
			<br><br><br><br><br><br><br><br><table cellspacing = 0 cellpadding = 2 rules="cols">
			<tr id='th'>
				<th>Matrícula</th>
				<th>Nome</th>
				<th>Nota 1</th>
				<th>Nota 2</th>
				<th>Nota 3</th>
				<th>Média</th>
				<th>Situação</th>
			</tr>
	<?php
		while ($row = mysqli_fetch_array($result)){
			echo "<tr>";
				echo "<td>".$row[0]."</td>";
				echo "<td>".$row[1]."</td>";
				if($row[2] >= 7){
					echo "<td class='azul'>".number_format($row[2],1, ',','.')."</td>";
				}
				else{
					echo "<td class='vermelho'>".number_format($row[2],1, ',','.')."</td>";
				}
				if($row[3] >= 7){
					echo "<td class='azul'>".number_format($row[3],1, ',','.')."</td>";
				}
				else{
					echo "<td class='vermelho'>".number_format($row[3],1, ',','.')."</td>";
				}
				if($row[4] >= 7){
					echo "<td class='azul'>".number_format($row[4],1, ',','.')."</td>";
				}
				else{
					echo "<td class='vermelho'>".number_format($row[4],1, ',','.')."</td>";
				}
				
				$soma = $row[2]+$row[3]+$row[4];
				$media = $soma/3;
				if($media >= 7){
					echo "<td class='azul'>".number_format($media,1, ',','.')."</td>";
				}
				else{
					echo "<td class='vermelho'>".number_format($media,1, ',','.')."</td>";
				}
				
				if($media >= 7){
					echo "<td class='azul'>Aprovado</td>";
				}
				else{
					echo "<td class='vermelho'>Reprovado</td>";
				}
			echo "</tr>";
		}
	?>

		</table>
		</center>
	</div>
</body>
</html>