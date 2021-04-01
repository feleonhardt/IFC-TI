<!DOCTYPE html>
<?php
	include 'connect/connect.php';
	$title = "Maquiagem";
?>
<html>
<head>
    <meta charset="UTF-8" />
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/estilo3.css"/>
  	<link rel="shortcut icon" href="img/batom.jpg" type="image/x-icon" />
  	<link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet">

</head>
<body>

	<br>
		<form action="" method="post">
			<fieldset>
				<center><h1>Maquiagem</h1></center>
					<center>
	    				<br><br>
	    				<?php
	    					echo "<table cellspacing = 0 cellpadding = 2 rules='cols'>";
							$sql = "SELECT * FROM ".$tb_maquiagem;
							$result = mysqli_query($conexao,$sql);
							echo "<table>";
							echo "<tr id='th'><th>Código</th><th>Nome</th><th>Marca</th><th>Data de Validade</th><th>Preço</th></tr>";
							while ($row = mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td>".$row[0]."</td>";
								echo "<td>".$row[1]."</td>";
								echo "<td>".$row[2]."</td>";
								echo "<td>".date('d/m/Y', strtotime(str_replace('/','-', $row[3])))."</td>";
								echo "<td>".$row[4]."</td>";
								echo "</tr>";
							}
							echo "</table>";
						?>
						<br><br>
						<a href="simples.php" class="a">Consulta Simples</a><br><br>
						<a href="avancada.php" class="a">Consulta Avançada</a>
					</center>
			</fieldset>
		</form>

</body>
</html>