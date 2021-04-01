<!DOCTYPE html>
<?php
	include 'connect/connect.php';
	$title = "Atletas";
	$pesquisar = "";
		if(isset($_POST['pesquisar'])){
			$pesquisar = $_POST['pesquisar'];
		}
	$pesquisa = "";
		if(isset($_POST['pesquisa'])){
			$pesquisa = $_POST['pesquisa'];
		}
	$maiorSaltoUm = 0;
	$maiorSaltoDois = 0;
	$maiorSaltoTres = 0;
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
  	</style>
</head>
<body>

	<br><br>

	<div id="form">
		<form action="" method="post">
			<fieldset>
				<legend>Atletas</legend>
					<center>
	    				<br><br><br>

	    				<b>Filtrar por:</b><br>
						<br><input type="radio" name="pesquisa" <?php if($pesquisa == "codigo") echo "checked"; ?> value="codigo">Código
				  		<br><input type="radio" name="pesquisa" <?php if($pesquisa == "nome") echo "checked"; ?> value="nome">Nome
				  		<br><input type="radio" name="pesquisa" <?php if($pesquisa == "saltoUm") echo "checked"; ?> value="saltoUm">Salto 1
				  		<br><input type="radio" name="pesquisa" <?php if($pesquisa == "saltoDois") echo "checked"; ?> value="saltoDois">Salto 2
				  		<br><input type="radio" name="pesquisa" <?php if($pesquisa == "saltoTres") echo "checked"; ?> value="saltoTres">Salto 3
				  		
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
					$sql = 'SELECT * FROM '.$tb_atletas;
				}
				else{
					if($pesquisa == "codigo"){
						$sql = "SELECT * FROM ".$tb_atletas." WHERE codigo = ".$pesquisar." ORDER BY codigo";
					}
					elseif($pesquisa == "nome"){
						$sql = "SELECT * FROM ".$tb_atletas." WHERE nome LIKE '".$pesquisar."%' ORDER BY nome";
					}
					elseif($pesquisa == "saltoUm"){
						$sql = "SELECT * FROM ".$tb_atletas." WHERE saltoUm >= ".$pesquisar." ORDER BY saltoUm";
					}
					elseif($pesquisa == "saltoDois"){
						$sql = "SELECT * FROM ".$tb_atletas." WHERE saltoDois >= ".$pesquisar." ORDER BY saltoDois";
					}
					elseif($pesquisa == "saltoTres"){
						$sql = "SELECT * FROM ".$tb_atletas." WHERE saltoTres >= ".$pesquisar." ORDER BY saltoTres";
					}
				}

				$result = mysqli_query($conexao,$sql);
			?>
			
			<br><br><br><br><br><br><br><br><table cellspacing = 0 cellpadding = 2 rules="cols">
			<tr id='th'>
				<th>Código</th>
				<th>Nome</th>
				<th>Salto 1</th>
				<th>Salto 2</th>
				<th>Salto 3</th>
				<th>Total</th>
				<th>Média</th>
			</tr>
	<?php
		while ($row = mysqli_fetch_array($result)){
			echo "<tr>";
				echo "<td>".$row[0]."</td>";
				echo "<td>".$row[1]."</td>";
				echo "<td>".number_format($row[2],1, ',','.')."</td>";
				echo "<td>".number_format($row[3],1, ',','.')."</td>";
				echo "<td>".number_format($row[4],1, ',','.')."</td>";
				$total = $row[2]+$row[3]+$row[4];
				$media = $total/3;
				echo "<td>".number_format($total, 2, ',','.')."</td>";
				echo "<td>".number_format($media,2, ',','.')."</td>";

				if($row[2] > $maiorSaltoUm){
					$maiorSaltoUm = $row[2];
				}
				if($row[3] > $maiorSaltoDois){
					$maiorSaltoDois = $row[3];
				}
				if($row[4] > $maiorSaltoTres){
					$maiorSaltoTres = $row[4];
				}
			echo "</tr>";
		}
	?>

			<tr>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
			</tr>

			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>Maior Salto 1</td>
				<td><?php echo $maiorSaltoUm; ?></td>
			</tr>

			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>Maior Salto 2</td>
				<td><?php echo $maiorSaltoDois; ?></td>
			</tr>

			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>Maior Salto 3</td>
				<td><?php echo $maiorSaltoTres; ?></td>
			</tr>

		</table>
		</center>
	</div>
</body>
</html>