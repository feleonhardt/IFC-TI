<!DOCTYPE html>
<?php
	include 'connect/connect.php';
	$title = "Lista de Marcas";
	$letras = "";
		if(isset($_POST['letras'])){
			$letras = $_POST['letras'];
		}
?>
<html>
<head>
    <meta charset="UTF-8" />
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/estilo.css" />
  	<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
  	<style>
  		table tbody tr:nth-child(even){
		    background-color:#90EE90;
		}
		tr:hover, tr:nth-child(even):hover{
		    background-color: #FF1493;
		}
  	</style>
</head>
<body>
<form action="" method="post">
	<fieldset>
		<legend>Marcas</legend>
		<center>
			<?php
				$sql = "SELECT * FROM ".$tb_marca;
				$result = mysqli_query($conexao,$sql);
				echo "<table border = 1>";
				echo "<tr><th>Código</th><th>Descrição</th>";
				while ($row = mysqli_fetch_array($result)){
					echo "<tr>";
					echo "<td>".$row[0]."</td>";
					echo "<td>".$row[1]."</td>";
					echo "</tr>";
				}
				echo "</table>";
			?>
		</center>
	</fieldset>
</form>
</body>
</html>