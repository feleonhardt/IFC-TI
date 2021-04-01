<!DOCTYPE html>
<?php 
	include 'connect/connect.php';
	$title = "Listas";
	$aspas = '"';
	$soma = 0;
	?>	

<html>
<head>

	<style>
		tr:nth-child(even){
			background-color: #AAAAFF;
		}
		tr:hover{
			background-color: ;
		}

	</style>

	<script> 
		function excluirRegistro(url) {
			if (confirm("Confirmar Exclusão?")) {
				location.href = url;
			}
		}
	</script>


	<meta charset="utf-8">
	<title><?php echo $title ?></title>
	<!-- <link rel="stylesheet" href="css/estilo.css"> -->
</head>
<body>
	<form method="post">
			<fieldset>
				<legend>Química, TC Básico</legend>
				<br>
				<center>
				<?php 
					$tipo = isset($_POST['tipo']) ? $_POST['tipo'] : '';
				?>
				<br>
				<select name="tipo" id="tipo">
					<option value="particular" >Particular</option>
					<option value="SUS">SUS</option>
					<option value="plano de saude">Plano de Saúde</option>
					<option value="social">Social</option>
				</select>
				<input type="submit" name="acao" id="acao" value="Buscar"><br>
				
				<table border="4">
					<tr>
						<td><b>Código</b></td>
						<td><b>Paciente</b></td>
						<td><b>medico</b></td>
						<td><b>Data Consulta</b></td>
						<td><b>Tipo Consulta</b></td>
						<td><b>valor</b></td>
						<td><b>Excluir</b></td>
					</tr>

					<?php  
					$sql ="select * from $tb_prova";
							$sql = ' SELECT * FROM ' .$tb_prova. ' WHERE tipo like "'.$tipo.'%" ORDER BY tipo ';
							$result = mysqli_query($conexao, $sql);
							while ($row = mysqli_fetch_array($result)){ 
								$soma = $soma + $row[5];
								echo "<tr>
								<td>".$row[0]."</td>
								<td>".$row[1]."</td>
								<td>".$row[2]."</td>
								<td>".date('d/m/Y', strtotime(str_replace("/", "-", $row[3])))."</td>
								<td>".$row[4]."</td>
								<td>".$row[5]."</td>
								<td><a href=javascript:excluirRegistro('acao.php?acao=excluir&codigo=$row[0]&tabela=$tb_prova&pagina=prova2.php')><img src='img/excluir.jpg' width='20px'/></a></td>
											</tr>";

							} ?>

							<?php	
				echo "<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td>".$soma."</td>
					<td><a></a></td>
				</tr>"
				?>
				</table>
			</fieldset>
		</center>

	</form>
	
</body>
</html>


