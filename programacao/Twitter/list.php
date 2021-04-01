<!DOCTYPE html>
<?php
	include 'connect/connect.php';
	$title = "Twitter";
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
</head>
<body>

<div class="head">
	<br>
		<img src = "img/twitter.png" width="80">
	<br>
</div>

<br>
<div class="consulta">
	<center>
	<form action="" method="post">
	    <br><br><b>Consultar Tweets:</b><br>
		<br><input type="radio" name="pesquisa" <?php if($pesquisa == "usuario") echo "checked"; ?> value="usuario">Usuário
		<br><input type="radio" name="pesquisa" <?php if($pesquisa == "data") echo "checked"; ?> value="data">Data
		<br><input type="radio" name="pesquisa" <?php if($pesquisa == "texto") echo "checked"; ?> value="texto">Texto
		<br><br><br>
		<div id="divBusca">
			<img src="img/lupa.png" width="25" />
			<input type="text" id="txtBusca" name="pesquisar" placeholder="Digite..." value="<?php echo $pesquisar ?>"/>
			<button id="btnBusca" type="submit">Consultar</button>
		</div>
	
		<br><br><br><br>
	</form>
	</center>
</div>

	<?php
				if($pesquisa == ''){
					$sql = 'SELECT * FROM '.$tb_twitter;
				}
				else{
					if($pesquisa == "usuario"){
						$sql = "SELECT * FROM ".$tb_twitter." WHERE usuario LIKE '".$pesquisar."%' ORDER BY usuario";
					}
					elseif($pesquisa == "texto"){
						$sql = "SELECT * FROM ".$tb_twitter." WHERE texto LIKE '%".$pesquisar."%' ORDER BY texto";
					}
					elseif ($pesquisa == "data") {
						$pesquisar = str_replace('/', '-', $pesquisar);
						$sql = "SELECT * FROM ".$tb_twitter." WHERE dataPublicacao = date('".date('Y-m-d', strtotime($pesquisar))."') ORDER BY dataPublicacao";
					}
				}

				$result = mysqli_query($conexao,$sql);
			?>

		<div class = 'tweets'>
			<center>
				<br><br><br><br><br>
		<table>
	<?php
		while ($row = mysqli_fetch_array($result)){
			echo "<tr>";
				echo "<td>".$row[1]."</td>";
				echo "<td>".date('d/m/Y', strtotime(str_replace('/','-', $row[2])))."<td>";
			echo "<tr>";
			echo "<tr>";
				echo "<td>".$row[3]."<td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td><img src='img/comentario.png' width = '20'>".$row[4].
				          "⠀⠀⠀⠀⠀⠀⠀⠀⠀"." <img src='img/rt.png' width = '20'>".
				          $row[5]."⠀⠀⠀⠀⠀⠀⠀⠀⠀"." <img src='img/like.png' width = '20'>".
				          $row[6]."</td>";
			echo "</tr>";
			echo "<tr><td><br><br></td></tr>";
		}
	?>
	</table>
	<br><br><br><br>
</center>
</div><br>


</body>
</html>