<!DOCTYPE html>
<?php
	include 'connect/connect.php';
	$title = "Jogadores";
	$pesquisar = "";
		if(isset($_POST['pesquisar'])){
			$pesquisar = $_POST['pesquisar'];
		}
	$pesquisa = "";
		if(isset($_POST['pesquisa'])){
			$pesquisa = $_POST['pesquisa'];
		}
	$gols = 0;
	$jogos = 0;
	$copas = 0;
	$medias = 0;
	$quant = 0;
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
  	    #tab{
		    float: center; 
		    width: 100%;
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

	<br><br><br>

	<div id="tab">
  		<center>

			<?php
				$sql = 'SELECT * FROM '.$tb_jogadores;
				$result = mysqli_query($conexao,$sql);
			?>
			
			<br><br><br><br><br><br><br><table cellspacing = 0 cellpadding = 2 rules="cols">
			<tr id='th'>
				<th>Código</th>
				<th>Nome</th>
				<th>Seleção</th>
				<th>Gols</th>
				<th>Jogos</th>
				<th>Média</th>
				<th>Copas</th>
			</tr>
	<?php
		while ($row = mysqli_fetch_array($result)){
			echo "<tr>";
				echo "<td>".$row[0]."</td>";
				echo "<td>".$row[1]."</td>";
				echo "<td>".$row[2]."</td>";
				echo "<td>".$row[3]."</td>";
				echo "<td>".$row[4]."</td>";

				$media = $row[3]/$row[4];
				echo "<td>".number_format($media,2, ',','.')."</td>";
				echo "<td>".$row[5]."</td>";

				$gols += $row[3];
				$jogos += $row[4];
				$medias += $media;
				$copas += $row[5];
				$quant++;
			echo "</tr>";
		}
	?>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td><?php echo $gols; ?></td>
			<td><?php echo $jogos; ?></td>
			<td><?php echo number_format($medias/$quant, 4, ',','.'); ?></td>
			<td><?php echo $copas; ?></td>
		</tr>

		</table>
		</center>
	</div>
</body>
</html>